<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Puja;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Puja controller.
 *
 * @Route("puja")
 */
class PujaController extends Controller
{
    /**
     * Lists all puja entities.
     *
     * @Route("/", name="puja_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $pujas = $em->getRepository('AppBundle:Puja')->findAll();

        return $this->render('puja/index.html.twig', array(
            'pujas' => $pujas,
        ));
    }

    /**
     * Finds and displays a puja entity.
     *
     * @Route("/{id}", name="puja_show")
     * @Method("GET")
     */
    public function showAction(Puja $puja)
    {

        return $this->render('puja/show.html.twig', array(
            'puja' => $puja,
        ));
    }



    /**
     * Creates a new propiedad entity.
     *
     * @Route("/nueva/puja", name="puja_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $valorPujado = $request->get('valor');

        $subastaId = $request->get('subasta');

        $subasta = $em->getRepository('AppBundle:Subasta')->find( $subastaId );

        $puja = new Puja();

        $puja->setFecha( new \DateTime() );

        $puja->setMonto( $valorPujado );

        $puja->setSubasta( $subasta );

        //Dejo el usuario por defecto el primero que este creado.
        $usuario = $em->getRepository('AppBundle:Usuario')->find(1);
        
        $puja->setUsuario( $usuario );
        // $puja->setUsuario( $this->getUser() );

        $em->persist($puja);
        $em->flush();

        // $this->render('Bundle:Folder:template.html.twig', array());

        $pujas = $subasta->getPujas();

        $json = array();
        foreach ( $pujas as $p ) {
            $json[] = array(
                "usuario" => $p->getUsuario(),
                "monto" => $p->getMonto()
            );
        }

        return new JsonResponse($pujas);
    
    }
}
