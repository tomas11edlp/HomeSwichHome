<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_wdt']), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_search_results']), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler']), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_router']), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception']), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception_css']), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_twig_error_test']), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        // adminpage
        if ('/administracion' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAdminAction',  '_route' => 'adminpage',);
        }

        // clearsession
        if ('/clearsession' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::clearSessionAction',  '_route' => 'clearsession',);
        }

        if (0 === strpos($pathinfo, '/estadoreserva')) {
            // estadoreserva_index
            if ('/estadoreserva' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\EstadoReservaController::indexAction',  '_route' => 'estadoreserva_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_estadoreserva_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'estadoreserva_index'));
                }

                return $ret;
            }
            not_estadoreserva_index:

            // estadoreserva_new
            if ('/estadoreserva/new' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\EstadoReservaController::newAction',  '_route' => 'estadoreserva_new',);
            }

            // estadoreserva_show
            if (preg_match('#^/estadoreserva/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'estadoreserva_show']), array (  '_controller' => 'AppBundle\\Controller\\EstadoReservaController::showAction',));
            }

            // estadoreserva_edit
            if (preg_match('#^/estadoreserva/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'estadoreserva_edit']), array (  '_controller' => 'AppBundle\\Controller\\EstadoReservaController::editAction',));
            }

            // estadoreserva_delete
            if (preg_match('#^/estadoreserva/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'estadoreserva_delete']), array (  '_controller' => 'AppBundle\\Controller\\EstadoReservaController::deleteAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/estadosubasta')) {
            // estadosubasta_index
            if ('/estadosubasta' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\EstadoSubastaController::indexAction',  '_route' => 'estadosubasta_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_estadosubasta_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'estadosubasta_index'));
                }

                return $ret;
            }
            not_estadosubasta_index:

            // estadosubasta_new
            if ('/estadosubasta/new' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\EstadoSubastaController::newAction',  '_route' => 'estadosubasta_new',);
            }

            // estadosubasta_show
            if (preg_match('#^/estadosubasta/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'estadosubasta_show']), array (  '_controller' => 'AppBundle\\Controller\\EstadoSubastaController::showAction',));
            }

            // estadosubasta_edit
            if (preg_match('#^/estadosubasta/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'estadosubasta_edit']), array (  '_controller' => 'AppBundle\\Controller\\EstadoSubastaController::editAction',));
            }

            // estadosubasta_delete
            if (preg_match('#^/estadosubasta/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'estadosubasta_delete']), array (  '_controller' => 'AppBundle\\Controller\\EstadoSubastaController::deleteAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/propiedad')) {
            // propiedad_index
            if ('/propiedad' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\PropiedadController::indexAction',  '_route' => 'propiedad_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_propiedad_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'propiedad_index'));
                }

                return $ret;
            }
            not_propiedad_index:

            // propiedad_index_publico
            if ('/propiedad/publico/propiedades' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\PropiedadController::indexPublicoAction',  '_route' => 'propiedad_index_publico',);
            }

            // propiedad_new
            if ('/propiedad/new' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\PropiedadController::newAction',  '_route' => 'propiedad_new',);
            }

            // propiedad_show
            if (preg_match('#^/propiedad/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'propiedad_show']), array (  '_controller' => 'AppBundle\\Controller\\PropiedadController::showAction',));
            }

            // propiedad_show_publico
            if (0 === strpos($pathinfo, '/propiedad/publico') && preg_match('#^/propiedad/publico/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'propiedad_show_publico']), array (  '_controller' => 'AppBundle\\Controller\\PropiedadController::showPublicoAction',));
            }

            // propiedad_edit
            if (preg_match('#^/propiedad/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'propiedad_edit']), array (  '_controller' => 'AppBundle\\Controller\\PropiedadController::editAction',));
            }

            // propiedad_delete
            if (0 === strpos($pathinfo, '/propiedad/delete') && preg_match('#^/propiedad/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'propiedad_delete']), array (  '_controller' => 'AppBundle\\Controller\\PropiedadController::deleteAction',));
            }

            // propiedad_deshabilitar
            if (0 === strpos($pathinfo, '/propiedad/deshabilitar') && preg_match('#^/propiedad/deshabilitar/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'propiedad_deshabilitar']), array (  '_controller' => 'AppBundle\\Controller\\PropiedadController::deshabilitarAction',));
            }

            // propiedad_habilitar
            if (0 === strpos($pathinfo, '/propiedad/habilitar') && preg_match('#^/propiedad/habilitar/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'propiedad_habilitar']), array (  '_controller' => 'AppBundle\\Controller\\PropiedadController::habilitarAction',));
            }

            // propiedad_autocomplete
            if ('/propiedad/autocomplete/propiedad' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\PropiedadController::autocompletePropiedadAction',  '_route' => 'propiedad_autocomplete',);
            }

        }

        elseif (0 === strpos($pathinfo, '/puja')) {
            // puja_index
            if ('/puja' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\PujaController::indexAction',  '_route' => 'puja_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_puja_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'puja_index'));
                }

                return $ret;
            }
            not_puja_index:

            // puja_show
            if (preg_match('#^/puja/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'puja_show']), array (  '_controller' => 'AppBundle\\Controller\\PujaController::showAction',));
            }

            // puja_new
            if ('/puja/nueva/puja' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\PujaController::newAction',  '_route' => 'puja_new',);
            }

        }

        elseif (0 === strpos($pathinfo, '/subasta')) {
            // subasta_index
            if ('/subasta' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\SubastaController::indexAction',  '_route' => 'subasta_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_subasta_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'subasta_index'));
                }

                return $ret;
            }
            not_subasta_index:

            // subasta_index_publico
            if ('/subasta/publico' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\SubastaController::indexPublicoAction',  '_route' => 'subasta_index_publico',);
            }

            // subasta_new
            if ('/subasta/new' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\SubastaController::newAction',  '_route' => 'subasta_new',);
            }

            // subasta_show
            if (preg_match('#^/subasta/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'subasta_show']), array (  '_controller' => 'AppBundle\\Controller\\SubastaController::showAction',));
            }

            // subasta_show_publico
            if (0 === strpos($pathinfo, '/subasta/publico') && preg_match('#^/subasta/publico/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'subasta_show_publico']), array (  '_controller' => 'AppBundle\\Controller\\SubastaController::showPublicoAction',));
            }

            // subasta_cerrar
            if (0 === strpos($pathinfo, '/subasta/cerrar') && preg_match('#^/subasta/cerrar/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'subasta_cerrar']), array (  '_controller' => 'AppBundle\\Controller\\SubastaController::cerrarSubastaAction',));
            }

            // subasta_edit
            if (preg_match('#^/subasta/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'subasta_edit']), array (  '_controller' => 'AppBundle\\Controller\\SubastaController::editAction',));
            }

            // subasta_delete
            if (preg_match('#^/subasta/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'subasta_delete']), array (  '_controller' => 'AppBundle\\Controller\\SubastaController::deleteAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/usuario')) {
            // usuario_index
            if ('/usuario' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::indexAction',  '_route' => 'usuario_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_usuario_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'usuario_index'));
                }

                return $ret;
            }
            not_usuario_index:

            // login_emulado
            if (0 === strpos($pathinfo, '/usuario/login_emulado') && preg_match('#^/usuario/login_emulado/(?P<tipo>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'login_emulado']), array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::loginEmuladoAction',));
            }

            // usuario_new
            if ('/usuario/new' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::newAction',  '_route' => 'usuario_new',);
            }

            // usuario_show
            if (preg_match('#^/usuario/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'usuario_show']), array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::showAction',));
            }

            // usuario_edit
            if (preg_match('#^/usuario/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'usuario_edit']), array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::editAction',));
            }

            // usuario_delete
            if (preg_match('#^/usuario/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'usuario_delete']), array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::deleteAction',));
            }

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
