<?php

namespace Websites\OnlinesoaptestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('OnlinesoaptestBundle:Default:index.html.twig', array('name' => $name));
    }
}
