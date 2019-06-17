<?php

namespace AppBundle\Controller;

use AppBundle\Entity\SolicitudCliente;
use AppBundle\Entity\Usuario;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Solicitudcliente controller.
 *
 * @Route("solicitudcliente")
 */
class SolicitudClienteController extends Controller
{
    /**
     * Lists all solicitudCliente entities.
     *
     * @Route("/", name="solicitudcliente_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $solicitudClientes = $em->getRepository('AppBundle:SolicitudCliente')->findAll();

        return $this->render('solicitudcliente/index.html.twig', array(
            'solicitudClientes' => $solicitudClientes,
        ));
    }

    /**
     * Creates a new solicitudCliente entity.
     *
     * @Route("/new", name="solicitudcliente_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $solicitudCliente = new Solicitudcliente();
        $form = $this->createForm('AppBundle\Form\SolicitudClienteType', $solicitudCliente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($solicitudCliente);
            $em->flush();

            return $this->redirectToRoute('solicitudcliente_show', array('id' => $solicitudCliente->getId()));
        }

        return $this->render('solicitudcliente/new.html.twig', array(
            'solicitudCliente' => $solicitudCliente,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a solicitudCliente entity.
     *
     * @Route("/{id}", name="solicitudcliente_show")
     * @Method("GET")
     */
    public function showAction(SolicitudCliente $solicitudCliente)
    {
        $deleteForm = $this->createDeleteForm($solicitudCliente);

        return $this->render('solicitudcliente/show.html.twig', array(
            'solicitudCliente' => $solicitudCliente,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing solicitudCliente entity.
     *
     * @Route("/{id}/edit", name="solicitudcliente_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, SolicitudCliente $solicitudCliente)
    {
        $deleteForm = $this->createDeleteForm($solicitudCliente);
        $editForm = $this->createForm('AppBundle\Form\SolicitudClienteType', $solicitudCliente);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('solicitudcliente_edit', array('id' => $solicitudCliente->getId()));
        }

        return $this->render('solicitudcliente/edit.html.twig', array(
            'solicitudCliente' => $solicitudCliente,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a solicitudCliente entity.
     *
     * @Route("/{id}", name="solicitudcliente_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, SolicitudCliente $solicitudCliente)
    {
        $form = $this->createDeleteForm($solicitudCliente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($solicitudCliente);
            $em->flush();
        }

        return $this->redirectToRoute('solicitudcliente_index');
    }

    /**
     * Creates a form to delete a solicitudCliente entity.
     *
     * @param SolicitudCliente $solicitudCliente The solicitudCliente entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(SolicitudCliente $solicitudCliente)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('solicitudcliente_delete', array('id' => $solicitudCliente->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }


    /**
     *
     * @Route("/solicitud/alta/premium", name="solicitud_alta_premium")
     * @Method("POST")
     */
    public function solicitudAltaPremiumAction(Request $request)
    {   
       
        $userId = $request->get('id');
        
        $usuario = $em->getRepository('AppBundle:Usuario')->findById( $userId );

        $solicitud = $em->getRepository('AppBundle:SolicitudCliente')->findOneBy( array( 
            'usuario' => $usuario,
            'tipo' => 'A',
            'finalizada' => 'N',
        ));

        if ( empty($solicitud) ) {
            
            $solicitud = new SolicitudCliente();
            $solicitud->setUsuario( $usuario );
            $solicitud->setFecha( new \DateTime('today') );
            $solicitud->setTipo('A');
            $solicitud->setFinalizada('N');

            $this->addFlash('success', 'Solicitud enviada exitosamente.');
            return new JsonResponse( true );

        }else{

            $this->addFlash('danger', 'Usted tiene una solicitud en proceso de aceptación.');

            return new JsonResponse( false );
        }

    }
}
