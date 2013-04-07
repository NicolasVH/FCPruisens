<?php

namespace Fcp\SiteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Fcp\SiteBundle\Entity\Fixture;
use Fcp\SiteBundle\Form\FixtureType;

/**
 * Fixture controller.
 *
 */
class FixtureController extends Controller
{
    public function indexAction() {
        $manager = $this->getDoctrine()->getManager();
        
        $competitions = $manager->createQuery('SELECT c FROM FcpSiteBundle:Competition c
                                ORDER BY c.toDate DESC')->setMaxResults(2)->getResult();
        
        $fixtures = $manager->createQueryBuilder()
                            ->select('f')
                            ->from('FcpSiteBundle:Fixture', 'f')
                            ->where('f.competition IN (:competitions)')
                            ->orderby('f.scheduledDate', 'desc')
                            ->setParameter('competitions', $competitions)
                            ->getQuery()
                            ->getResult();
        
        return $this->render('FcpSiteBundle:Fixture:index.html.twig', array(
            'fixtures' => $fixtures
        ));
    }
    
    public function showAction($id) {
        $repository = $this->getDoctrine()->getRepository('FcpSiteBundle:Fixture');
        $fixture = $repository->find($id);
        
        if (!$fixture) {
                throw $this->createNotFoundException('Geen wedstrijd gevonden met id '.$id);
        }
        
        return $this->render('FcpSiteBundle:Fixture:show.html.twig',
                array('fixture' => $fixture));
    }
    
    
    public function adminAction()
    {
        $repository = $this->getDoctrine()->getRepository('FcpSiteBundle:Fixture');
        $fixtures = $repository->findBy(array(), array('scheduledDate' => 'desc'));
        
        return $this->render('FcpSiteBundle:Fixture/admin:admin.html.twig',
                array('fixtures' => $fixtures));
    }
    
    public function createAction(Request $request)
    {
        $fixture = new Fixture();
        $form   = $this->createForm(new FixtureType(), $fixture);
        
        if($request->isMethod('POST')) {
            $form->bind($request);
            
            if($form->isValid()) {
                $manager = $this->getDoctrine()->getManager();
                
                foreach($fixture->getGoalScorers() as $gs) {
                    $gs->setFixture($fixture);
                }
                
                $manager->persist($fixture);
                
                $manager->flush();
                
                $this->get('session')->getFlashBag()->add('success', 'Wedstrijd succesvol toegevoegd!');
                
                return $this->forward('FcpSiteBundle:Fixture:Admin');
            }
        }
        
        $repository = $this->getDoctrine()->getRepository('FcpSiteBundle:Fixture');
        $fixtures = $repository->findBy(array(), array('scheduledDate' => 'desc'));
            
        return $this->render('FcpSiteBundle:Fixture/admin:create.html.twig',
                array('form' => $form->createView(), 'fixtures' => $fixtures));
    }
    
    public function editAction($id, Request $request) {
        
        $manager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository('FcpSiteBundle:Fixture');
        $fixture = $repository->find($id);
        
        if (!$fixture) {
                throw $this->createNotFoundException('Geen wedstrijd gevonden met id '.$id);
        }
        
        $originalGs = array();
        
        foreach($fixture->getGoalScorers() as $gs) {
            $originalGs[] = $gs;
        }
        
        $form = $this->createForm(new FixtureType(), $fixture);
        
        if($request->isMethod('POST')) {
            $form->bind($request);
            
            if($form->isValid()) {
                
                foreach($fixture->getGoalScorers() as $gs) {
                    foreach($originalGs as $key=> $toDel) {
                        if($toDel->getId() === $gs->getId()) {
                            unset($originalGs[$key]);
                        }
                    }
                }
                
                foreach($originalGs as $gs) {
                    //$gs->setFixture(null);
                    
                    $manager->remove($gs);
                   // $manager->persist($gs);
                }
                            
                foreach($fixture->getGoalScorers() as $gs) {
                    $gs->setFixture($fixture);
                }
                
                $manager->flush();
                
                $this->get('session')->getFlashBag()->add('success', 'Wedstrijd succesvol aangepast!');
            }
        }

        $fixtures = $repository->findBy(array(), array('scheduledDate' => 'desc'));
        
        return $this->render('FcpSiteBundle:Fixture/admin:edit.html.twig',
                array('form' => $form->createView(), 'fixtures' =>  $fixtures, 'id' => $id));
    }
    
    public function deleteAction(Request $request) {
        $manager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository('FcpSiteBundle:Fixture');
        $fixture = $repository->find($request->get('fixture_id'));
        
        foreach($fixture->getGoalScorers() as $gs) {
            $manager->remove($gs);
        }
        
        $manager->remove($fixture);
        $manager->flush();
        
        $this->get('session')->getFlashBag()->add('success', 'Wedstrijd succesvol verwijderd!');
        
        return new \Symfony\Component\HttpFoundation\JsonResponse('Success');
    }
}
