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
        'home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexUsersAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'show_user' => array (  0 =>   array (    0 => 'userId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::showUserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'userId',    ),    1 =>     array (      0 => 'text',      1 => '/user/show',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'show_mission' => array (  0 =>   array (    0 => 'missionId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::showMissionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'missionId',    ),    1 =>     array (      0 => 'text',      1 => '/mission/show',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'show_media' => array (  0 =>   array (    0 => 'mediaId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\MediaController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'mediaId',    ),    1 =>     array (      0 => 'text',      1 => '/media/show',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'new_media' => array (  0 =>   array (    0 => 'missionId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\MediaController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'missionId',    ),    1 =>     array (      0 => 'text',      1 => '/media/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete_media' => array (  0 =>   array (    0 => 'mediaId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\MediaController::deleteAction',  ),  2 =>   array (    'mediaId' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'mediaId',    ),    1 =>     array (      0 => 'text',      1 => '/media/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'new_mission' => array (  0 =>   array (    0 => 'userId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\MissionController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'userId',    ),    1 =>     array (      0 => 'text',      1 => '/mission/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'edit_mission' => array (  0 =>   array (    0 => 'missionId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\MissionController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'missionId',    ),    1 =>     array (      0 => 'text',      1 => '/mission/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete_mission' => array (  0 =>   array (    0 => 'missionId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\MissionController::deleteAction',  ),  2 =>   array (    'missionId' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'missionId',    ),    1 =>     array (      0 => 'text',      1 => '/mission/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'new_user' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\UserController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'edit_user' => array (  0 =>   array (    0 => 'userId',  ),  1 =>   array (    'userId' => 'not set',    '_controller' => 'AppBundle\\Controller\\UserController::editAction',  ),  2 =>   array (    'userId' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'userId',    ),    1 =>     array (      0 => 'text',      1 => '/user/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete_user' => array (  0 =>   array (    0 => 'userId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\UserController::deleteAction',  ),  2 =>   array (    'userId' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'userId',    ),    1 =>     array (      0 => 'text',      1 => '/user/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
