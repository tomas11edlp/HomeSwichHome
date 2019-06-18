<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Tarjeta;
use AppBundle\Entity\Usuario;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Tarjetum controller.
 *
 * @Route("tarjeta")
 */
class TarjetaController extends Controller
{
    /**
     * Lists all tarjetum entities.
     *
     * @Route("/", name="tarjeta_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tarjetas = $em->getRepository('AppBundle:Tarjeta')->findAll();

        return $this->render('tarjeta/index.html.twig', array(
            'tarjetas' => $tarjetas,
        ));
    }

    /**
     * Creates a new tarjetum entity.
     *
     * @Route("/new/{id}", name="tarjeta_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request, Usuario $usuario)
    {
        $tarjeta = new tarjeta();
        $form = $this->createForm('AppBundle\Form\TarjetaType', $tarjeta);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tarjeta);
            $em->flush();

            $this->get('session')->getFlashBag()->add('success', 'Medio de pago creado exitosamente.');

            return $this->redirectToRoute('perfil_cliente_show', array( 'id' => $usuario->getId()));
        }

        return $this->render('tarjeta/new.html.twig', array(
            'usuario' => $usuario,
            'tarjeta' => $tarjeta,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tarjetum entity.
     *
     * @Route("/{id}", name="tarjeta_show")
     * @Method("GET")
     */
    public function showAction(Tarjeta $tarjetum)
    {
        $deleteForm = $this->createDeleteForm($tarjetum);

        return $this->render('tarjeta/show.html.twig', array(
            'tarjetum' => $tarjetum,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tarjetum entity.
     *
     * @Route("/{id}/edit", name="tarjeta_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Tarjeta $tarjeta)
    {
        $deleteForm = $this->createDeleteForm($tarjeta);
        $editForm = $this->createForm('AppBundle\Form\TarjetaType', $tarjeta);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            $this->getDoctrine()->getManager()->flush();

            $this->get('session')->getFlashBag()->add('success', 'Medio de pago modificado exitosamente.');

            return $this->redirectToRoute('perfil_cliente_show', array( 'id' => $tarjeta->getUsuario()->getId() ));
        }
        return $this->render('tarjeta/edit.html.twig', array(
            'tarjeta' => $tarjeta,
            'usuario' => $tarjeta->getUsuario(),
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a tarjetum entity.
     *
     * @Route("/{id}/borrarTarjeta", name="tarjeta_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Tarjeta $tarjeta)
    {
        $usuario = $tarjeta->getUsuario();

        $em = $this->getDoctrine()->getManager();
        $em->remove($tarjeta);
        $em->flush();
        // }

        return $this->redirectToRoute('perfil_cliente_show', array( 'id' => $usuario->getId()));
    }

    /**
     * Creates a form to delete a tarjetum entity.
     *
     * @param Tarjeta $tarjetum The tarjetum entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tarjeta $tarjetum)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tarjeta_delete', array('id' => $tarjetum->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
