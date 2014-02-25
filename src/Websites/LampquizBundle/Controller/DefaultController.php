<?php

namespace Websites\LampquizBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('LampquizBundle:Default:index.html.twig', array('name' => $name));
    }
}
