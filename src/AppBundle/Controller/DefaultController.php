<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/home", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $user= $this->get('session')->get('user');
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/administracion", name="adminpage")
     */
    public function indexAdminAction(Request $request)
    {
        $user = $this->get('session')->get('useradmin');

        if($user){
        // replace this example code with whatever you need
            return $this->render('default/admin_index.html.twig');
        }else{
            $session->getFlashBag()->add('danger', 'No tiene acceso.');
            return $this->redirectToRoute('homepage');   
        }
    }

    /**
     * @Route("/clearsession", name="clearsession")
     */
    public function clearSessionAction(Request $request)
    {
        $session = $this->get('session');

        $session->remove('user');
        $session->remove('useradmin');
        $session->clear();
        $session->getFlashBag()->add('success', 'Sesi&oacute;n finalizada. Hasta pronto!');

        return $this->redirectToRoute('homepage');
    }
}


