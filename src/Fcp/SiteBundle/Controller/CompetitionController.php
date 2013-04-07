<?php

namespace Fcp\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Fcp\SiteBundle\Entity\Competition;
use Fcp\SiteBundle\Form\CompetitionType;

/**
 * Description of CompetitionController
 *
 * @author Nicolas Van Hoorde
 */
class CompetitionController extends Controller {
    
    public function indexAction() {
        return new Response('Hello world!');
    }
    
    public function adminAction()
    {
        $repository = $this->getDoctrine()->getRepository('FcpSiteBundle:Competition');
        $competitions = $repository->findAll();
        
        return $this->render('FcpSiteBundle:Competition:admin.html.twig',
                array('competitions' => $competitions));
    }
    
    public function createAction(Request $request)
    {
        $competition = new Competition();
        $form   = $this->createForm(new CompetitionType(), $competition);
        
        if($request->isMethod('POST')) {
            $form->bind($request);
            
            if($form->isValid()) {
                $manager = $this->getDoctrine()->getManager();
                $manager->persist($competition);
                
                $manager->flush();
                
                $this->get('session')->getFlashBag()->add('success', 'Competitie succesvol toegevoegd!');
                
                return $this->forward('FcpSiteBundle:Competition:Admin');
            }
        }
        
        $repository = $this->getDoctrine()->getRepository('FcpSiteBundle:Competition');
        $competitions = $repository->findAll();
            
        return $this->render('FcpSiteBundle:Competition:create.html.twig',
                array('form' => $form->createView(), 'competitions' => $competitions));
    }
    
    public function editAction($id, Request $request) {
        
        $manager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository('FcpSiteBundle:Competition');
        $competition = $repository->find($id);
        
        if (!$competition) {
                throw $this->createNotFoundException('Geen competitie gevonden met id '.$id);
        }
        
        $form   = $this->createForm(new CompetitionType(), $competition);
        
        if($request->isMethod('POST')) {
            $form->bind($request);
            
            if($form->isValid()) {
                $manager->flush();
                
                 $this->get('session')->getFlashBag()->add('success', 'Competitie succesvol aangepast!');
            }
        }

        $competitions = $repository->findAll();
        
        return $this->render('FcpSiteBundle:Competition:edit.html.twig',
                array('form' => $form->createView(), 'competitions' =>  $competitions, 'id' => $id));
    }
    
    public function deleteAction(Request $request) {
        $manager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository('FcpSiteBundle:Competition');
        $competition = $repository->find($request->get('competition_id'));
        
        $manager->remove($competition);
        $manager->flush();
        
        $this->get('session')->getFlashBag()->add('success', 'Competitie succesvol verwijderd!');
        
        return new \Symfony\Component\HttpFoundation\JsonResponse('Success');
    }

    public function addClubAction($id) {
        
        $manager = $this->getDoctrine()->getManager();
        $repository = $manager->getRepository('FcpSiteBundle:Competition');
    
        $competition = $repository->find($id);
        
        $repository = $manager->getRepository('FcpSiteBundle:Club');
        
        $club = $repository->find(1);
        
        $competition->addClub($club);
        
        $manager->flush();
        
        return new Response('Hello world!');
    }

}