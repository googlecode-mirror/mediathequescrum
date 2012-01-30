<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = urldecode($pathinfo);

        // login
        if ($pathinfo === '/media/login') {
            return array (  '_controller' => 'Mediatheque\\SecurityBundle\\Controller\\MainController::loginAction',  '_route' => 'login',);
        }

        // media
        if (rtrim($pathinfo, '/') === '/media') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'media');
            }
            return array (  '_controller' => 'Mediatheque\\mediaBundle\\Controller\\MediaController::indexAction',  '_route' => 'media',);
        }

        // media_show
        if (0 === strpos($pathinfo, '/media') && preg_match('#^/media/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mediatheque\\mediaBundle\\Controller\\MediaController::showAction',)), array('_route' => 'media_show'));
        }

        // media_new
        if ($pathinfo === '/media/new') {
            return array (  '_controller' => 'Mediatheque\\mediaBundle\\Controller\\MediaController::newAction',  '_route' => 'media_new',);
        }

        // media_create
        if ($pathinfo === '/media/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_media_create;
            }
            return array (  '_controller' => 'Mediatheque\\mediaBundle\\Controller\\MediaController::createAction',  '_route' => 'media_create',);
        }
        not_media_create:

        // media_edit
        if (0 === strpos($pathinfo, '/media') && preg_match('#^/media/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mediatheque\\mediaBundle\\Controller\\MediaController::editAction',)), array('_route' => 'media_edit'));
        }

        // media_update
        if (0 === strpos($pathinfo, '/media') && preg_match('#^/media/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_media_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mediatheque\\mediaBundle\\Controller\\MediaController::updateAction',)), array('_route' => 'media_update'));
        }
        not_media_update:

        // media_delete
        if (0 === strpos($pathinfo, '/media') && preg_match('#^/media/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_media_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Mediatheque\\mediaBundle\\Controller\\MediaController::deleteAction',)), array('_route' => 'media_delete'));
        }
        not_media_delete:

        // login_check
        if ($pathinfo === '/media/login_check') {
            return array('_route' => 'login_check');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
