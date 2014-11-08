<?php

namespace crisal\EspecialidadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function portadaAction()
    {
        return $this->render('EspecialidadBundle:Default:portada.html.twig');
    }
    
    public function quienessomosAction()
    {
        return $this->render('EspecialidadBundle:Default:quienes.html.twig');
    }
    
    public function especialidadesAction()
    {
        return $this->render('EspecialidadBundle:Default:especialidades.html.twig');
    }
}
