<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use AppBundle\Entity\Usuario;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request)
	{
	    $authenticationUtils = $this->get('security.authentication_utils');
	    
	    // get the login error if there is one
	    $error = $authenticationUtils->getLastAuthenticationError();
	    
	    // last username entered by the user
	    $lastUsername = $authenticationUtils->getLastUsername();

	    // dump( ); die;


	    return $this->render('security/login.html.twig', array(
	    // return $this->render('contenedor.html.twig', array(
	        'last_username' => $lastUsername,
	        'error'         => $error,
	    ));
	}

    /**
     * @Route("/inicio", name="inicio")
     */
    public function inicioAction(Request $request)
	{
		$em = $this->getDoctrine()->getManager();
		
	    return $this->render('default/index.html.twig', array(
	        'textoBienvenida' => 'Bienvenido al Sistema',
	    ));
	}

	/**
     * @Route("/crearPass", name="crearPass")
     */
    public function crearPassAction(Request $request)
	{
	    $em = $this->getDoctrine()->getManager();

		// Perfil 1 = Administrador
	    // Perfil 2 = Operador
	    // Perfil 3 = Super Administrador
	    $perfil = $em->getRepository('AppBundle:Perfil')->find(3);

		// Origen 1 = Idytac
	    // Origen 2 = Hospital Español
	    // Origen 3 = Sanatorio Argentino
	    $origen = $em->getRepository('AppBundle:Origen')->find(1);

	    // whatever *your* User object is
		$user = new Usuario();
		$plainPassword = 'adminClave';
		$encoder = $this->container->get('security.password_encoder');
		$encoded = $encoder->encodePassword($user, $plainPassword);

		$user->setPassword($encoded);
		$user->setPerfil( $perfil );
		$user->setOrigen( $origen );
		$user->setIsActive( true );
		$user->setUsuario( "admin" );
		$user->setNombre( "Administrador" );
        $user->setFechaCreacion( new \Datetime() );

		$em->persist( $user );
		$em->flush();

		return $this->redirect($this->generateUrl('login', array()));
	}


	/**
     * @Route("/crearUser", name="crearUser")
     */
    public function crearUserAction(Request $request)
	{
		$factory = $this->get('security.encoder_factory');

	    $user = new User();

	    $encoder = $factory->getEncoder($user);
	    $user->setSalt(md5(time()));
		$plainPassword = 'adminClave';
	    $pass = $encoder->encodePassword($plainPassword, $user->getSalt());
	    $user->setPassword($pass);
		$user->setPerfil( $perfil );
	    $user->setActive(1); //enable or disable
		$user->setUsuario( "admin" );
		$user->setNombre( "Administrador" );
        $user->setFechaCreacion( new \Datetime() );

	    $em = $this->getDoctrine()->getEntityManager();
	    $em->persist($user);
	    $em->flush();

	    return new Response('Sucessful');
	}
}