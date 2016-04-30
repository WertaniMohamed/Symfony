<?php

namespace INIT\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class AnnoncesController extends Controller {

    public function indexAction() {
        $view = 'INITPlatformBundle:Annonces:index.html.twig';
        $content = $this->get('templating')->render($view, array('nom' => 'Les des annonces'));
        return new Response($content);
    }

}
