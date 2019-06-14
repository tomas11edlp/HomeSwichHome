<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Usuario;
use AppBundle\Entity\Credito;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;


/**
 * Usuario controller.
 *
 * @Route("usuario")
 */
class UsuarioController extends Controller
{   

     /**
     * Lists all usuario entities.
     *
     * @Route("/", name="usuario_index")
     * @Method({"GET", "POST"})
     */
    public function indexAction(Request $request)
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
            ->setView('usuario/index.html.twig')
            ->paginate('AppBundle:Usuario', 'findClientes');
    }

    /**
     * Creates a new usuario entity.
     *
     * @Route("/new", name="usuario_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $usuario = new Usuario();
        $form = $this->createForm('AppBundle\Form\UsuarioType', $usuario);
        $form->handleRequest($request);

        // $usuario->setUsuario( $this->getUser() );
        // $usuario->setFechaCreacion( new \Datetime() );
        // $usuario->setIsActive( true );

        if ($form->isSubmitted() && $form->isValid()) {
            
            try {
                $em = $this->getDoctrine()->getManager();

                $encoder = $this->container->get('security.password_encoder');
                $encoded = $encoder->encodePassword($usuario, $form->get('plainPassword')->getData());
                
                $usuario->setPassword( $encoded );
                $usuario->setRol('COMUN');

                $cred = new Credito();
                $cred2 = new Credito();
                $estado = $em->getRepository('AppBundle:EstadoCredito')->find(1);
                $cred->setEstado($estado);
                $cred2->setEstado($estado);
                $fecha = date('d/m/Y', strtotime('+1 year'));
                $cred->setVencimiento($fecha);
                $cred2->setVencimiento($fecha);

                $usuario->addCredito($cred);
                $usuario->addCredito($cred2);

                $em->persist($usuario);
                $em->flush();

                $this->addFlash('success', 'Registro creado correctamente.');

            } catch(\Exception $e) {
                $this->addFlash('danger', 'Ocurrio un ERROR. El registro no pudo ser creado.');
                $this->addFlash('danger', $e);

                return $this->redirectToRoute('usuario_new');
            }

            return $this->redirectToRoute('login');
        }

        return $this->render('usuario/new.html.twig', array(
            'usuario' => $usuario,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a usuario entity.
     *
     * @Route("/{id}", name="usuario_show")
     * @Method("GET")
     */
    public function showAction(Usuario $usuario)
    {
        $deleteForm = $this->createDeleteForm($usuario);

        return $this->render('usuario/show.html.twig', array(
            'usuario' => $usuario,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing usuario entity.
     *
     * @Route("/{id}/edit", name="usuario_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Usuario $usuario)
    {
        $deleteForm = $this->createDeleteForm($usuario);
        $editForm = $this->createForm('AppBundle\Form\UsuarioType', $usuario);
        $editForm->handleRequest($request);

        // $usuario->setUsuario( $this->getUser() );
        // $usuario->setFechaModi( new \Datetime() );

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            
            try {
                $this->getDoctrine()->getManager()->flush();

                $this->addFlash('success', 'Registro modificado correctamente.');

            } catch(\Exception $e) {
                $this->addFlash('danger', 'Ocurrio un ERROR. El registro no pudo ser modificado.');

                return $this->redirectToRoute('usuario_edit', array('id' => $usuario->getId()));
            }

            return $this->redirectToRoute('usuario_index');
        }

        return $this->render('usuario/edit.html.twig', array(
            'usuario' => $usuario,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing usuario entity.
     *
     * @Route("/{id}/editpass", name="usuario_edit_pass")
     * @Method({"GET", "POST"})
     */
    public function editPassAction(Request $request, Usuario $usuario)
    {
        // $deleteForm = $this->createDeleteForm($usuario);
        $form = $this->createForm('AppBundle\Form\UsuarioPassType', $usuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $plainPassword = $form->get('password')->getData();
            $encoder = $this->container->get('security.password_encoder');
            $encoded = $encoder->encodePassword($usuario, $plainPassword);

            $usuario->setPassword( $encoded );

            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('inicio', array('id' => $usuario->getId()));
        }

        return $this->render('usuario/editPass.html.twig', array(
            'usuario' => $usuario,
            'form' => $form->createView(),
            // 'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a usuario entity.
     *
     * @Route("/{id}", name="usuario_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Usuario $usuario)
    {
        $form = $this->createDeleteForm($usuario);
        $form->handleRequest($request);

        $usuario->setUsuario( $this->getUser() );
        $usuario->setFechaModi( new \Datetime() );

        if ($form->isSubmitted() && $form->isValid()) {
            
            try {
                    $em = $this->getDoctrine()->getManager();
                $em->remove($usuario);
                $em->flush();
                
                $this->addFlash('success', 'Registro eliminado correctamente.');

            } catch(\Exception $e) {
                if ( $e instanceof \Doctrine\DBAL\Exception\ForeignKeyConstraintViolationException ) {

                    $this->addFlash('danger', 'Ocurrio un ERROR. El usuario se encuentra posee registros asociados.');

                } else {

                    $this->addFlash('danger', 'Ocurrio un ERROR.');

                }

                return $this->redirectToRoute('usuario_eliminar', array('id' => $obraSocial->getId()));
            }
        }

        return $this->redirectToRoute('usuario_index');
    }

    /**
     * Creates a form to delete a usuario entity.
     *
     * @param Usuario $usuario The usuario entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Usuario $usuario)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('usuario_delete', array('id' => $usuario->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    /**
     * Lists all usuario entities.
     *
     * @Route("/login_emulado/{tipo}", name="login_emulado")
     * @Method("GET")
     */
    public function loginEmuladoAction(Request $request, $tipo)
    {
        $session = $this->get('session');
        $usuario = new Usuario;

        $form = $this->createForm('AppBundle\Form\UsuarioLoginType', $usuario);
        $form->handleRequest($request);

        if($session->has('user') or $session->has('useradmin')){
            $session->getFlashBag()->add('danger', 'Ya hay una sesi&oacute;n iniciada');
            return $this->redirectToRoute('homepage');
        }
        if ( $form->isSubmitted() && $form->isValid() ) {

            if ($tipo == 'A') {
                $session->set('useradmin', $form->get('email')->getData());
                $session->getFlashBag()->add('success', 'Ingreso admin exitoso. Bienvenido!');
                return $this->redirectToRoute('homepage');
            }else{
                $session->set('user', $form->get('email')->getData());
                $session->getFlashBag()->add('success', 'Ingreso exitoso. Bienvenido!');
                return $this->redirectToRoute('homepage');
            }

        }

        return $this->render('usuario/login.html.twig', array(
            'usuario' => $usuario,
            'form' => $form->createView(),
        ));

    }
}
