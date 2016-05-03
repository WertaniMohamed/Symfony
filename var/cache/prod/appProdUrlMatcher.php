<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // init_platform_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'init_platform_homepage');
            }

            return array (  '_controller' => 'INIT\\PlatformBundle\\Controller\\DefaultController::indexAction',  '_route' => 'init_platform_homepage',);
        }

        // hello_world_homepage
        if ($pathinfo === '/hello-world') {
            return array (  '_controller' => 'INIT\\PlatformBundle\\Controller\\DefaultController::helloWorldAction',  '_route' => 'hello_world_homepage',);
        }

        // init_platform_annonces_index
        if ($pathinfo === '/annonces') {
            return array (  '_controller' => 'INIT\\PlatformBundle\\Controller\\AnnoncesController::indexAction',  '_route' => 'init_platform_annonces_index',);
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
