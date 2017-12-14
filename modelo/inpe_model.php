<?php
//session_start();
Class inpe_model{
		
	public function getantecedentesjudiciales($paterno,$materno,$nombre){
			$servicio="https://ws3.pide.gob.pe/services/INPEAJudiciales?wsdl";
			$client = new SoapClient($servicio);
			$datos['apepat'] = $paterno;
			$datos['apemat'] =$materno;
			$datos['nombres']=$nombre;

			$result = $client->getAntecedenteJudicial($datos);
			


			return $result;
	}
}
