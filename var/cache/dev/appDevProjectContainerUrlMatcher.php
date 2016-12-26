<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

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

        // principal_principal_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'principal_principal_index');
            }

            return array (  '_controller' => 'principalBundle\\Controller\\principalController::indexAction',  '_route' => 'principal_principal_index',);
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
