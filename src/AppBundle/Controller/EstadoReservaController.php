<?php

namespace AppBundle\Controller;

use AppBundle\Entity\EstadoReserva;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Estadoreserva controller.
 *
 * @Route("estadoreserva")
 */
class EstadoReservaController extends Controller
{
    /**
     * Lists all estadoReserva entities.
     *
     * @Route("/", name="estadoreserva_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $estadoReservas = $em->getRepository('AppBundle:EstadoReserva')->findAll();

        return $this->render('estadoreserva/index.html.twig', array(
            'estadoReservas' => $estadoReservas,
        ));
    }

    /**
     * Creates a new estadoReserva entity.
     *
     * @Route("/new", name="estadoreserva_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $estadoReserva = new Estadoreserva();
        $form = $this->createForm('AppBundle\Form\EstadoReservaType', $estadoReserva);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($estadoReserva);
            $em->flush();

            return $this->redirectToRoute('estadoreserva_show', array('id' => $estadoReserva->getId()));
        }

        return $this->render('estadoreserva/new.html.twig', array(
            'estadoReserva' => $estadoReserva,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a estadoReserva entity.
     *
     * @Route("/{id}", name="estadoreserva_show")
     * @Method("GET")
     */
    public function showAction(EstadoReserva $estadoReserva)
    {
        $deleteForm = $this->createDeleteForm($estadoReserva);

        return $this->render('estadoreserva/show.html.twig', array(
            'estadoReserva' => $estadoReserva,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing estadoReserva entity.
     *
     * @Route("/{id}/edit", name="estadoreserva_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, EstadoReserva $estadoReserva)
    {
        $deleteForm = $this->createDeleteForm($estadoReserva);
        $editForm = $this->createForm('AppBundle\Form\EstadoReservaType', $estadoReserva);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('estadoreserva_edit', array('id' => $estadoReserva->getId()));
        }

        return $this->render('estadoreserva/edit.html.twig', array(
            'estadoReserva' => $estadoReserva,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a estadoReserva entity.
     *
     * @Route("/{id}", name="estadoreserva_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, EstadoReserva $estadoReserva)
    {
        $form = $this->createDeleteForm($estadoReserva);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($estadoReserva);
            $em->flush();
        }

        return $this->redirectToRoute('estadoreserva_index');
    }

    /**
     * Creates a form to delete a estadoReserva entity.
     *
     * @param EstadoReserva $estadoReserva The estadoReserva entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(EstadoReserva $estadoReserva)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('estadoreserva_delete', array('id' => $estadoReserva->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
