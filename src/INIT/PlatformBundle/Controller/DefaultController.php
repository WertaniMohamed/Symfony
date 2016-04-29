<?php

namespace INIT\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

    public function indexAction(Request $request) {
        $content = $this->get('templating')->render('INITPlatformBundle:Default:index.html.twig', array('nom' => 'Dashboard'));
        // Récupération de la session
        $session = $request->getSession();

        // On récupère le contenu de la variable user_id
        $userId = $session->get('user_id');

        // On définit une nouvelle valeur pour cette variable user_id
        $session->set('user_id', 91);

        return new Response($content);
    }

    public function helloWorldAction() {
        return $this->render('INITPlatformBundle:Default:hello-world.html.twig');
    }

    public function sidebarAction() {
        return $this->render('INITPlatformBundle:Default:sidebar.html.twig');
    }

    public function navbarAction() {
        return $this->render('INITPlatformBundle:Default:navbar.html.twig');
    }

    public function navbarHeaderAction() {
        return $this->render('INITPlatformBundle:Default:navbarHeader.html.twig');
    }

    public function navbarDefaultAction() {
        return $this->render('INITPlatformBundle:Default:navbarDefault.html.twig');
    }

}
