<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Propiedad;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Propiedad controller.
 *
 * @Route("propiedad")
 */
class PropiedadController extends Controller
{
    /**
     * Lists all propiedad entities.
     *
     * @Route("/", name="propiedad_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $propiedads = $em->getRepository('AppBundle:Propiedad')->findAll();

        return $this->render('propiedad/index.html.twig', array(
            'propiedads' => $propiedads,
        ));
    }

    /**
     * Creates a new propiedad entity.
     *
     * @Route("/new", name="propiedad_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $propiedad = new Propiedad();
        $form = $this->createForm('AppBundle\Form\PropiedadType', $propiedad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($propiedad);
            $em->flush();

            return $this->redirectToRoute('propiedad_show', array('id' => $propiedad->getId()));
        }

        return $this->render('propiedad/new.html.twig', array(
            'propiedad' => $propiedad,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a propiedad entity.
     *
     * @Route("/{id}", name="propiedad_show")
     * @Method("GET")
     */
    public function showAction(Propiedad $propiedad)
    {
        $deleteForm = $this->createDeleteForm($propiedad);

        return $this->render('propiedad/show.html.twig', array(
            'propiedad' => $propiedad,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing propiedad entity.
     *
     * @Route("/{id}/edit", name="propiedad_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Propiedad $propiedad)
    {
        $deleteForm = $this->createDeleteForm($propiedad);
        $editForm = $this->createForm('AppBundle\Form\PropiedadType', $propiedad);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('propiedad_edit', array('id' => $propiedad->getId()));
        }

        return $this->render('propiedad/edit.html.twig', array(
            'propiedad' => $propiedad,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a propiedad entity.
     *
     * @Route("/{id}", name="propiedad_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Propiedad $propiedad)
    {
        $form = $this->createDeleteForm($propiedad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($propiedad);
            $em->flush();
        }

        return $this->redirectToRoute('propiedad_index');
    }

    /**
     * Creates a form to delete a propiedad entity.
     *
     * @param Propiedad $propiedad The propiedad entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Propiedad $propiedad)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('propiedad_delete', array('id' => $propiedad->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}