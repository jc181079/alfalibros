<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/phppos')) {
            if (0 === strpos($pathinfo, '/phpposemployees')) {
                // phpposemployees_index
                if (rtrim($pathinfo, '/') === '/phpposemployees') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_phpposemployees_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'phpposemployees_index');
                    }

                    return array (  '_controller' => 'principalBundle\\Controller\\PhpposEmployeesController::indexAction',  '_route' => 'phpposemployees_index',);
                }
                not_phpposemployees_index:

                // phpposemployees_new
                if ($pathinfo === '/phpposemployees/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_phpposemployees_new;
                    }

                    return array (  '_controller' => 'principalBundle\\Controller\\PhpposEmployeesController::newAction',  '_route' => 'phpposemployees_new',);
                }
                not_phpposemployees_new:

                // phpposemployees_show
                if (preg_match('#^/phpposemployees/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_phpposemployees_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpposemployees_show')), array (  '_controller' => 'principalBundle\\Controller\\PhpposEmployeesController::showAction',));
                }
                not_phpposemployees_show:

                // phpposemployees_edit
                if (preg_match('#^/phpposemployees/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_phpposemployees_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpposemployees_edit')), array (  '_controller' => 'principalBundle\\Controller\\PhpposEmployeesController::editAction',));
                }
                not_phpposemployees_edit:

                // phpposemployees_delete
                if (preg_match('#^/phpposemployees/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_phpposemployees_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpposemployees_delete')), array (  '_controller' => 'principalBundle\\Controller\\PhpposEmployeesController::deleteAction',));
                }
                not_phpposemployees_delete:

            }

            if (0 === strpos($pathinfo, '/phppospeople')) {
                // phppospeople_index
                if (rtrim($pathinfo, '/') === '/phppospeople') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_phppospeople_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'phppospeople_index');
                    }

                    return array (  '_controller' => 'principalBundle\\Controller\\PhpposPeopleController::indexAction',  '_route' => 'phppospeople_index',);
                }
                not_phppospeople_index:

                // phppospeople_new
                if ($pathinfo === '/phppospeople/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_phppospeople_new;
                    }

                    return array (  '_controller' => 'principalBundle\\Controller\\PhpposPeopleController::newAction',  '_route' => 'phppospeople_new',);
                }
                not_phppospeople_new:

                // phppospeople_show
                if (preg_match('#^/phppospeople/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_phppospeople_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'phppospeople_show')), array (  '_controller' => 'principalBundle\\Controller\\PhpposPeopleController::showAction',));
                }
                not_phppospeople_show:

                // phppospeople_edit
                if (preg_match('#^/phppospeople/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_phppospeople_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'phppospeople_edit')), array (  '_controller' => 'principalBundle\\Controller\\PhpposPeopleController::editAction',));
                }
                not_phppospeople_edit:

                // phppospeople_delete
                if (preg_match('#^/phppospeople/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_phppospeople_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'phppospeople_delete')), array (  '_controller' => 'principalBundle\\Controller\\PhpposPeopleController::deleteAction',));
                }
                not_phppospeople_delete:

            }

        }

        // inicio
        if (preg_match('#^/(?P<pagina>\\d+)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'inicio')), array (  'pagina' => 1,  '_controller' => 'principalBundle\\Controller\\principalController::indexAction',));
        }

        // modal
        if ($pathinfo === '/modal') {
            return array (  '_controller' => 'principalBundle\\Controller\\principalController::modalAction',  '_route' => 'modal',);
        }

        // checkSession
        if ($pathinfo === '/checkSession') {
            return array (  '_controller' => 'principalBundle\\Controller\\principalController::checkSessionAction',  '_route' => 'checkSession',);
        }

        // logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'principalBundle\\Controller\\principalController::logoutAction',  '_route' => 'logout',);
        }

        // registrate
        if ($pathinfo === '/registrate') {
            return array (  '_controller' => 'principalBundle\\Controller\\principalController::SaveRegistrateAction',  '_route' => 'registrate',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
