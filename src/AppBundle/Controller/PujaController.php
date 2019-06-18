<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Puja;
use AppBundle\Entity\Credito;
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

        $usuario = $this->getUser();

        $credito = $em->getRepository('AppBundle:Credito')->creditoEnSubasta($usuario->getId(), $request->get('subasta'));

        $subasta = $em->getRepository('AppBundle:Subasta')->find($request->get('subasta'));
        if($credito == null){

            $creditos = $em->getRepository('AppBundle:Credito')->creditosDisponibles($usuario->getId());

            if (count($creditos) > 0) {

                $cred = $creditos[0];
                $cred->setEstado($em->getRepository('AppBundle:EstadoCredito')->find(2));
                
                $cred->setSubasta($subasta);

                $valorPujado = $request->get('valor');

                $subasta->setUltimoValor($valorPujado);

                $puja = new Puja();

                $puja->setFecha( new \DateTime() );

                $puja->setMonto( $valorPujado );

                $puja->setSubasta( $subasta );
                
                $puja->setUsuario( $usuario );
                // $puja->setUsuario( $this->getUser() );

                $em->persist($cred);
                $em->persist($subasta);
                $em->persist($puja);
                $em->flush();

                $mensaje = null;
                // $this->render('Bundle:Folder:template.html.twig', array());
            }else{
                $mensaje = "No posee créditos suficientes.";
            }
        }else{
            $valorPujado = $request->get('valor');

            $subasta->setUltimoValor($valorPujado);

            $puja = new Puja();

            $puja->setFecha( new \DateTime() );

            $puja->setMonto( $valorPujado );

            $puja->setSubasta( $subasta );
            
            $puja->setUsuario( $usuario );
            // $puja->setUsuario( $this->getUser() );

            $em->persist($subasta);
            $em->persist($puja);
            $em->flush();

            $mensaje = null;
        }

        $pujas = $subasta->getPujas();

        $json = array();
        foreach ( $pujas as $p ) {
            $json[] = array(
                "usuario" => $p->getUsuario(),
                "monto" => $p->getMonto()
            );
        }

        return new JsonResponse(array(
            'mensaje' => $mensaje,
            'html' => $this->renderView('puja/ultimas_pujas.html.twig', array(
                'subasta' => $subasta,
            )),
        ));
    
    }
}
