<?php

namespace MrsportBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MrsportBundle:Default:index.html.twig');
    }
}
