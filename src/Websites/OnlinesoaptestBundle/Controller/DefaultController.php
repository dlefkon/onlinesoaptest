<?php

namespace Websites\OnlinesoaptestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
// use Symfony\Component\HttpFoundation\ParameterBag;
use Zend\Soap\Client;
// use Zend\Soap\WsdlException;

class DefaultController extends Controller {

	public function homeAction($title) {
			
		return $this->render('OnlinesoaptestBundle:Default:home.html.twig', array('title' => $title, 'SOAP_1_1' => SOAP_1_1, 'SOAP_1_2' => SOAP_1_2, 'SOAP_RPC' => SOAP_RPC, 'SOAP_DOCUMENT' => SOAP_DOCUMENT, 'SOAP_ENCODED' => SOAP_ENCODED, 'SOAP_LITERAL' => SOAP_LITERAL, 'HTTP_HOST' => 'onlinesoaptest', 'DOMAIN_NAME' => 'onlinesoaptest' ));
	
	}

	public function photosAction($title, $name) {

		return $this->render('OnlinesoaptestBundle:Default:photos.html.twig', array( 'title' => $title ) );
	
	}
	
	public function ajaxAction( Request $request, $title) {

		$wsdl_url = $request->get('wsdl');

		$options = array();
		
		$soap_client = new Client($wsdl_url, $options);

		$soap_client->setLocation($request->get('endpoint'));
		
		$soap_client->setUri($request->get('endpoint'));
		
		$soap_client->setSoapVersion($request->get('version'));
		
		if( !$wsdl_url ){

			$soap_client->setStyle($request->get('style'));
			
			$soap_client->setEncodingMethod($request->get('encoding'));
			
		}
	
		$operation = $request->get('operation');
		
		$parameters = $request->get('parameters');

		$options = $soap_client->getOptions();
	
		echo '<table class="response">';
		echo "<tr class='header_row'><td>Operation</td><td>$operation</td></tr>";
		
		foreach( $parameters as $param ) {
			
			$name  = $param['name'];
			$value = $param['value'];
			
			echo "<tr class='header_row'><td>Parameter: </td><td>$name : $value</td></tr>";
			
			$params[$name] = $value;
		}
		
		$i = 1;
		foreach($options as $key => $value){
			echo '<tr>';
			$alternating_row_class = ++$i%2 == 0 ? 'alternating_row_class_1' : 'alternating_row_class_2';
			echo "<td class='alternating_rows $alternating_row_class'>$key</td>";
			echo "<td class='alternating_rows $alternating_row_class'>" . ucfirst($value) . "</td>";
			echo '</tr>';
		}
		echo '</table>';

		try {
			
			$soap_response = $soap_client->$operation($params);
			
		} catch (\SoapFault $exception) {

			echo '<pre style="padding:20px; margin:20px; color:red;">';
			print_r( substr( $exception->getMessage(), 0, 10000 ) );
			echo '</pre>';
			exit;
			
		}
exit;
		$this->printLastSoapRequest($soap_client);
		$this->printLastSoapResponse($soap_client);
		
		echo 'bla';
		exit;



	//	return $this->render('OnlinesoaptestBundle:Default:home.html.twig', array('title' => $title, 'SOAP_1_1' => SOAP_1_1, 'SOAP_1_2' => SOAP_1_2, 'SOAP_RPC' => SOAP_RPC, 'SOAP_DOCUMENT' => SOAP_DOCUMENT, 'SOAP_ENCODED' => SOAP_ENCODED, 'SOAP_LITERAL' => SOAP_LITERAL, 'HTTP_HOST' => 'onlinesoaptest', 'DOMAIN_NAME' => 'onlinesoaptest' ));
	
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
    
    public function sendemailAction( Request $request, $title) {

    	$headers = 'From: ' . $request->get('contact_email');
 
    	$result = mail( 'dlefkon@gmail.com', 'Mail from OnlineSoapTest Contact form', $request->get('contact_message'), $headers );
  	
    	if( $result ) { 

    		$this->get('session')->getFlashBag()->add('success', 'Message Sent. Thanks for your feedback :)');
    		
    	} else {

    		$this->get('session')->getFlashBag()->add('error', 'Message NOT Sent');
    		
    	}

    	return $this->render('OnlinesoaptestBundle:Default:contact.html.twig', array( 'title' => $title ));
    	 
    }
    


    private function printLastSoapRequest($soap_client){
    	echo 'Last Request was:';
    	echo $soap_client->getLastRequest();
    }
    
    private function printLastSoapResponse($soap_client){
    	echo 'Last Response was:';
    	echo $soap_client->getLastResponse();
    }
    
    public function thumbnailsAction( $title ) {

    	return $this->render('OnlinesoaptestBundle:Default:thumbnails.html.twig', array( 'title' => $title ));
    	
    	
    }
    
}
