<?php

namespace Websites\OnlinesoaptestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('OnlinesoaptestBundle:Default:index.html.twig', array('name' => $name, 'SOAP_1_1' => SOAP_1_1, 'SOAP_1_2' => SOAP_1_2, 'SOAP_RPC' => SOAP_RPC, 'SOAP_DOCUMENT' => SOAP_DOCUMENT, 'SOAP_ENCODED' => SOAP_ENCODED, 'SOAP_LITERAL' => SOAP_LITERAL, 'HTTP_HOST' => 'onlinesoaptest', 'DOMAIN_NAME' => 'onlinesoaptest' ));
    }
}
