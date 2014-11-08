<?php

namespace crisal\UsuarioBundle\Listener;

use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Router;

class LoginListener
{
    private $contexto, $router, $usuario = null;
    
    public function __construct(SecurityContext $context, Router $router)
    {
        $this->contexto = $context;
        $this->router = $router;
    }
    
    public function onSecurityInteractiveLogin(InteractiveLoginEvent $event)
    {
        $token = $event->getAuthenticationToken();
        $this->usuario = $token->getUser()->getId();
    }
    
    public function onKernelResponse(FilterResponseEvent $event)
    {
        if (null != $this->usuario) {
            
            if ($this->contexto->isGranted('ROLE_ESPECIALISTA')) {
                $pagina = $this->router->generate('extranet_portada');    
            }else{
                $pagina = $this->router->generate('usuario_citas', array('user' => $this->usuario));
            };
            
            $event->setResponse(new RedirectResponse($pagina));
            $event->stopPropagation();
        }     
    }
}

?>