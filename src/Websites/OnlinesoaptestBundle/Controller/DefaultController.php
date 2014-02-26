<?php

namespace Websites\OnlinesoaptestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {
	
    public function homeAction($title) {
    	
        return $this->render('OnlinesoaptestBundle:Default:home.html.twig', array('title' => $title, 'SOAP_1_1' => SOAP_1_1, 'SOAP_1_2' => SOAP_1_2, 'SOAP_RPC' => SOAP_RPC, 'SOAP_DOCUMENT' => SOAP_DOCUMENT, 'SOAP_ENCODED' => SOAP_ENCODED, 'SOAP_LITERAL' => SOAP_LITERAL, 'HTTP_HOST' => 'onlinesoaptest', 'DOMAIN_NAME' => 'onlinesoaptest' ));
    
    }

    public function aboutAction($title) {
    	 
    	return $this->render('OnlinesoaptestBundle:Default:about.html.twig', array( 'title' => $title ));
    	 
    }

    public function blogAction($title) {
    	 
    	return $this->render('OnlinesoaptestBundle:Default:blog.html.twig', array( 'title' => $title ));
    	 
    }

    public function contactAction($title) {
    	 
    	return $this->render('OnlinesoaptestBundle:Default:contact.html.twig', array( 'title' => $title ));
    	 
    }
}
