<?php

namespace MrsportBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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
        return $this->render('@Mrsport/admin/dashboard.html.twig');
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
