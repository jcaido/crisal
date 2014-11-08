<?php

namespace crisal\EspecialistaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{   
    public function especialistasAction()
    {
        return $this->render('EspecialistaBundle:Default:especialistas.html.twig');    
    }
}
