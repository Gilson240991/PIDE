<?php 
include "../modelo/poderjudicial_model.php";

$poder = new poderjudicial_model();

$funcion = $_REQUEST['funcion'];

switch ($funcion) {

	case 'getantecedentespenales':

		$paterno= (isset($_POST['paterno']))?$_POST['paterno']:"";
		$materno = (isset($_POST['materno']))?$_POST['materno']:"";
		$nombre1 =(isset($_POST['nombre1']))?$_POST['nombre1']:"";
		$nombre2= (isset($_POST['nombre2']))?$_POST['nombre2']:"";
		$nombre3 = (isset($_POST['nombre3']))?$_POST['nombre3']:"";
		$dni =(isset($_POST['dni']))?$_POST['dni']:"";
		$motivo= (isset($_POST['motivo']))?$_POST['motivo']:"";
		$entidad = (isset($_POST['entidad']))?$_POST['entidad']:"";
		$rucentidad =(isset($_POST['rucentidad']))?$_POST['rucentidad']:"";
		$ippublica= (isset($_POST['ippublica']))?$_POST['ippublica']:"";
		$dniconsult= (isset($_POST['dniconsult']))?$_POST['dniconsult']:"";
		$nombrepc = (isset($_POST['nombrepc']))?$_POST['nombrepc']:"";
		$ip =(isset($_POST['ip']))?$_POST['ip']:"";
		$nombreusuario= (isset($_POST['nombreusuario']))?$_POST['nombreusuario']:"";
		$mac = (isset($_POST['mac']))?$_POST['mac']:"";

		$datos['rows'] = $poder->getantecedentespenales($paterno,$materno,$nombre1,$nombre2,$nombre3,$dni,$motivo,$entidad,$rucentidad,$ippublica,$dniconsult,$nombrepc,$ip,$nombreusuario,$mac);
		
		echo json_encode($datos);
		
	break;


}