<?php

namespace MrsportBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Mrsport/Default/index.html.twig');
    }

    public function equipeAction()
    {
        return $this->render('@Mrsport/Default/equipe.html.twig');
    }


    public function football_agendaAction()
    {
        return $this->render('@Mrsport/Default/football_agenda.html.twig');
    }

    public function football_resultat_classementAction()
    {
        return $this->render('@Mrsport/Default/football_resultat_classement.html.twig');
    }

   



}
