<?php

function costShipment($rexRateRequest) { 
   return '<ns1:costDetails>
				<ns1:costDetail>
					<ns1:cost>666.00</ns1:cost>
					<ns1:currencyCode>EUR</ns1:currencyCode>
				</ns1:costDetail>
			</ns1:costDetails>';
}
 
   ini_set("soap.wsdl_cache_enabled", "0"); 
   $server = new SoapServer("cost_shipment_service.wsdl");
   $server->addFunction("costShipment"); 
   $server->handle(); 
?>