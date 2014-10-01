<?php

namespace Chileplaner\ChileplanerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ChileplanerChileplanerBundle:Default:index.html.twig', array('name' => $name));
    }
}
