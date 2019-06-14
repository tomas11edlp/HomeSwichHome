<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Credito;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Credito controller.
 *
 * @Route("credito")
 */
class CreditoController extends Controller
{
    /**
     * Lists all credito entities.
     *
     * @Route("/", name="credito_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $creditos = $em->getRepository('AppBundle:Credito')->findAll();

        return $this->render('credito/index.html.twig', array(
            'creditos' => $creditos,
        ));
    }

    /**
     * Creates a new credito entity.
     *
     * @Route("/new", name="credito_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $credito = new Credito();
        $form = $this->createForm('AppBundle\Form\CreditoType', $credito);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($credito);
            $em->flush();

            return $this->redirectToRoute('credito_show', array('id' => $credito->getId()));
        }

        return $this->render('credito/new.html.twig', array(
            'credito' => $credito,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a credito entity.
     *
     * @Route("/{id}", name="credito_show")
     * @Method("GET")
     */
    public function showAction(Credito $credito)
    {
        $deleteForm = $this->createDeleteForm($credito);

        return $this->render('credito/show.html.twig', array(
            'credito' => $credito,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing credito entity.
     *
     * @Route("/{id}/edit", name="credito_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Credito $credito)
    {
        $deleteForm = $this->createDeleteForm($credito);
        $editForm = $this->createForm('AppBundle\Form\CreditoType', $credito);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('credito_edit', array('id' => $credito->getId()));
        }

        return $this->render('credito/edit.html.twig', array(
            'credito' => $credito,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a credito entity.
     *
     * @Route("/{id}", name="credito_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Credito $credito)
    {
        $form = $this->createDeleteForm($credito);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($credito);
            $em->flush();
        }

        return $this->redirectToRoute('credito_index');
    }

    /**
     * Creates a form to delete a credito entity.
     *
     * @param Credito $credito The credito entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Credito $credito)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('credito_delete', array('id' => $credito->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
