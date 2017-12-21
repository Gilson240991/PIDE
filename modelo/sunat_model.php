<?php 
Class sunat_model{
	function datos_principales($ruc){

	$servicio="https://ws3.pide.gob.pe/services/SunatConsultaRuc?wsdl";
	$client = new SoapClient($servicio);
	//input
	$rucnum['numruc']=$ruc;
	$result = $client->getDatosPrincipales($rucnum);

	return $result;
	}

	function datos_secundarios($ruc){
	$servicio="https://ws3.pide.gob.pe/services/SunatConsultaRuc?wsdl";
	$client = new SoapClient($servicio);
	//input
	$rucnum['numruc']=$ruc;
	$result = $client->getDatosSecundarios($rucnum);
	return $result;	
	}

	function datos_adicionales_1($ruc){
		
		$servicio="https://ws3.pide.gob.pe/services/SunatConsultaRuc?wsdl";
	$client = new SoapClient($servicio);
	//input
	$rucnum['numruc']=$ruc;
	$result = $client->getDatosT1144($rucnum);
	return $result;
	}

	function datos_adicionales_2($ruc){
		
	$servicio="https://ws3.pide.gob.pe/services/SunatConsultaRuc?wsdl";
	$client = new SoapClient($servicio);
	//input
	$rucnum['numruc']=$ruc;
	$result = $client->getDatosT362($rucnum);
	return $result;
	}

	function datos_domicilio($ruc){
		
	$servicio="https://ws3.pide.gob.pe/services/SunatConsultaRuc?wsdl";
	$client = new SoapClient($servicio);
	//input
	$rucnum['numruc']=$ruc;
	$result = $client->getDomicilioLegal($rucnum);
	return $result;
	}

	function establecimientos_anexos($ruc){
		
	$servicio="https://ws3.pide.gob.pe/services/SunatConsultaRuc?wsdl";
	$client = new SoapClient($servicio);
	//input
	$rucnum['numruc']=$ruc;
	$result = $client->getEstablecimientosAnexos($rucnum);
	return $result;
	}

	function datos_anexos(){
		
	$servicio="https://ws3.pide.gob.pe/services/SunatConsultaRuc?wsdl";
	$client = new SoapClient($servicio);
	//input
	$rucnum['numruc']=$ruc;
	$result = $client->getEstAnexosT1150($rucnum);
	return $result;
	}
	function datos_legales($ruc){
		
	$servicio="https://ws3.pide.gob.pe/services/SunatConsultaRuc?wsdl";
	$client = new SoapClient($servicio);
	//input
	$rucnum['numruc']=$ruc;
	$result = $client->getRepLegales($rucnum);
	return $result;
	}
	
}