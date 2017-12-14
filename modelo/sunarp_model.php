<?php
Class sunarp_model{
		public function GetDetalleRPV($zona,$oficina,$placa){
		try{
			$servicio="https://ws3.pide.gob.pe/services/SunarpPideService?wsdl";
			$client = new SoapClient($servicio);
			$result = $client->verDetalleRPV($zona,$oficina,$placa);
			
			$datos['placa'] = $result->placa;
			$datos['serie'] = $result->serie;
			$datos['vin'] = $result->vin;
			$datos['nro_motor'] = $result->nro_motor;
			$datos['color'] = $result->color;
			$datos['marca'] = $result->marca;
			$datos['modelo'] = $result->modelo;
			$datos['estado'] = $result->estado;
			$datos['sede'] = $result->sede;
			$datos['propietarios'] = $result->propietarios;
			$datos['cantidadprop'] =count($result->propietarios->nombre);
			} catch (SoapFault $fault) {
			$datos['error'] = $fault->faultstring;
			}
			return $datos;
	    }
			public function titularidad($tipo,$paterno,$materno,$nombre,$razon){
				try {
					$servicio="https://ws3.pide.gob.pe/services/SunarpPideService?wsdl";
					$client = new SoapClient($servicio);
					$result = $client->buscarTitularidad($tipo,$paterno,$materno,$nombre,$razon);
					$rows = array();

					foreach($result as $row){
						$rows[] = $row;
					}
				} catch (SoapFault $fault) {
					$rows['error'] = $fault->faultstring;
				}
			
			return $rows;
	}

	public function buscarPJRazonSocialx($razon){
		try{
			$servicio="https://ws3.pide.gob.pe/services/SunarpPideService?wsdl";
			$client = new SoapClient($servicio, array('trace' => 1));
			$client->__call("buscarPJRazonSocial",array("razonSocial"=>"$razon"));

			$response  = $client->__getLastResponse();
			$doc = new DOMDocument();
			$doc->loadXML($response);
			$names= $doc->getElementsByTagName( "resultado" );
			$i=0;
			foreach ($names as $n) {
			$nodes = $n->childNodes;

			    foreach ($nodes as $node) {
			    $r[$i][$node->nodeName] = $node->nodeValue;
			    }
			    
			$i++;
			}
		}catch (SoapFault $fault) {
   				$r[0]['error']="Tiempo de petición fallido";
				}
			return $r;
	} 

	public function listarOficinas(){
			$servicio="https://ws3.pide.gob.pe/services/SunarpPideService?wsdl";
			$client = new SoapClient($servicio, array('trace' => 1));
			$client->getOficinas();

			$response  = $client->__getLastResponse();
			$doc = new DOMDocument();
			$doc->loadXML($response);
			$names= $doc->getElementsByTagName("oficina");
			$i=0;

			foreach ($names as $n) {
			$nodes = $n->childNodes;
			    foreach ($nodes as $node) {
			    $r[$i][$node->nodeName] = $node->nodeValue;
			    }
			    
			$i++;
			}
			return $r;
	} 

	public function buscarNaveAeronave($matricula){
		try	{
			$servicio="https://ws3.pide.gob.pe/services/SunarpPideService?wsdl";
			$client = new SoapClient($servicio);
			$result = $client->buscarNaveAeronave($matricula);

			$datos['matricula'] = $result->respuestaNaveAeronave->matricula;
			$datos['oficina'] = $result->respuestaNaveAeronave->oficina;
			$datos['numeroPartida'] = $result->respuestaNaveAeronave->numeroPartida;
			$datos['registro'] = $result->respuestaNaveAeronave->registro;
			$datos['libro'] = $result->respuestaNaveAeronave->libro;
			$datos['numeroSerie'] = $result->respuestaNaveAeronave->numeroSerie;
			$datos['modelo'] = $result->respuestaNaveAeronave->modelo;
			$datos['tomoFolio'] = $result->respuestaNaveAeronave->tomoFolio;
			$datos['cantidadfolio'] =count($result->respuestaNaveAeronave->tomoFolio->tomoFolio);
		    }catch (SoapFault $fault) {
   				$datos['error']="Tiempo de petición fallido";
			}
			return $datos;
	}

	public function listarAsientosx($zona,$oficina,$partida,$registro){
		try{
		$servicio="https://ws3.pide.gob.pe/services/SunarpPideService?wsdl";
			$client = new SoapClient($servicio);
			$result = $client->listarAsientos($zona,$oficina,$partida,$registro);

			$datos['transaccion'] = $result->transaccion;
			$datos['nroTotalPag'] = $result->nroTotalPag;
			$datos['listAsientos'] = $result->listAsientos;
			$datos['listFichas'] = $result->listFichas;
			$datos['listFolios'] = $result->listFolios;

			$datos['cantidadasientos'] =count($result->listAsientos);
			$datos['cantidadfichas'] =count($result->listFichas);
			$datos['cantidadfolios'] =count($result->listFolios);

			for ($i=0; $i<count($result->listAsientos); $i++) { 
				$datos['cantidadpaginas'][$i] =count($result->listAsientos[$i]->listPag);
			}
			
			for ($j=0; $j<count($result->listFichas); $j++) { 
				$datos['cantidadfichaslista'][$j] =count($result->listFichas->listPag);
			}
			
			for ($m=0; $m<count($result->listFolios); $m++) { 
				$datos['cantidadfolioslista'][$m] =count($result->listFolios[$m]->listPag);
			}
			}catch (SoapFault $fault) {
   				$datos['error']=$fault->faultstring;
				}
			return $datos;
	}

	public function verasiento($transaccion,$idImg,$tipo,$nroTotalPag,$nroPagRef,$pagina){
		$servicio="https://ws3.pide.gob.pe/services/SunarpPideService?wsdl";
			$client = new SoapClient($servicio);
			$result = $client->verAsiento($transaccion,$idImg,$tipo,$nroTotalPag,$nroPagRef,$pagina);
			//print_r($result);	
			return $result;
	}
}