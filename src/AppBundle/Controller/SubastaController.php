<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Subasta;
use AppBundle\Entity\Reserva;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormError;
use AppBundle\Form\Paginador\FilterSubastaType;
use AppBundle\Form\Paginador\FilterSubastaAdministradorType;

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
            ->setFilter(FilterSubastaAdministradorType::class)
            // ->setFiltersTheme('inline')
            ->setRowsPerPage(15, array(15, 30, 45))
            ->showRowsAtFirst()
            ->setFiltersTheme('inline')
            ->setBaseLayout('admin_base')
            ->setView('subasta/index.html.twig')
            ->paginate('AppBundle:Subasta');
    }

    /**
     * Lists all subasta entities.
     *
     * @Route("/publico", name="subasta_index_publico")
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
            ->setFilter(FilterSubastaType::class)
            ->setFiltersTheme('inline')
            ->setRowsPerPage(15, array(15, 30, 45))
            ->showRowsAtFirst()
            ->setFiltersTheme('inline')
            ->setBaseLayout('base')
            ->setView('subasta/indexPublico.html.twig')
            ->paginate('AppBundle:Subasta', 'publicoQuery');
    }

    /**
     * Creates a new subasta entity.
     *
     * @Route("/new", name="subasta_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        
        $subasta = new Subasta();
        
        $form = $this->createForm('AppBundle\Form\SubastaType', $subasta, array(
            'em' => $em,
        ));
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {


            $sem=$subasta->getSemanaReserva();
            $anio=$subasta->getAnioReserva();

            $reserva = $em->getRepository('AppBundle:Reserva')->findByPropiedadAndSemana($subasta->getPropiedad()->getId(),$sem,$anio);

            if ($reserva == null) {

                $dto = new \DateTime("today");
                $dto->setISODate($anio, $sem);
                $subasta->setFechaInicio($dto->modify('-6 months'));
                $subasta->setFechaFin($dto->modify('+3 day'));

                $subasta->setEstado($em->getRepository('AppBundle:EstadoSubasta')->find(1));

                $subasta->setUltimoValor($subasta->getMontoBase());

                $em->persist($subasta);
                $em->flush();

                $this->get('session')->getFlashBag()->add('success', 'Subasta creada exitosamente.');

                return $this->redirectToRoute('subasta_index');
            }else{

                $form->get('propiedad')->addError(new FormError('La propiedad ya se encuentra reservada para la semana seleccionada.'));
                return $this->render('subasta/new.html.twig', array(
                    'subasta' => $subasta,
                    'form' => $form->createView(),
                ));
            }
        }

        return $this->render('subasta/new.html.twig', array(
            'subasta' => $subasta,
            'form' => $form->createView(),
        ));
    }

    /**
     * Creates a new subasta entity.
     *
     * @Route("/multiple_new", name="subasta_multiple_new")
     * @Method({"GET", "POST"})
     */
    public function newMultipleAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        
        $today = new \DateTime("today");
        $end = clone $today;
        $end->modify('+3 day');
        $dto = new \DateTime("today");
        
        $inicioSemana = $dto->modify('+6 months');

        if ($inicioSemana->format('D') != 'Mon') {
            $inicioSemana->modify('next monday');
        }

        $finSemana = clone $inicioSemana;
        $finSemana->modify('+6 day');

        $semana = $inicioSemana->format('W');
        $anio = $inicioSemana->format('Y');

        $propiedades = $em->getRepository('AppBundle:Propiedad')->findParaSubasta(intval($semana), intval($anio));

        $todasLasPropiedades = $em->getRepository('AppBundle:Propiedad')->findBy(array('habilitada'=> 'S' ) , array('id'=>'ASC'));
        $diff = array_diff($todasLasPropiedades, $propiedades);

        // dump($todasLasPropiedades, $propiedades, $diff);die;

        if(count($diff) > 0){

            foreach ($diff as $p) {

                $subasta = new Subasta();
                $subasta->setPropiedad($p);

                $subasta->setFechaInicio($today);
                $subasta->setFechaFin($end);

                $subasta->setFechaReservaInicio($inicioSemana);
                $subasta->setFechaReservaFin($finSemana);

                $subasta->setSemanaReserva($semana);
                $subasta->setAnioReserva($anio);

                $subasta->setMontoBase($p->getPrecio());

                $subasta->setEstado($em->getRepository('AppBundle:EstadoSubasta')->find(1));

                $subasta->setUltimoValor($p->getPrecio());

                $em->persist($subasta);
            }

            $em->flush();

            $this->get('session')->getFlashBag()->add('success', 'Se han creado subastas para la semana <b>'.$semana.' del año '.$anio.'</b>.');

        }else{

            $this->get('session')->getFlashBag()->add('info', '<b>NO</b> se crearon subastas para la semana <b>'.$semana.' del año '.$anio.'</b>. Han sido reservadas o estan en puja.');

        }

        return $this->redirectToRoute('subasta_index');

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
     * Finds and displays a subasta entity.
     *
     * @Route("/publico/{id}", name="subasta_show_publico")
     * @Method("GET")
     */
    public function showPublicoAction(Subasta $subasta)
    {
        $deleteForm = $this->createDeleteForm($subasta);

        return $this->render('subasta/showPublico.html.twig', array(
            'subasta' => $subasta,
            'pujas'   => $subasta->getPujas(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Finds and displays a subasta entity.
     *
     * @Route("/cerrar/{id}", name="subasta_cerrar")
     * @Method("GET")
     */
    public function cerrarSubastaAction(Subasta $subasta)
    {
        $em = $this->getDoctrine()->getManager();

        if (!$subasta->getPujas()->isEmpty()){
            $reserva = new Reserva();
            $reserva->setUsuario($subasta->getPujaGanadora()->getUsuario());
            $reserva->setPropiedad($subasta->getPropiedad());
            $reserva->setSemana($subasta->getAnioReserva());
            $reserva->setAnio($subasta->getSemanaReserva());
            $reserva->setEstado($em->getRepository('AppBundle:EstadoReserva')->find(1));
            $fecha = new \DateTime();
            $fecha->setISODate($reserva->getSemana(), $reserva->getAnio());
            $reserva->setFechaInicio(new \DateTime());
            $reserva->setFechaFin($fecha->modify('+6 day'));

            $subasta->setEstado($em->getRepository('AppBundle:EstadoSubasta')->find(2));

            $em->persist($reserva);
            $this->get('session')->getFlashBag()->add('success', 'Subasta cerrada. <b>'.$reserva->getUsuario().'</b> fue el ganador.'); 

        }else{
            $this->get('session')->getFlashBag()->add('success', 'Subasta cerrada. No hubo pujas.'); 
        }

        $subasta->setEstado($em->getRepository('AppBundle:EstadoSubasta')->find(2));

        $em->persist($subasta);
        $em->flush();

        return $this->redirectToRoute('subasta_index');
        
    }

    /**
     * Finds and displays a subasta entity.
     *
     * @Route("/cerrar_todas_subastas/", name="subasta_cerrar_todas")
     * @Method("GET")
     */
    public function cerrarTodasSubastaAction()
    {
        $em = $this->getDoctrine()->getManager();

        $subastas = $em->getRepository('AppBundle:Subasta')->findByEstado(1);

        if (count($subastas) > 0 ){
            foreach ($subastas as $s) {

                if (!$s->getPujas()->isEmpty()){


                    $reserva = new Reserva();
                    $reserva->setUsuario($s->getPujaGanadora()->getUsuario());
                    $reserva->setPropiedad($s->getPropiedad());
                    $reserva->setSemana($s->getAnioReserva());
                    $reserva->setAnio($s->getSemanaReserva());
                    $reserva->setEstado($em->getRepository('AppBundle:EstadoReserva')->find(1));
                    $fecha = new \DateTime();
                    $fecha->setISODate($reserva->getSemana(), $reserva->getAnio());
                    $reserva->setFechaInicio(new \DateTime());
                    $reserva->setFechaFin($fecha->modify('+6 day'));

                    foreach ($s->getCreditos() as $credito) {

                        if ($credito->getUsuario() != $s->getPujaGanadora()->getUsuario()) {
                            $credito->setEstado(1);
                        }else{
                            $credito->setReserva($reserva);
                        }
                        $em->persist($credito);
                    }

                    $em->persist($reserva);
                }

                $s->setEstado($em->getRepository('AppBundle:EstadoSubasta')->find(2));
                $em->persist($s);
            }
        }

        $em->flush();

        $this->get('session')->getFlashBag()->add('success', 'Todas las subastas han sido cerradas.');

        return $this->redirectToRoute('subasta_index');
        
    }

    /**
     * Displays a form to edit an existing subasta entity.
     *
     * @Route("/{id}/edit", name="subasta_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Subasta $subasta)
    {   
        $em = $this->getDoctrine()->getManager();

        $deleteForm = $this->createDeleteForm($subasta);
        
        $editForm = $this->createForm('AppBundle\Form\SubastaType', $subasta, array(
            'em' => $em,
        ));
        
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
        
            $em->flush();

            $this->get('session')->getFlashBag()->add('success', 'Subasta modificada exitosamente.');

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
