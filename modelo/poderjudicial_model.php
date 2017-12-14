<?php
//session_start();
Class poderjudicial_model{
		
	public function getantecedentespenales($paterno,$materno,$nombre1,$nombre2,$nombre3,$dni,$motivo,$entidad,$rucconsult,$ippublica,$dniconsult,$audnombrepc,$audip,$audnombrusuario,$audmac){
         $servicio="https://ws3.pide.gob.pe/services/PJAntecedentesPenales?wsdl";
		 $client = new SoapClient($servicio);
			
			
         $datos['xApellidoPaterno'] = $paterno;
         $datos['xApellidoMaterno'] = $materno;
         $datos['xNombre1'] = $nombre1;
         $datos['xNombre2'] = $nombre2;
         $datos['xNombre3'] = $nombre3;
         $datos['xDni'] = $dni;
         $datos['xMotivoConsulta'] =$motivo;
         $datos['xProcesoEntidadConsultante'] = $entidad;
         $datos['xRucEntidadConsultante'] = $rucconsult;
         $datos['xIpPublica'] = $ippublica;
         $datos['xDniPersonaConsultante'] = $dniconsult;
         $datos['xAudNombrePC'] = $audnombrepc;
         $datos['xAudIP'] = $audip;
         $datos['xAudNombreUsuario'] = $audnombrusuario;
         $datos['xAudDireccionMAC'] = $audmac;

		 $result = $client->verificarAntecedentesPenales($datos);
			


		 return $result;
	}
}
