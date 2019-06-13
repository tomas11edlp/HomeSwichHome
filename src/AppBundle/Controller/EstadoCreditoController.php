<?php

namespace AppBundle\Controller;

use AppBundle\Entity\EstadoCredito;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Estadocredito controller.
 *
 * @Route("estadocredito")
 */
class EstadoCreditoController extends Controller
{
    /**
     * Lists all estadoCredito entities.
     *
     * @Route("/", name="estadocredito_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $estadoCreditos = $em->getRepository('AppBundle:EstadoCredito')->findAll();

        return $this->render('estadocredito/index.html.twig', array(
            'estadoCreditos' => $estadoCreditos,
        ));
    }

    /**
     * Creates a new estadoCredito entity.
     *
     * @Route("/new", name="estadocredito_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $estadoCredito = new Estadocredito();
        $form = $this->createForm('AppBundle\Form\EstadoCreditoType', $estadoCredito);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($estadoCredito);
            $em->flush();

            return $this->redirectToRoute('estadocredito_show', array('id' => $estadoCredito->getId()));
        }

        return $this->render('estadocredito/new.html.twig', array(
            'estadoCredito' => $estadoCredito,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a estadoCredito entity.
     *
     * @Route("/{id}", name="estadocredito_show")
     * @Method("GET")
     */
    public function showAction(EstadoCredito $estadoCredito)
    {
        $deleteForm = $this->createDeleteForm($estadoCredito);

        return $this->render('estadocredito/show.html.twig', array(
            'estadoCredito' => $estadoCredito,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing estadoCredito entity.
     *
     * @Route("/{id}/edit", name="estadocredito_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, EstadoCredito $estadoCredito)
    {
        $deleteForm = $this->createDeleteForm($estadoCredito);
        $editForm = $this->createForm('AppBundle\Form\EstadoCreditoType', $estadoCredito);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('estadocredito_edit', array('id' => $estadoCredito->getId()));
        }

        return $this->render('estadocredito/edit.html.twig', array(
            'estadoCredito' => $estadoCredito,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a estadoCredito entity.
     *
     * @Route("/{id}", name="estadocredito_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, EstadoCredito $estadoCredito)
    {
        $form = $this->createDeleteForm($estadoCredito);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($estadoCredito);
            $em->flush();
        }

        return $this->redirectToRoute('estadocredito_index');
    }

    /**
     * Creates a form to delete a estadoCredito entity.
     *
     * @param EstadoCredito $estadoCredito The estadoCredito entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(EstadoCredito $estadoCredito)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('estadocredito_delete', array('id' => $estadoCredito->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
