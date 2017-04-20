<?php

function costShipment($inputDataList) { 
   return '<?xml version="1.0" encoding="UTF-8"?>
				<SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ns1="http://xmlns.oracle.com/apps/otm/ExternalRating">
					<SOAP-ENV:Body>
						<env:Body>
						  <ns1:rexRateResult>
							<ns1:costDetails>
								<ns1:costDetail>
									<ns1:cost>666.00</ns1:cost>
									<ns1:currencyCode>EUR</ns1:currencyCode>
								</ns1:costDetail>
							</ns1:costDetails>
						  </ns1:rexRateResult>
					</SOAP-ENV:Body>
				</SOAP-ENV:Envelope>';
}
 
   ini_set("soap.wsdl_cache_enabled", "0"); 
   $server = new SoapServer("cost_shipment_service.wsdl");
   $server->addFunction("costShipment"); 
   $server->handle(); 
?>