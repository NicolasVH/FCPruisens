<?php

namespace Fcp\SiteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Fcp\SiteBundle\Entity\Player;
use Fcp\SiteBundle\Form\PlayerType;

/**
 * Player controller.
 *
 */
class PlayerController extends Controller
{      
    public function indexAction()
    {
        $manager = $this->getDoctrine()->getManager();
        
        $positions = array("keeper", "defender", "midfielder", "attacker");
        
        foreach($positions as $position) {
          $query = $manager->createQuery('SELECT p FROM FcpSiteBundle:Player p 
            WHERE p.preferredPosition = :preferredPosition')
                ->setParameter('preferredPosition', $position);
          
          $players[$position] = $query->getResult();
        }
        
        return $this->render('FcpSiteBundle:Player:index.html.twig',
                array('players' => $players));
    }
      
    public function profileAction($slug)
    {
        $manager = $this->getDoctrine()->getManager();
        
        $repository = $this->getDoctrine()->getRepository('FcpSiteBundle:Player');
              
        $player = $repository->findOneBySlug($slug);
        $playerid = $player->getId();
        
        $query = $manager->createQuery('SELECT c FROM FcpSiteBundle:Competition c
                                WHERE c.competitionType = :type
                                ORDER BY c.toDate DESC');
        
        $season = $query->setParameter('type', 'season')
                        ->setMaxResults(1)
                        ->getOneOrNullResult();
        
        $cup = $query->setParameter('type', 'cup')
                        ->setMaxResults(1)
                        ->getOneOrNullResult();
        
        $query = $manager->createQuery(
                'SELECT SUM(g.amountScored) AS AmountScored FROM FcpSiteBundle:Goalscorer g
                 JOIN FcpSiteBundle:Fixture f WHERE f = g.fixture
                 JOIN FcpSiteBundle:Competition c WHERE c = f.competition
                 WHERE c = :c AND g.player = :player
                 ');
        
        $seasonGoals = $query->setParameter('c', $season)
                                ->setParameter('player', $player)
                                ->setMaxResults(1)
                                ->getOneOrNullResult();
        
        $cupGoals = $query->setParameter('c', $cup)
                                ->setParameter('player', $player)
                                ->setMaxResults(1)
                                ->getOneOrNullResult();
        
        $query = $manager->createQuery(
                'SELECT SUM(g.amountScored) AS AmountScored FROM FcpSiteBundle:Goalscorer g
                 WHERE g.player = :player
                 ');
        
        $allGoals = $query->setParameter('player', $player)
                                ->setMaxResults(1)
                                ->getOneOrNullResult();
        
        $sql = " 
            SELECT COUNT(player_id) AS YellowCarded FROM fcpruisens.fixture_yellowcarded yc
            WHERE yc.player_id = :playerid;
        ";

        $stmt = $manager->getConnection()->prepare($sql);
        $stmt->bindParam(':playerid', $playerid);
        $stmt->execute();
        
        $yellow = $stmt->fetchAll();
        
        $sql = " 
            SELECT COUNT(player_id) AS RedCarded FROM fcpruisens.fixture_redcarded rc
            WHERE rc.player_id = :playerid;
        ";
        
        $stmt = $manager->getConnection()->prepare($sql);
        $stmt->bindParam(':playerid', $playerid);
        
        $stmt->execute();
        
        $red = $stmt->fetchAll();
        
        $stats = array(
            'seasongoals' => $seasonGoals['AmountScored'], 
            'cupgoals' => $cupGoals['AmountScored'], 
            'allgoals' => $allGoals['AmountScored'], 
            'yellowcarded' => $yellow[0]['YellowCarded'], 
            'redcarded' => $red[0]['RedCarded']
            );
        
        $query = $manager->createQuery('SELECT p FROM FcpSiteBundle:Player p
                                WHERE p.lastName < :lastName
                                ORDER BY p.lastName DESC');
        

        $previousPlayer = $query->setParameter('lastName', $player->getLastName())
                        ->setMaxResults(1)
                        ->getOneOrNullResult();
        
        $query = $manager->createQuery('SELECT p FROM FcpSiteBundle:Player p
                                WHERE p.lastName > :lastName
                                ORDER BY p.lastName ASC');

        $nextPlayer = $query->setParameter('lastName', $player->getLastName())
                        ->setMaxResults(1)
                        ->getOneOrNullResult();
        
        return $this->render('FcpSiteBundle:Player:profile.html.twig',
                array('player' => $player, 'stats' => $stats, 'previous' => $previousPlayer, 'next' => $nextPlayer));
    }
    
     /**
     * Gets all the statistics; some from a certain (latest) competition, some overall.
     * @return view
     */
    public function statisticsAction()
    {   
        $manager = $this->getDoctrine()->getManager();
        
        $query = $manager->createQuery('SELECT c FROM FcpSiteBundle:Competition c
                                WHERE c.competitionType = :type
                                ORDER BY c.toDate DESC');
        
        $season = $query->setParameter('type', 'season')
                        ->setMaxResults(1)
                        ->getOneOrNullResult();
        
        $cup = $query->setParameter('type', 'cup')
                        ->setMaxResults(1)
                        ->getOneOrNullResult();
        
        $query = $manager->createQuery(
                'SELECT p.firstName, p.lastName, SUM(gs.amountScored) AS AmountScored FROM FcpSiteBundle:Player p
                 JOIN FcpSiteBundle:Goalscorer gs WHERE gs.player = p
                 JOIN FcpSiteBundle:Fixture f WHERE f = gs.fixture
                 JOIN FcpSiteBundle:Competition c WHERE c = f.competition
                 WHERE c = :c AND c.competitionType = :type
                 GROUP BY p.id
                 ORDER by AmountScored DESC');
        
        $seasonGoalScorers = $query->setParameter('c', $season)
                                    ->setParameter('type', 'season')
                                    ->getResult();
        
        $cupGoalScorers = $query->setParameter('c', $cup)
                                    ->setParameter('type', 'cup')
                                    ->getResult();
        
        $hallOfFame = $manager->createQuery(
                'SELECT p.firstName, p.lastName, SUM(gs.amountScored) AS AmountScored FROM FcpSiteBundle:Player p
                 JOIN FcpSiteBundle:Goalscorer gs WHERE gs.player = p
                 JOIN FcpSiteBundle:Fixture f WHERE f = gs.fixture
                 JOIN FcpSiteBundle:Competition c WHERE c = f.competition
                 GROUP BY p.id
                 ORDER by AmountScored DESC')->getResult();
        
        return $this->render('FcpSiteBundle:Player:statistics.html.twig', array(
                'seasonGoalScorers' => $seasonGoalScorers,
                'cupGoalScorers' => $cupGoalScorers,
                'season' => $season,
                'cup' => $cup,
                'hallOfFame' => $hallOfFame
        ));
    }
    
    public function adminAction()
    {
        $manager = $this->getDoctrine()->getManager();

        $players = $manager->getRepository('FcpSiteBundle:Player')->findAll();

        return $this->render('FcpSiteBundle:Player/admin:admin.html.twig', array(
            'players' => $players,
        ));
    }
    
    public function createAction(Request $request)
    {
        $player = new Player();
        
        $form = $this->createForm(new PlayerType(), $player);
        
        if($request->isMethod('POST')) {
            $form->bind($request);

            if($form->isValid()) {
                $manager = $this->getDoctrine()->getManager();
                
                if(is_null($player->getSlug())) {
                    $player->setSlug(strtolower(str_replace(" ", "-", $player->getFirstName() . ' ' . $player->getLastName())));
                }
                
                $manager->persist($player);
                
                $manager->flush();
                
                $this->get('session')->getFlashBag()->add('success', 'Speler succesvol toegevoegd!');
                
                return $this->forward('FcpSiteBundle:Player:Admin');
            }
        }
        
        $repository = $this->getDoctrine()->getRepository('FcpSiteBundle:Player');
        $players = $repository->findAll();
            
        return $this->render('FcpSiteBundle:Player/admin:create.html.twig',
                array('form' => $form->createView(), 'players' => $players));
    }
       
    public function editAction($id, Request $request)
    {
        $dir = __DIR__ . '/../../../../web/uploads';
        
        $manager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository('FcpSiteBundle:Player');
        $player = $repository->find($id);
        
        if (!$player) {
                throw $this->createNotFoundException('Geen speler gevonden met id '.$id);
        }
        
        $form = $this->createForm(new PlayerType(), $player);
        
        if($request->isMethod('POST')) {
            
            $form->bind($request);
            
            if($form->isValid()) {
                
                if(!$form['image']->isEmpty()) {
                    $data = $form['image']->getData();
                    $copiedFile = $data->move($dir, $data->getClientOriginalName());
                   
                    $player->setImage("uploads\\" . $copiedFile->getBasename());
                }
            
                if($player->getSlug() == "") {
                    $player->setSlug(strtolower(str_replace(" ", "-", $player->getFirstName() . ' ' . $player->getLastName())));
                }
                
                $manager->flush();
                
                $this->get('session')->getFlashBag()->add('success', 'Speler succesvol aangepast!');
            }
        }

        $players = $repository->findAll();
        
        return $this->render('FcpSiteBundle:Player/admin:edit.html.twig',
                array('form' => $form->createView(), 'players' =>  $players, 'id' => $id));
    }
     
    public function deleteAction(Request $request)
    {
        $manager = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository('FcpSiteBundle:Player');
        $speler = $repository->find($request->get('player_id'));
        
        $manager->remove($speler);
        $manager->flush();
        
        $this->get('session')->getFlashBag()->add('success', 'Speler succesvol verwijderd!');
        
        return new \Symfony\Component\HttpFoundation\JsonResponse('Success');
    }
}
