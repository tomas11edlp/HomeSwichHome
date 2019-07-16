<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Reserva;
use AppBundle\Entity\Propiedad;
use AppBundle\Entity\Credito;
use AppBundle\Entity\Usuario;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Reserva controller.
 *
 * @Route("reserva")
 */
class ReservaController extends Controller
{
    /**
     * Lists all reserva entities.
     *
     * @Route("/", name="reserva_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $reservas = $em->getRepository('AppBundle:Reserva')->findAll();

        return $this->render('reserva/index.html.twig', array(
            'reservas' => $reservas,
        ));
    }


    /**
     * Lists all reserva entities.
     *
     * @Route("/{id}/reserva_propiedad", name="reserva_propiedad_index")
     * @Method("GET|POST")
     */
    public function indexReservaPropiedadAction(Request $request, Propiedad $propiedad)
    {
        $em = $this->getDoctrine()->getManager();

        $reserva = new Reserva();
        $reserva->setPropiedad($propiedad);
     
        $form = $this->createForm('AppBundle\Form\ReservaType', $reserva);
     
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) { 


            $usuario = $this->getUser();

            $creditos = $em->getRepository('AppBundle:Credito')->creditosDisponibles($usuario->getId());

            if (count($creditos) > 0) {
                $cred = $creditos[0];
                $cred->setEstado($em->getRepository('AppBundle:EstadoCredito')->find(2));
                
                $reserva->setUsuario($usuario);
                $fecha = new \DateTime("now");
                $fecha->setISODate($reserva->getAnio(), $reserva->getSemana());
                $reserva->setFechaInicio($fecha);
                $fechaFin = clone $fecha;
                $reserva->setFechaFin($fechaFin->modify('+6 days'));

                $estado = $em->getRepository('AppBundle:EstadoReserva')->find(1);
                $reserva->setEstado( $estado );
            
                $aux1 = new \DateTime();
                $aux2 = new \DateTime();
                $aux1 = $aux1->modify('+6 months')->modify('last monday');
                $aux2 = $aux2->modify('+12 months')->modify('last monday');


                if($reserva->getFechaInicio() <= $aux1 && $reserva->getFechaInicio() >= $aux2){

                    $this->get('session')->getFlashBag()->add('danger', 'La semana a reservar debe comenzar entre los 6 y 12 meses proximos.');
                    return $this->redirectToRoute('reserva_propiedad_index', array('id' => $propiedad->getId()));

                }

                $this->get('session')->getFlashBag()->add('success', 'Reserva exitosa.');

                $em->persist($cred);
                $em->persist($reserva);
                $em->flush();
                // return $this->redirectToRoute('homepage');

            }else{
                $this->get('session')->getFlashBag()->add('danger', 'No posee creditos suficientes.');
            }



        }

        $pg = $this->get('pg.pg')
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
            ->addQueryParams(array(
                    'propiedad' => $propiedad->getId()
                ))
            ->addViewParams(array(
                    'propiedad' => $propiedad,
                    'reserva' => $reserva,
                    'form' => $form->createView()
                ))
            ->setRowsPerPage(30)
            ->showRowsAtFirst()
            ->setFiltersTheme('inline')
            ->setBaseLayout('base')
            ->setView('reserva/index.html.twig')
            ->paginate('AppBundle:Reserva');

        return $pg;
    }


    /**
     * Lists all reserva entities.
     *
     * @Route("/reservas/usuario", name="reservas_usuario_index")
     * @Method("GET|POST")
     */
    public function indexReservasDelUsuarioAction(Request $request)
    {

        $usuario = $this->getUser();

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
            ->setBaseLayout('base')
            ->setView('reserva/indexReservasDelUsuario.html.twig')
            ->addQueryParams(array(
                    'usuario' => $usuario->getId()
                ))
            ->paginate('AppBundle:Reserva', 'reservasDelUsuario');

    }

    /**
     * Creates a new reserva entity.
     *
     * @Route("/new", name="reserva_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $reserva = new Reserva();
        $form = $this->createForm('AppBundle\Form\ReservaType', $reserva);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();



            $em->persist($reserva);
            $em->flush();

            return $this->redirectToRoute('reserva_show', array('id' => $reserva->getId()));
        }

        return $this->render('reserva/new.html.twig', array(
            'reserva' => $reserva,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a reserva entity.
     *
     * @Route("/{id}", name="reserva_show")
     * @Method("GET")
     */
    public function showAction(Reserva $reserva)
    {
        $deleteForm = $this->createDeleteForm($reserva);

        return $this->render('reserva/show.html.twig', array(
            'reserva' => $reserva,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing reserva entity.
     *
     * @Route("/{id}/edit", name="reserva_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Reserva $reserva)
    {
        $deleteForm = $this->createDeleteForm($reserva);
        $editForm = $this->createForm('AppBundle\Form\ReservaType', $reserva);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reserva_edit', array('id' => $reserva->getId()));
        }

        return $this->render('reserva/edit.html.twig', array(
            'reserva' => $reserva,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing reserva entity.
     *
     * @Route("/{id}/cancelar", name="cancelar_reserva")
     * @Method({"GET", "POST"})
     */
    public function cancelarReservaAction(Request $request, Reserva $reserva)
    {   
        $fechaActual = new \DateTime('now');
        
        if ( $fechaActual < $reserva->getFechaInicio() ) {
            
            $em = $this->getDoctrine()->getManager();

            
            if ( empty($reserva->getHotSale()) ) {
                
                $credito = $em->getRepository('AppBundle:Credito')->findOneByReserva( $reserva );
                $credito->setReserva(null);
                $estadoCredito = $em->getRepository('AppBundle:EstadoCredito')->find(1); 
                $credito->setEstado($estadoCredito);
                $em->persist($credito);
            
            }else{

                $hotSale = $em->getRepository('AppBundle:HotSale')->findOneByReserva( $reserva );
                if ( !empty($hotSale) ) {
                    $hotSale->setReserva(null);
                    $em->remove($hotSale);
                }   
                
            }

            $estadoReserva = $em->getRepository('AppBundle:estadoReserva')->find(3);
            $reserva->setEstado($estadoReserva); 


            $date1 = $reserva->getFechaInicio();
            $date2 = $fechaActual;
            $interval = $date1->diff($date2);
            $diff = $interval->format('%m');

            // if($diff > 6){
            //     echo 'false';
            // }else{
            //     echo 'true';
            // }
            if ($diff > 6) {
                $em->remove($reserva);
            }else{
                $em->persist($reserva);
            }

            $em->flush();
            
            $this->get('session')->getFlashBag()->add('success', 'La reserva fue cancelada exitosamente.');

        }else{

            $this->get('session')->getFlashBag()->add('danger', 'No se puede cancelar una reserva. La estadía ya comenzó.');
        } 

        return $this->redirectToRoute('reservas_usuario_index');        
    }

    /**
     * Deletes a reserva entity.
     *
     * @Route("/{id}", name="reserva_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Reserva $reserva)
    {
        $form = $this->createDeleteForm($reserva);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($reserva);
            $em->flush();
        }

        return $this->redirectToRoute('reserva_index');
    }

    /**
     * Creates a form to delete a reserva entity.
     *
     * @param Reserva $reserva The reserva entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Reserva $reserva)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('reserva_delete', array('id' => $reserva->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
