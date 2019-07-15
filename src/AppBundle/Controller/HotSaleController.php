<?php

namespace AppBundle\Controller;

use AppBundle\Entity\HotSale;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\Paginador\FilterHotSaleType;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Hotsale controller.
 *
 * @Route("hotsale")
 */
class HotSaleController extends Controller
{
    /**
     * Lists all hotSale entities.
     *
     * @Route("/", name="hotsale_index")
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
            ->setFilter(FilterHotSaleType::class)
            ->setFiltersTheme('inline')
            ->setRowsPerPage(15, array(15, 30, 45))
            ->showRowsAtFirst()
            ->setFiltersTheme('inline')
            ->setBaseLayout('admin_base')
            ->setView('hotsale/index.html.twig')
            ->paginate('AppBundle:HotSale');
    }

    /**
     * Creates a new hotSale entity.
     *
     * @Route("/prueba", name="sarasa")
     * @Method({"GET", "POST"})
     */
    public function pruebaAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $form = 

        //Propiedades disponibles HotSales
        // $propiedades = $em->getRepository('AppBundle:Propiedad')->propiedadesDisponiblesHotSale();
        
        //Semanas de subastas disponibles por propiedad para hot sale
        $semanasSubastas = $em->getRepository('AppBundle:Propiedad')->semanasSubastasDisponiblesHotSale(2);
        
        //Semanas de reservas disponibles por propiedad para hot sale
        $semanasReservas = $em->getRepository('AppBundle:Propiedad')->semanasReservasDisponiblesHotSale(2);

        dump($semanasSubastas,$semanasReservas);die;
        // dump($propiedades);die;

        return 'a';
    }

    /**
     * Creates a new hotSale entity.
     *
     * @Route("/new", name="hotsale_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $hotSale = new Hotsale();
        $form = $this->createForm('AppBundle\Form\HotSaleType', $hotSale, ['em' => $em]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $semanaAnio = explode(' - ', $form->get('semana')->getData() );

            $semana = $semanaAnio[0];
            $anio = $semanaAnio[1];

            $hotSale->setSemanaReserva( $semana );
            $hotSale->setAnioReserva( $anio );
            
            $hotSale->setInicio( new \Datetime('today') );
            $fin = new \Datetime('today');
            $fin->setISODate($anio, $semana);
            $hotSale->setFin( $fin );
                    
            $em = $this->getDoctrine()->getManager();
        
            $em->persist($hotSale);
        
            $em->flush();

            return $this->redirectToRoute('hotsale_show', array('id' => $hotSale->getId()));
        }

        return $this->render('hotsale/new.html.twig', array(
            'hotSale' => $hotSale,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a hotSale entity.
     *
     * @Route("/{id}", name="hotsale_show")
     * @Method("GET")
     */
    public function showAction(HotSale $hotSale)
    {
        $deleteForm = $this->createDeleteForm($hotSale);

        return $this->render('hotsale/show.html.twig', array(
            'hotSale' => $hotSale,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing hotSale entity.
     *
     * @Route("/{id}/edit", name="hotsale_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, HotSale $hotSale)
    {
        $deleteForm = $this->createDeleteForm($hotSale);
        $editForm = $this->createForm('AppBundle\Form\HotSaleType', $hotSale);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('hotsale_edit', array('id' => $hotSale->getId()));
        }

        return $this->render('hotsale/edit.html.twig', array(
            'hotSale' => $hotSale,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a hotSale entity.
     *
     * @Route("/{id}", name="hotsale_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, HotSale $hotSale)
    {
        $form = $this->createDeleteForm($hotSale);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($hotSale);
            $em->flush();
        }

        return $this->redirectToRoute('hotsale_index');
    }

    /**
     * Creates a form to delete a hotSale entity.
     *
     * @param HotSale $hotSale The hotSale entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(HotSale $hotSale)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('hotsale_delete', array('id' => $hotSale->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    /**
     * Find Localidad by Partido entity.
     *
     * @Route("/obtener-semanas/disponibles", name="semanas_disponibles_hotsale")
     * @Method({"GET", "POST"})
     */
    public function obtenerCatedrasAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        
        $propiedad = $request->get('propiedadId');

        $result = array();

        //Semanas de subastas disponibles por propiedad para hot sale
        $semanasSubastas = $em->getRepository('AppBundle:Propiedad')->semanasSubastasDisponiblesHotSale($propiedad);
        
        foreach ($semanasSubastas as $ss) {
            
            $key = $ss['semanaSubasta'].' - '.$ss['anioSubasta'];

            if ( !array_key_exists($key, $result) ) {
               
                $result[$key] = $ss['semanaSubasta'].' - '.$ss['anioSubasta']; 
            
            }
        }

        //Semanas de reservas disponibles por propiedad para hot sale
        $semanasReservas = $em->getRepository('AppBundle:Propiedad')->semanasReservasDisponiblesHotSale($propiedad);
        
        foreach ($semanasReservas as $sr) {
            
            $key = $sr['semanaReserva'].' - '.$sr['anioReserva'];

            if ( !array_key_exists($key, $result) ) {
               
                $result[$key] = $sr['semanaReserva'].' - '.$sr['anioReserva']; 
            
            }
        }

        return new JsonResponse($result);
    }
}
