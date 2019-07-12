<?php

namespace AppBundle\Security;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Http\Authorization\AccessDeniedHandlerInterface;
use Symfony\Component\Routing\RouterInterface;


class AccessDeniedHandler implements AccessDeniedHandlerInterface
{
	private $router;
    
    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }

    public function handle(Request $request, AccessDeniedException $accessDeniedException)
    {

        $request->getSession()->getFlashbag()->add('danger', 'No tiene permisos.');

        $url = $this->router->generate('homepage');
        
        return new RedirectResponse($url);
    }
}