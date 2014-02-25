<?php

namespace Websites\ApplepiesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ApplepiesBundle:Default:index.html.twig', array('name' => $name));
    }
}
