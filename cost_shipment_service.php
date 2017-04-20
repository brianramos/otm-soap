<?php

function costShipment($xml) { 
   return '<?xml version="1.0" encoding="UTF-8"?>
				<env:Envelope xmlns:env="http://schemas.xmlsoap.org/soap/envelope/">
				  <env:Header/>
					<env:Body>
					  <rexRateResult>
						<costDetails>
							<costDetail>
								<cost>666.00</cost>
								<currencyCode>EUR</currencyCode>
							</costDetail>
						</costDetails>
					  </rexRateResult>
					</env:Body>
				</env:Envelope>';
}
 
   ini_set("soap.wsdl_cache_enabled", "0"); 
   $server = new SoapServer("cost_shipment_service.wsdl");
   $server->addFunction("costShipment"); 
   $server->handle(); 
?>