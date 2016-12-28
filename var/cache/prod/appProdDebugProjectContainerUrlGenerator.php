<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdDebugProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'phpposemployees_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'principalBundle\\Controller\\PhpposEmployeesController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/phpposemployees/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'phpposemployees_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'principalBundle\\Controller\\PhpposEmployeesController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/phpposemployees/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'phpposemployees_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'principalBundle\\Controller\\PhpposEmployeesController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/phpposemployees',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'phpposemployees_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'principalBundle\\Controller\\PhpposEmployeesController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/phpposemployees',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'phpposemployees_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'principalBundle\\Controller\\PhpposEmployeesController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/phpposemployees',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'phppospeople_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'principalBundle\\Controller\\PhpposPeopleController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/phppospeople/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'phppospeople_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'principalBundle\\Controller\\PhpposPeopleController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/phppospeople/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'phppospeople_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'principalBundle\\Controller\\PhpposPeopleController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/phppospeople',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'phppospeople_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'principalBundle\\Controller\\PhpposPeopleController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/phppospeople',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'phppospeople_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'principalBundle\\Controller\\PhpposPeopleController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/phppospeople',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'inicio' => array (  0 =>   array (    0 => 'pagina',  ),  1 =>   array (    '_controller' => 'principalBundle\\Controller\\principalController::indexAction',  ),  2 =>   array (    'pagina' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'pagina',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'modal' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'principalBundle\\Controller\\principalController::modalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/modal',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'checkSession' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'principalBundle\\Controller\\principalController::checkSessionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/checkSession',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'principalBundle\\Controller\\principalController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'registrate' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'principalBundle\\Controller\\principalController::SaveRegistrateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/registrate',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
