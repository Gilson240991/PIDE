<?php
//session_start();
Class migraciones_model{
		
	public function getconsultasmigraciones($institucion,$mac,$ip,$documento,$tipodocumento){
			$servicio="https://ws3.pide.gob.pe/services/MigraCarnetdeExtrajeria?wsdl";
			$client = new SoapClient($servicio);

			$datos['solicitud']['strCodInstitucion'] = $institucion;
			$datos['solicitud']['strMac'] =$mac;
			$datos['solicitud']['strNroIp']=$ip;
			$datos['solicitud']['strNumDocumento']=$documento;
			$datos['solicitud']['strTipoDocumento']=$tipodocumento;
			
			

			$result = $client->consultarDocumento($datos);
			

			return $result;
	}
}
