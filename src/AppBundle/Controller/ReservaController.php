<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Reserva;
use AppBundle\Entity\Propiedad;
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
