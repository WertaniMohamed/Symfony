<?php

namespace Annonces\ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AnnoncesProductBundle:Default:index.html.twig', array('nom' => 'Annonces Product'));
    }
}
