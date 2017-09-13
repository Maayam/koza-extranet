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
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // home
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexUsersAction',  '_route' => 'home',);
        }

        if (0 === strpos($pathinfo, '/user')) {
            // show_user
            if (0 === strpos($pathinfo, '/user/show') && preg_match('#^/user/show/(?P<userId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_user')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::showUserAction',));
            }

            // new_user
            if ('/user/new' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\UserController::newAction',  '_route' => 'new_user',);
            }

            // edit_user
            if (0 === strpos($pathinfo, '/user/edit') && preg_match('#^/user/edit(?:/(?P<userId>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_user')), array (  'userId' => 'not set',  '_controller' => 'AppBundle\\Controller\\UserController::editAction',));
            }

            // delete_user
            if (0 === strpos($pathinfo, '/user/delete') && preg_match('#^/user/delete/(?P<userId>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_user')), array (  '_controller' => 'AppBundle\\Controller\\UserController::deleteAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/mission')) {
            // show_mission
            if (0 === strpos($pathinfo, '/mission/show') && preg_match('#^/mission/show/(?P<missionId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_mission')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::showMissionAction',));
            }

            // new_mission
            if (0 === strpos($pathinfo, '/mission/new') && preg_match('#^/mission/new/(?P<userId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'new_mission')), array (  '_controller' => 'AppBundle\\Controller\\MissionController::newAction',));
            }

            // edit_mission
            if (0 === strpos($pathinfo, '/mission/edit') && preg_match('#^/mission/edit/(?P<missionId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_mission')), array (  '_controller' => 'AppBundle\\Controller\\MissionController::editAction',));
            }

            // delete_mission
            if (0 === strpos($pathinfo, '/mission/delete') && preg_match('#^/mission/delete/(?P<missionId>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_mission')), array (  '_controller' => 'AppBundle\\Controller\\MissionController::deleteAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/media')) {
            // show_media
            if (0 === strpos($pathinfo, '/media/show') && preg_match('#^/media/show/(?P<mediaId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_media')), array (  '_controller' => 'AppBundle\\Controller\\MediaController::showAction',));
            }

            // new_media
            if (0 === strpos($pathinfo, '/media/new') && preg_match('#^/media/new/(?P<missionId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'new_media')), array (  '_controller' => 'AppBundle\\Controller\\MediaController::newAction',));
            }

            // delete_media
            if (0 === strpos($pathinfo, '/media/delete') && preg_match('#^/media/delete/(?P<mediaId>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_media')), array (  '_controller' => 'AppBundle\\Controller\\MediaController::deleteAction',));
            }

        }

        // login
        if ('/login' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
        }

        // logout
        if ('/logout' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'logout',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
