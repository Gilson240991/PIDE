<?php 
include "../modelo/reniec_model.php";

$reniec = new reniec_model();

$funcion = $_REQUEST['funcion'];

switch ($funcion) {
	case 'obtener_datos_personales':

	$usuario = "MULIMWS";
	$codigo ="Mzc3NDk2MDY=";

	$result = $reniec->getSession($usuario,$codigo);


	$codTxEmp ="WS0016";
	$dniUserEmp ="21287204";
	$dni= (isset($_POST['dni']))?$_POST['dni']:"";
	$data['datos']=$reniec->getdatospersonales($result->return,$usuario,$codTxEmp,$dniUserEmp,$dni);

	echo json_encode($data);
	break;

	case 'obtener_datos_personales_por_nombres_apellidos':

	$usuario = "MULIMWS";
	$codigo ="Mzc3NDk2MDY=";

	$result = $reniec->getSession($usuario,$codigo);

	$paterno= (isset($_POST['paterno']))?$_POST['paterno']:"";
	$materno= (isset($_POST['materno']))?$_POST['materno']:"";
	$nombres= (isset($_POST['nombres']))?$_POST['nombres']:"";

	$data['datos'] = $reniec->getdatospersonalesporNombresapellidos($result->return,$usuario,$paterno,$materno,$nombres);
	echo json_encode($data);
	break;
}