<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       'login' => true,
       'media' => true,
       'media_show' => true,
       'media_new' => true,
       'media_create' => true,
       'media_edit' => true,
       'media_update' => true,
       'media_delete' => true,
       'login_check' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function getloginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Mediatheque\\SecurityBundle\\Controller\\MainController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/media/login',  ),));
    }

    private function getmediaRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Mediatheque\\mediaBundle\\Controller\\MediaController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/media/',  ),));
    }

    private function getmedia_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Mediatheque\\mediaBundle\\Controller\\MediaController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/media',  ),));
    }

    private function getmedia_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Mediatheque\\mediaBundle\\Controller\\MediaController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/media/new',  ),));
    }

    private function getmedia_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Mediatheque\\mediaBundle\\Controller\\MediaController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/media/create',  ),));
    }

    private function getmedia_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Mediatheque\\mediaBundle\\Controller\\MediaController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/media',  ),));
    }

    private function getmedia_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Mediatheque\\mediaBundle\\Controller\\MediaController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/media',  ),));
    }

    private function getmedia_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Mediatheque\\mediaBundle\\Controller\\MediaController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/media',  ),));
    }

    private function getlogin_checkRouteInfo()
    {
        return array(array (), array (), array (), array (  0 =>   array (    0 => 'text',    1 => '/media/login_check',  ),));
    }
}
