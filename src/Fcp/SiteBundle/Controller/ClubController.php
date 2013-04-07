<?php

namespace Fcp\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Fcp\SiteBundle\Entity\Club;

/**
 * Description of ClubController
 *
 * @author Nicolas Van Hoorde
 */
class ClubController extends Controller {

    public function indexAction() {
        return new Response('Hello world!');
    }
    
    public function adminAction()
    {
        $repository = $this->getDoctrine()->getRepository('FcpSiteBundle:Club');
        $clubs = $repository->findAll();
        
        return $this->render('FcpSiteBundle:Club:admin.html.twig',
                array('clubs' => $clubs));
    }
    
    public function createAction(Request $request)
    {
        $club = new Club();
        
        $form = $this->createFormBuilder($club)
                ->add('clubName', 'text', array('label' => 'Clubnaam'))
                ->add('defaultLocation', 'text', array('required' => false, 'label' => 'Locatie'))
                ->getForm();
        
        if($request->isMethod('POST')) {
            $form->bind($request);
            
            if($form->isValid()) {
                $manager = $this->getDoctrine()->getManager();
                $manager->persist($club);
                
                $manager->flush();
                
                $this->get('session')->getFlashBag()->add('success', 'Club succesvol toegevoegd!');
                
                return $this->forward('FcpSiteBundle:Club:Admin');
            }
        }
        
        $repository = $this->getDoctrine()->getRepository('FcpSiteBundle:Club');
        $clubs = $repository->findAll();
            
        return $this->render('FcpSiteBundle:Club:create.html.twig',
                array('form' => $form->createView(), 'clubs' => $clubs));
    }
    
    public function editAction($id, Request $request) {
        
        $manager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository('FcpSiteBundle:Club');
        $club = $repository->find($id);
        
        if (!$club) {
                throw $this->createNotFoundException('Geen club gevonden met id '.$id);
        }
        
        $form = $this->createFormBuilder($club)
                ->add('clubName', 'text', array('label' => 'Clubnaam'))
                ->add('defaultLocation', 'text', array('required' => false, 'label' => 'Locatie'))
                ->getForm();
        
        if($request->isMethod('POST')) {
            $form->bind($request);
            
            if($form->isValid()) {
                $manager->flush();
                
                 $this->get('session')->getFlashBag()->add('success', 'Club succesvol aangepast!');
            }
        }

        $clubs = $repository->findAll();
        
        return $this->render('FcpSiteBundle:Club:edit.html.twig',
                array('form' => $form->createView(), 'clubs' =>  $clubs, 'id' => $id));
    }
    
    public function deleteAction(Request $request) {
        $manager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository('FcpSiteBundle:Club');
        $club = $repository->find($request->get('club_id'));
        
        $manager->remove($club);
        $manager->flush();
        
        $this->get('session')->getFlashBag()->add('success', 'Club succesvol verwijderd!');
        
        return new \Symfony\Component\HttpFoundation\JsonResponse('Success');
    }
}