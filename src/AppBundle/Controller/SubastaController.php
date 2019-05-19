<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Subasta;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Subasta controller.
 *
 * @Route("subasta")
 */
class SubastaController extends Controller
{
    /**
     * Lists all subasta entities.
     *
     * @Route("/", name="subasta_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        return $this->get('pg.pg')
            // ->setOrder(
            //     array('Nombre' => 'nombre',
            //         'Nivel' => 'nivel'
            //     , 'Padre' => 'padre'),
            //     'nivel',
            //     'asc'
            // )
            ->noRemember(true)
            // ->setFilter(FilterCategoriasType::class)
            // ->setFiltersTheme('inline')
            ->setRowsPerPage(15, array(15, 30, 45))
            ->showRowsAtFirst()
            ->setFiltersTheme('inline')
            ->setBaseLayout('admin_base')
            ->setView('subasta/index.html.twig')
            ->paginate('AppBundle:Subasta');
    }

    /**
     * Creates a new subasta entity.
     *
     * @Route("/new", name="subasta_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $subasta = new Subasta();
        $form = $this->createForm('AppBundle\Form\SubastaType', $subasta);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($subasta);
            $em->flush();

            return $this->redirectToRoute('subasta_show', array('id' => $subasta->getId()));
        }

        return $this->render('subasta/new.html.twig', array(
            'subasta' => $subasta,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a subasta entity.
     *
     * @Route("/{id}", name="subasta_show")
     * @Method("GET")
     */
    public function showAction(Subasta $subasta)
    {
        $deleteForm = $this->createDeleteForm($subasta);

        return $this->render('subasta/show.html.twig', array(
            'subasta' => $subasta,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing subasta entity.
     *
     * @Route("/{id}/edit", name="subasta_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Subasta $subasta)
    {
        $deleteForm = $this->createDeleteForm($subasta);
        $editForm = $this->createForm('AppBundle\Form\SubastaType', $subasta);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('subasta_edit', array('id' => $subasta->getId()));
        }

        return $this->render('subasta/edit.html.twig', array(
            'subasta' => $subasta,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a subasta entity.
     *
     * @Route("/{id}", name="subasta_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Subasta $subasta)
    {
        $form = $this->createDeleteForm($subasta);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($subasta);
            $em->flush();
        }

        return $this->redirectToRoute('subasta_index');
    }

    /**
     * Creates a form to delete a subasta entity.
     *
     * @param Subasta $subasta The subasta entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Subasta $subasta)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('subasta_delete', array('id' => $subasta->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
