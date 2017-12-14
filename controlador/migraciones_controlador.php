<?php 
include "../modelo/migraciones_model.php";

$migraciones = new migraciones_model();

$funcion = $_REQUEST['funcion'];

switch ($funcion) {

	case 'getconsultasmigraciones':
		$institucion= (isset($_POST['institucion']))?$_POST['institucion']:"";
		$mac = (isset($_POST['mac']))?$_POST['mac']:"";
		$ip = (isset($_POST['ip']))?$_POST['ip']:"";
		$documento = (isset($_POST['documento']))?$_POST['documento']:"";
		$tipodocumento = (isset($_POST['tipodocumento']))?$_POST['tipodocumento']:"";

		$datos['rows'] = $migraciones->getconsultasmigraciones($institucion,$mac,$ip,$documento,$tipodocumento);
		
		echo json_encode($datos);
		
	break;


}