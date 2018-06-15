<?php

namespace MrsportBundle\Controller;

use MrsportBundle\Entity\Club;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MrsportBundle\Entity\User;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Mrsport/Default/index.html.twig');
    }

    public function back_officeAction()
    {
        return $this->render('@Mrsport/Back_office/index.html.twig');
    }

    public function basket_resultat_classementAction()
    {
        return $this->render('@Mrsport/Basket/basket_resultat_classement.html.twig');
    }

    public function basket_agendaAction()
    {
        return $this->render('@Mrsport/Basket/basket_agenda.html.twig');
    }

    public function basketAction()
    {
        return $this->render('@Mrsport/Basket/basket.html.twig');
    }

    public function footballAction()
    {
        return $this->render('@Mrsport/Football/football.html.twig');
    }

    public function football_agendaAction()
    {
        return $this->render('@Mrsport/Football/football_agenda.html.twig');
    }

    public function football_resultat_classementAction()
    {
        return $this->render('@Mrsport/Football/football_resultat_classement.html.twig');
    }

    public function liste_clubAction()
    {
        return $this->render('@Mrsport/Club/liste_club.html.twig');
    }

    public function liste_club_footballAction()
    {
        // requete 
        $em = $this->getDoctrine()->getManager();

        $clubsfootball = $em->getRepository(Club::class)->findBy(
            array( 'sports' => 1)
        );
        return $this->render('@Mrsport/Club/liste_club_football.html.twig', 
        array(
            'clubs' => $clubsfootball
        ));
    }

    public function liste_club_basketAction()
    {
        // requete 
        $em = $this->getDoctrine()->getManager();

        $clubsbasket = $em->getRepository(Club::class)->findBy(
            array( 'sports' => 4)
        );
        return $this->render('@Mrsport/Club/liste_club_basket.html.twig', 
        array(
            'clubs' => $clubsbasket
        ));
    }

    public function liste_club_rugbyAction()
    {
        // requete 
        $em = $this->getDoctrine()->getManager();

        $clubsrugby = $em->getRepository(Club::class)->findBy(
            array( 'sports' => 2)
        );
        return $this->render('@Mrsport/Club/liste_club_rugby.html.twig', 
        array(
            'clubs' => $clubsrugby
        ));
    }

    public function liste_club_hockeyAction()
    {
        // requete 
        $em = $this->getDoctrine()->getManager();

        $clubshockey = $em->getRepository(Club::class)->findBy(
            array( 'sports' => 3)
        );
        return $this->render('@Mrsport/Club/liste_club_hockey.html.twig', 
        array(
            'clubs' => $clubshockey
        ));
    }

    public function single_clubAction()
    {
        return $this->render('@Mrsport/Club/single_club.html.twig');
    }

    public function contactAction()
    {
        return $this->render('@Mrsport/Contact/contact.html.twig');
    }

    public function hockey_agendaAction()
    {
        return $this->render('@Mrsport/Hockey/hockey_agenda.html.twig');
    }
    public function hockey_resultat_classementAction()
    {
        return $this->render('@Mrsport/Hockey/hockey_resultat_classement.html.twig');
    }

    public function hockeyAction()
    {
        return $this->render('@Mrsport/Hockey/hockey.html.twig');
    }

    public function rugbyAction()
    {
        return $this->render('@Mrsport/Rugby/rugby.html.twig');
    }

    public function rugby_resultat_classementAction()
    {
        return $this->render('@Mrsport/Rugby/rugby_resultat_classement.html.twig');
    }

    public function rugby_agendaAction()
    {
        return $this->render('@Mrsport/Rugby/rugby_agenda.html.twig');
    }

    public function evenementAction()
    {
        return $this->render('@Mrsport/Evenement/evenement.html.twig');
    }

    public function dashboardAction()
    {
        // doctrine
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('MrsportBundle:User')->findlastfive();
        $evenements = $em->getRepository('MrsportBundle:Evenements')->findlastfive();
        $clubs = $em->getRepository('MrsportBundle:Club')->findlastfive();
        

        
        return $this->render('@Mrsport/admin/dashboard.html.twig',array(
            'users'  => $users,
            'evenements' => $evenements,
            'clubs' => $clubs,
            
           
        ));
    }

    public function listing_usersAction()
    {
        return $this->render('@Mrsport/admin/listing_users.html.twig');
    }

    public function validation_clubAction()
    {
        return $this->render('@Mrsport/admin/validation_club.html.twig');
    }

    public function validation_evenementAction()
    {
        return $this->render('@Mrsport/admin/validation_evenement.html.twig');
    }



   



}
