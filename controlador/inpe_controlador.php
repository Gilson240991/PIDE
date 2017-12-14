<?php 
include "../modelo/inpe_model.php";

$inpe = new inpe_model();

$funcion = $_REQUEST['funcion'];

switch ($funcion) {

	case 'getantecedentesjudiciales':
		$paterno= (isset($_POST['paterno']))?$_POST['paterno']:"";
		$materno = (isset($_POST['materno']))?$_POST['materno']:"";
		$nombre =(isset($_POST['nombre']))?$_POST['nombre']:"";

		$datos['rows'] = $inpe->getantecedentesjudiciales($paterno,$materno,$nombre);
		
		echo json_encode($datos);
		
	break;


}