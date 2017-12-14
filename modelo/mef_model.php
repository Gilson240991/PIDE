<?php
//session_start();
Class mef_model{
		
	public function ValidarAcceso($credenciales){
			$servicio="http://172.20.4.18/WACSE/mmlService.svc?wsdl";
			$client = new SoapClient($servicio);
			//$credenciales['login'];
			//$credenciales['password'];
			//$credenciales['sistema'];
					
			$result = $client->ValidarAcceso($credenciales);
			$resultado = $result->ValidarAccesoResult;
			return $resultado;
		
	}
	public function GetPip($key){
			$servicio="https://ws3.pide.gob.pe/services/MefObtenerPip?wsdl";
			$client = new SoapClient($servicio);
			$codigo['codigo']=$key;
			$result = $client->GetPip($codigo);

			$datos['Codigo'] = $result->GetPipResult->PIP->Codigo;
			$datos['Nombre'] = $result->GetPipResult->PIP->Nombre;
			$datos['FechaRegistro'] = $result->GetPipResult->PIP->FechaRegistro;
			$datos['TipoCadenaFunc'] = $result->GetPipResult->PIP->TipoCadenaFunc;
			$datos['FuncionCodigo'] = $result->GetPipResult->PIP->FuncionCodigo;
			$datos['ProgramaCodigo'] = $result->GetPipResult->PIP->ProgramaCodigo;
			$datos['SubprogramaCodigo'] = $result->GetPipResult->PIP->SubprogramaCodigo;
			$datos['Funcion'] = $result->GetPipResult->PIP->Funcion;
			$datos['Programa'] = $result->GetPipResult->PIP->Programa;
			$datos['Subprograma'] = $result->GetPipResult->PIP->Subprograma;
			$datos['UnidadFormuladora'] = $result->GetPipResult->PIP->UnidadFormuladora;
			$datos['UnidadFormuladora'] = $result->GetPipResult->PIP->UnidadFormuladora;
			$datos['NivelGobierno'] = $result->GetPipResult->PIP->NivelGobierno;
			$datos['Sector'] = $result->GetPipResult->PIP->Sector;
			$datos['SectorCodigo'] = $result->GetPipResult->PIP->SectorCodigo ;
			$datos['Pliego'] = $result->GetPipResult->PIP->Pliego;
			$datos['PliegoCodigo'] = $result->GetPipResult->PIP->PliegoCodigo;
			$datos['Evaluadora'] = $result->GetPipResult->PIP->Evaluadora;
			$datos['EvaluadoraCodigo'] = $result->GetPipResult->PIP->EvaluadoraCodigo;
			$datos['Ejecutora'] = $result->GetPipResult->PIP->Ejecutora;
			$datos['EjecutoraCodigo'] = $result->GetPipResult->PIP->EjecutoraCodigo;
			$datos['Situacion'] = $result->GetPipResult->PIP->Situacion;
			$datos['UltimoEstudio'] = $result->GetPipResult->PIP->UltimoEstudio;
			$datos['EstadoUltimoEstudio'] = $result->GetPipResult->PIP->EstadoUltimoEstudio;
			$datos['Beneficiario'] = $result->GetPipResult->PIP->Beneficiario;
			$datos['ConglomeradoCodigo'] = $result->GetPipResult->PIP->ConglomeradoCodigo;
			$datos['FuenteFinanciamiento'] = $result->GetPipResult->PIP->FuenteFinanciamiento;
			$datos['MontoAlternativa'] = $result->GetPipResult->PIP->MontoAlternativa;
			$datos['MontoReformulado'] = $result->GetPipResult->PIP->MontoReformulado;
			$datos['MontoF15'] = $result->GetPipResult->PIP->MontoF15;
			$datos['MontoF16'] = $result->GetPipResult->PIP->MontoF16;
			$datos['FlagExpedienteTecnico'] = $result->GetPipResult->PIP->FlagExpedienteTecnico;
			$datos['AnoViabilidad'] = $result->GetPipResult->PIP->AñoViabilidad;
			$datos['FechaViabilidad'] = $result->GetPipResult->PIP->FechaViabilidad;
			return $datos;
	}
	public function GetPipLocalizacion($key){
			$servicio="https://ws3.pide.gob.pe/services/MefObtenerPip?wsdl";
			$client = new SoapClient($servicio);
			$codigo['codigo']=$key;
			$result = $client->GetPipLocalizacion($codigo);

			$datos['Codigo'] = $result->GetPipLocalizacionResult->ProyectoLocalizacion->Codigo;
			$datos['Departamento'] = $result->GetPipLocalizacionResult->ProyectoLocalizacion->Departamento;
			$datos['Provincia'] = $result->GetPipLocalizacionResult->ProyectoLocalizacion->Provincia;
			$datos['Distrito'] = $result->GetPipLocalizacionResult->ProyectoLocalizacion->Distrito;
			$datos['CentroPoblado'] = $result->GetPipLocalizacionResult->ProyectoLocalizacion->CentroPoblado;
			$datos['Ubigeo'] = $result->GetPipLocalizacionResult->ProyectoLocalizacion->Ubigeo;

			return $datos;

	}
	public function getFuentesAno($ano){
			$servicio="https://ws3.pide.gob.pe/services/MefFuente?wsdl";
			$client = new SoapClient($servicio);
			$codigo['anoEje']=$ano;
			$result = $client->ObtenerFuentesPorAno($codigo);

			$rows = array();
			foreach($result as $row){
				$rows[] = $row;
			}

			return $rows;
	}
}