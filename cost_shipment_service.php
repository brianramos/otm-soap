<?php

function costShipment($rexRateRequest) { 
   return 'TEST';
}
 
   ini_set("soap.wsdl_cache_enabled", "0"); 
   $server = new SoapServer("cost_shipment_service.wsdl");
   $server->addFunction("costShipment"); 
   $server->handle(); 
?>