<?php

namespace Websites\OnlinesoaptestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\ParameterBag;

class DefaultController extends Controller {

	public function homeAction($title) {
			
		return $this->render('OnlinesoaptestBundle:Default:home.html.twig', array('title' => $title, 'SOAP_1_1' => SOAP_1_1, 'SOAP_1_2' => SOAP_1_2, 'SOAP_RPC' => SOAP_RPC, 'SOAP_DOCUMENT' => SOAP_DOCUMENT, 'SOAP_ENCODED' => SOAP_ENCODED, 'SOAP_LITERAL' => SOAP_LITERAL, 'HTTP_HOST' => 'onlinesoaptest', 'DOMAIN_NAME' => 'onlinesoaptest' ));
	
	}

	public function photosAction($title, $name) {

		return $this->render('OnlinesoaptestBundle:Default:photos.html.twig', array( 'title' => $title ) );
	
	}
	
	public function ajaxAction( Request $request, $title) {
		
		$wsdl = $request->get('wsdl');
var_dump($wsdl); exit;		 









function printLastSoapRequest($soap_client){
	echo 'Last Request was:';
	echo $soap_client->getLastRequest();
}

function printLastSoapResponse($soap_client){
	echo 'Last Response was:';
	echo $soap_client->getLastResponse();
}

require(LIBRARIES_DIR . 'Zend/Soap/Client.php');

$options = array();

$wsdl_url = isset($_GET['wsdl']) && $_GET['wsdl'] != '' ? $_GET['wsdl'] : null;

$soap_client = new Zend_Soap_Client($wsdl_url, $options);

$soap_client->setLocation($_GET['endpoint']);

if(isset($_GET['endpoint'])) $soap_client->setLocation($_GET['endpoint']);
if(isset($_GET['endpoint']) && !$wsdl_url) $soap_client->setUri($_GET['endpoint']);
if(isset($_GET['version'])) $soap_client->setSoapVersion($_GET['version']);
if(isset($_GET['style']) && !$wsdl_url) $soap_client->setStyle($_GET['style']);
if(isset($_GET['encoding']) && !$wsdl_url) $soap_client->setEncodingMethod($_GET['encoding']);

if(isset($_GET['operation'])) $operation = $_GET['operation'];
// if(isset($_GET['parameter_name']) && isset($_GET['parameter_value']))

$parameters = array();

for($i=0; $i<20; $i++){
	if(isset($_GET["parameter_name_pnv_$i"]) && $_GET["parameter_name_pnv_$i"] != '' && isset($_GET["parameter_value_pnv_$i"]) && $_GET["parameter_value_pnv_$i"] != ''){
		$parameters[$_GET["parameter_name_pnv_$i"]] = $_GET["parameter_value_pnv_$i"];
	}
}

$table_input = $soap_client->getOptions();
$table_input['operation'] = $operation;
$table_input['parameters'] = $parameters;

echo '<table class="response">';
$i = 1;
foreach($options as $key => $value){
	echo '<tr>';
	$alternating_row_class = ++$i%2 == 0 ? 'alternating_row_class_1' : 'alternating_row_class_2';
	echo "<td class='alternating_rows $alternating_row_class'>$key</td>";
	echo "<td class='alternating_rows $alternating_row_class'>$value</td>";
	echo '</tr>';
}
echo '</table>';

try {
	$soap_response = $soap_client->$operation($parameters);
} catch (SoapFault $exception) {
	echo '<pre>';
	printLastSoapRequest($soap_client);
	printLastSoapResponse($soap_client);
	print_r($exception);
	echo '</pre>';
	exit;
}

printLastSoapRequest($soap_client);
echo $soap_response;
exit;






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
