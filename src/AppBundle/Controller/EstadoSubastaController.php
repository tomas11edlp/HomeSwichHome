<?php

namespace AppBundle\Controller;

use AppBundle\Entity\EstadoSubasta;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Estadosubastum controller.
 *
 * @Route("estadosubasta")
 */
class EstadoSubastaController extends Controller
{
    /**
     * Lists all estadoSubastum entities.
     *
     * @Route("/", name="estadosubasta_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $estadoSubastas = $em->getRepository('AppBundle:EstadoSubasta')->findAll();

        return $this->render('estadosubasta/index.html.twig', array(
            'estadoSubastas' => $estadoSubastas,
        ));
    }

    /**
     * Creates a new estadoSubastum entity.
     *
     * @Route("/new", name="estadosubasta_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $estadoSubastum = new EstadoSubasta();
        $form = $this->createForm('AppBundle\Form\EstadoSubastaType', $estadoSubastum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($estadoSubastum);
            $em->flush();

            return $this->redirectToRoute('estadosubasta_show', array('id' => $estadoSubastum->getId()));
        }

        return $this->render('estadosubasta/new.html.twig', array(
            'estadoSubastum' => $estadoSubastum,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a estadoSubastum entity.
     *
     * @Route("/{id}", name="estadosubasta_show")
     * @Method("GET")
     */
    public function showAction(EstadoSubasta $estadoSubastum)
    {
        $deleteForm = $this->createDeleteForm($estadoSubastum);

        return $this->render('estadosubasta/show.html.twig', array(
            'estadoSubastum' => $estadoSubastum,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing estadoSubastum entity.
     *
     * @Route("/{id}/edit", name="estadosubasta_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, EstadoSubasta $estadoSubastum)
    {
        $deleteForm = $this->createDeleteForm($estadoSubastum);
        $editForm = $this->createForm('AppBundle\Form\EstadoSubastaType', $estadoSubastum);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('estadosubasta_edit', array('id' => $estadoSubastum->getId()));
        }

        return $this->render('estadosubasta/edit.html.twig', array(
            'estadoSubastum' => $estadoSubastum,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a estadoSubastum entity.
     *
     * @Route("/{id}", name="estadosubasta_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, EstadoSubasta $estadoSubastum)
    {
        $form = $this->createDeleteForm($estadoSubastum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($estadoSubastum);
            $em->flush();
        }

        return $this->redirectToRoute('estadosubasta_index');
    }

    /**
     * Creates a form to delete a estadoSubastum entity.
     *
     * @param EstadoSubasta $estadoSubastum The estadoSubastum entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(EstadoSubasta $estadoSubastum)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('estadosubasta_delete', array('id' => $estadoSubastum->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
