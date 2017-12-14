<?php 
include "../modelo/mef_model.php";

$mef = new mef_model();

$funcion = $_REQUEST['funcion'];

switch ($funcion) {

	case 'GetPIP':
		$codigo= $_POST['codigo'];
		$datos['rows'] = $mef->GetPip($codigo);
		
		echo json_encode($datos);
		
	break;
	case 'GetPipAñoRegistro':
		//no hay resultado
	break;
	case 'GetPipLocalizacion':
		$codigo= $_POST['codigo'];
		$datos['rows'] = $mef->GetPipLocalizacion($codigo);
		
		echo json_encode($datos);
	break;
	case 'GetPipLocalizacionAñoRegistro':
		//no hay resultado
	break;
	case 'getFuentesAno':
		$codigo= $_POST['ano'];

		$lista= $mef->getFuentesAno($codigo);

		$json['rows']=$lista;
		echo json_encode($json);
		
	break;

}