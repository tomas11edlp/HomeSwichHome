<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Usuario;
use AppBundle\Entity\Credito;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Form\Paginador\FilterAdministradorType;


/**
 * Usuario controller.
 *
 * @Route("superadmin")
 */
class SuperAdminController extends Controller
{   

     /**
     * Lists all usuario entities.
     *
     * @Route("/", name="administrador_index")
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
            // ->setFiltersTheme('inline')
            ->setFilter(FilterAdministradorType::class)
            ->setRowsPerPage(15, array(15, 30, 45))
            ->showRowsAtFirst()
            ->setFiltersTheme('inline')
            ->setBaseLayout('admin_base')
            ->setView('usuario/administrador_index.html.twig')
            ->paginate('AppBundle:Usuario', 'findAdministradores');
    }

    /**
     * Creates a new usuario entity.
     *
     * @Route("/new", name="administrador_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $usuario = new Usuario();
        $form = $this->createForm('AppBundle\Form\UsuarioAdministradorType', $usuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            try {
                $em = $this->getDoctrine()->getManager();

                $encoder = $this->container->get('security.password_encoder');
                $encoded = $encoder->encodePassword($usuario, $form->get('plainPassword')->getData());
                
                $usuario->setPassword( $encoded );
                $usuario->setRol('ADMINISTRADOR');

                $usuario->setFechaRegistro(new \DateTime('today'));

                $em->persist($usuario);
                $em->flush();

                $this->addFlash('success', 'Usuario creado correctamente.');

            } catch(\Exception $e) {
                $this->addFlash('danger', $e.'Ocurrio un ERROR. El registro no pudo ser creado.');
                // $this->addFlash('danger', $e);

                return $this->redirectToRoute('admnistrador_new');
            }

            return $this->redirectToRoute('admnistrador_index');
        }

        return $this->render('usuario/administrador_new.html.twig', array(
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

        $em = $this->getDoctrine()->getManager();

        $solicitud = $em->getRepository('AppBundle:SolicitudCliente')->findOneBy( array( 
            'usuario' => $usuario,
            'finalizada' => 'N',
        ));

        return $this->render('usuario/show.html.twig', array(
            'solicitud' => $solicitud,
            'usuario' => $usuario,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Finds and displays a usuario entity.
     *
     * @Route("/cliente/{id}", name="perfil_cliente_show")
     * @Method("GET")
     */
    public function clienteShowAction(Usuario $usuario)
    {
        $deleteForm = $this->createDeleteForm($usuario);

        $em = $this->getDoctrine()->getManager();

        $solicitud = $em->getRepository('AppBundle:SolicitudCliente')->findOneBy( array( 
            'usuario' => $usuario,
            'finalizada' => 'N',
        ));

        return $this->render('usuario/clienteShow.html.twig', array(
            'solicitud' => $solicitud,
            'usuario' => $usuario,
            'delete_form' => $deleteForm->createView(),
        ));
    }

        /**
     * Displays a form to edit an existing usuario entity.
     *
     * @Route("/cliente/{id}/edit", name="perfil_cliente_edit")
     * @Method({"GET", "POST"})
     */
    public function clienteEditAction(Request $request, Usuario $usuario)
    {
        $deleteForm = $this->createDeleteForm($usuario);
        $editForm = $this->createForm('AppBundle\Form\UsuarioType', $usuario);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
  
            try {
                $this->getDoctrine()->getManager()->flush();

            } catch(\Exception $e) {

                $this->addFlash('danger', $e.'Ocurrio un ERROR. El registro no pudo ser modificado.');

                return $this->redirectToRoute('perfil_cliente_edit', array('id' => $usuario->getId()));
            }

            $this->get('session')->getFlashBag()->add('success', 'Medio de pago creado exitosamente.');

            return $this->redirectToRoute('perfil_cliente_show', array( 'id' => $usuario->getId()));
        }

        return $this->render('usuario/clienteEdit.html.twig', array(
            'usuario' => $usuario,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing usuario entity.
     *
     * @Route("/{id}/edit", name="administrador_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Usuario $usuario)
    {
        $deleteForm = $this->createDeleteForm($usuario);
        $editForm = $this->createForm('AppBundle\Form\UsuarioAdministradorType', $usuario);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            
            try {
                $em = $this->getDoctrine()->getManager();

                $encoder = $this->container->get('security.password_encoder');
                $encoded = $encoder->encodePassword($usuario, $editForm->get('plainPassword')->getData());
                
                $usuario->setPassword( $encoded );

                $em->persist($usuario);
                $em->flush();

                $this->addFlash('success', 'Administrador modificado correctamente.');

            } catch(\Exception $e) {
                $this->addFlash('danger', $e.'Ocurrio un ERROR. El registro no pudo ser modificado.');

                return $this->redirectToRoute('administrador_edit', array('id' => $usuario->getId()));
            }

            return $this->redirectToRoute('administrador_index');
        }

        return $this->render('usuario/administrador_edit.html.twig', array(
            'usuario' => $usuario,
            'form' => $editForm->createView(),
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
     * @Route("/{id}/delete", name="administrador_delete")
     * @Method("DELETE|GET|POST")
     */
    public function deleteAction(Request $request, Usuario $usuario)
    {            
        try {

            $em = $this->getDoctrine()->getManager();
            $em->remove($usuario);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'Usuario administrador eliminado correctamente.');

        } catch(\Exception $e) {

            if ( $e instanceof \Doctrine\DBAL\Exception\ForeignKeyConstraintViolationException ) {
                $this->get('session')->getFlashBag()->add('success', 'Ocurrio un ERROR. El usuario se encuentra posee registros asociados.');
            } else {
                $this->get('session')->getFlashBag()->add('success', 'Ocurrio un ERROR.');
            }

        }

        return $this->redirectToRoute('administrador_index');
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




    /**
     * Crea por defecto un usuario superadministrador.
     *
     * @Route("/crearusuario/superadministrador", name="crearusuario_superadministrador")
     * @Method("GET")
     */
    public function crearUsuarioSuperadministradorAction()
    {
        $usuario = new Usuario;
        $usuario->setEmail('HPETRONE');
        $usuario->setNombre('Hernan');
        $usuario->setApellido('Petrone');

        try {
            $em = $this->getDoctrine()->getManager();

            $encoder = $this->container->get('security.password_encoder');
            $encoded = $encoder->encodePassword($usuario, 'superadmin');
            
            $usuario->setPassword( $encoded );
            $usuario->setRol('SUPERADMINISTRADOR');

            $usuario->setFechaRegistro(new \DateTime('today'));

            $em->persist($usuario);
            $em->flush();

            $this->addFlash('success', 'SUPERADMINISTRADOR CREADO.');

        } catch(\Exception $e) {
            $this->addFlash('danger', $e.'Ocurrio un ERROR. El registro no pudo ser creado.');
            // $this->addFlash('danger', $e);
        }

        return $this->redirectToRoute('homepage');

    }
}