<?php

namespace Tienda\TiendaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('TiendaBundle:Default:index.html.twig', array('name' => $name));
    }
}
