<?php
//session_start();
Class reniec_model{

	public function getSession($usuario,$codigo){
			$servicio="http://ws.reniec.gob.pe:80/SRELService/SRELServiceService?wsdl";
			$client = new SoapClient($servicio);
			$datos['usuario'] = $usuario;
			$datos['codigo'] =$codigo;

			$result = $client->getSession($datos);
			return $result;
	}
		
	public function getdatospersonales($session,$usuario,$codTxEmp,$dniUserEmp,$dni){
		try {
			$servicio="http://ws.reniec.gob.pe:80/SRELService/SRELServiceService?wsdl";
			$client = new SoapClient($servicio);

			$personales['sesion'] = $session;
			$personales['usuario'] =$usuario;
			$personales['codTxEmp']=$codTxEmp;
			$personales['dniUserEmp']=$dniUserEmp;
			$personales['dni']=$dni;

			$result = $client->getRegIdentConsolidada2($personales);
		} catch (SoapFault  $e) {
			$result ="CAYO";	
		}
			
			return $result;
	}

	public function getdatospersonalesporNombresapellidos($session,$usuario,$paterno,$materno,$nombres){
		try {
			$servicio="http://ws.reniec.gob.pe:80/SRELService/SRELServiceService?wsdl";
			$client = new SoapClient($servicio);

			$personales['sesion'] = $session;
			$personales['usuario'] =$usuario;
			$personales['apPaterno']=$paterno;
			$personales['apMaterno']=$materno;
			$personales['nombres']=$nombres;

			$result = $client->getRegIdentAproximacion($personales);
		} catch (SoapFault $e) {
			$result ="CAYO";
		}
		return $result;
	}

	
}
