<?php

function costShipment($rexRateRequest) { 

	$costDetail = new stdClass();
	$costDetails = new stdClass();
	$response = new stdClass();
	
	$costDetail->cost = '500.00';
	$costDetail->currencyCode = 'EUR';
	$costDetail->costType = 'Base';
	$costDetail->accessorialCode = "";
	$costDetail->costCode = "";
	$costDetail->specialServiceCode = "";
	$costDetail->calculationDetails = "";
	$costDetail->isWeightedCostOnly = "";
	$costDetail->costCategoryGid = "";
	$costDetail->shipUnitGid = "";
	$costDetail->shipUnitLineSeq = "";
	
	$costDetails->costDetail = $costDetail;
	
	$response->costDetails = $costDetails;
	$response->serviceDays = "";
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