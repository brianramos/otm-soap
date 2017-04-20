<?php

function costShipment($rexRateRequest) { 

	$costDetail = new stdClass();
	$costDetails = new stdClass();
	$response = new stdClass();
	
	$costDetail->cost = 666.00;
	$costDetail->currencyCode = 'EUR';
	
	$costDetails->costDetail = $costDetail;
	
	$response->err = "";
	$response->costDetails = $costDetails;
	$response->serviceDays = 2;
	$response->utcPickupDateTime = "";
	$response->pickupTimezone = "";
	$response->utcDeliveryDateTime = "";
	$response->deliveryTimezone = "";
	$response->chargeableWeight = "";
	$response->chargeableWeightUom = "";
	$response->dimWeight = "";
	$response->dimWeightUom = "";

	return $response;
}
 
   ini_set("soap.wsdl_cache_enabled", "0"); 
   $server = new SoapServer("cost_shipment_service.wsdl");
   $server->addFunction("costShipment"); 
   $server->handle(); 
?>