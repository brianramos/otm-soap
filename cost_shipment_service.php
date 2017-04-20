<?php

function costShipment($rexRateRequest) { 

	$response = new stdClass();

	$response->cost = 666.00;
	$response->currencyCode = 'EUR';

	return $response;
}
 
   ini_set("soap.wsdl_cache_enabled", "0"); 
   $server = new SoapServer("cost_shipment_service.wsdl");
   $server->addFunction("costShipment"); 
   $server->handle(); 
?>