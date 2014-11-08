<?php

namespace crisal\EspecialidadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class SitioController extends Controller
{
    public function estaticaAction($pagina)
    {
        return $this->render('EspecialidadBundle:Sitio:'.$pagina.'.html.twig');
    }
    
}
