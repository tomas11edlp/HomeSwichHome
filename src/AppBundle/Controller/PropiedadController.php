<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Propiedad;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\Paginador\FilterPropiedadType;
use Symfony\Component\HttpFoundation\JsonResponse;

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
            ->setView('propiedad/index.html.twig')
            ->paginate('AppBundle:Propiedad');
    }


    /**
     * Lists all propiedad entities.
     *
     * @Route("/publico/propiedades", name="propiedad_index_publico")
     * @Method("GET")
     */
    public function indexPublicoAction()
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
            ->setFilter(FilterPropiedadType::class)
            // ->setFiltersTheme('inline')
            ->setRowsPerPage(15, array(15, 30, 45))
            ->showRowsAtFirst()
            ->setFiltersTheme('inline')
            ->setBaseLayout('base')
            ->setView('propiedad/indexPublico.html.twig')
            ->paginate('AppBundle:Propiedad', 'propiedadesHabilitadas');
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

            $propiedad->setHabilitada('S');

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
     * Finds and displays a propiedad entity.
     *
     * @Route("/publico/{id}", name="propiedad_show_publico")
     * @Method("GET")
     */
    public function showPublicoAction(Propiedad $propiedad)
    {
        $deleteForm = $this->createDeleteForm($propiedad);

        return $this->render('propiedad/showPublico.html.twig', array(
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
     * @Route("/delete/{id}", name="propiedad_delete")
     * @Method("GET|POST")
     */
    public function deleteAction(Propiedad $propiedad)
    {

        $em = $this->getDoctrine()->getManager();

        $em->remove($propiedad);

        $em->flush();

        $this->get('session')->getFlashBag()->add('success', 'La propiedad fu&eacute; eliminada.');

        return $this->redirectToRoute('propiedad_index');
    }

    /**
     * Deletes a propiedad entity.
     *
     * @Route("/deshabilitar/{id}", name="propiedad_deshabilitar")
     * @Method("GET|POST")
     */
    public function deshabilitarAction(Propiedad $propiedad)
    {

        $em = $this->getDoctrine()->getManager();

        $propiedad->setHabilitada('N');

        $em->persist($propiedad);

        $em->flush();

        $this->get('session')->getFlashBag()->add('success', 'La propiedad fu&eacute; deshabilitada.');

        return $this->redirectToRoute('propiedad_index');
    }

    /**
     * Deletes a propiedad entity.
     *
     * @Route("/habilitar/{id}", name="propiedad_habilitar")
     * @Method("GET|POST")
     */
    public function habilitarAction(Propiedad $propiedad)
    {

        $em = $this->getDoctrine()->getManager();

        $propiedad->setHabilitada('S');

        $em->persist($propiedad);

        $em->flush();

        $this->get('session')->getFlashBag()->add('success', 'La propiedad fu&eacute; habilitada.');

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

    /**
     * Autocomplete jQuery UI.
     *
     * @Route("/autocomplete/propiedad", name="propiedad_autocomplete")
     * @Method("GET")
     */
    public function autocompletePropiedadAction(Request $request)
    {   
       
        $titulo = $request->get('term');
       
        $propiedades = $this->get("doctrine.orm.default_entity_manager")
                         ->getRepository("AppBundle:Propiedad")
                         ->findPropiedadPorTitulo( $titulo );
       
        $json = array();
        foreach ( $propiedades as $p ) {
            $json[] = array(
                "codigo" => $p->getId(),
                "value" => $p->getTitulo()
            );
        }

        return new JsonResponse( $json );
    }
}
