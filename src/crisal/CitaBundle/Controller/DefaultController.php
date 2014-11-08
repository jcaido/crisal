<?php

namespace crisal\CitaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CitaBundle:Default:index.html.twig', array('name' => $name));
    }
}
