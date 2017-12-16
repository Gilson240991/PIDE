<?php
include "../modelo/sunarp_model.php";
$sunarp = new sunarp_model();
$funcion = $_REQUEST['funcion'];
switch ($funcion) {
	case 'VerDetalleRPV':
		$zona = (isset($_POST['zona']))?$_POST['zona']:"";
		$oficina = (isset($_POST['oficina']))?$_POST['oficina']:"";
		$placa = (isset($_POST['placa']))?$_POST['placa']:"";

		$placa =str_replace("-", "", $placa);
		$placa =str_replace(" ", "", $placa);
		//$d =$sunarp->GetDetalleRPV($zona,$oficina,$placa);
		$datos['row'] = $sunarp->GetDetalleRPV($zona,$oficina,strtoupper($placa));
		
		echo json_encode($datos);
		
	break;
	case 'titularidad':
		$tipo =    (isset($_POST['condicion']))?$_POST['condicion']:"";
		$paterno = (isset($_POST['paterno']))?$_POST['paterno']:"";
		$materno = (isset($_POST['materno']))?$_POST['materno']:"";
		$nombres = (isset($_POST['nombres']))?$_POST['nombres']:"";

		$datos['row'] = $sunarp->titularidad($tipo,strtoupper($paterno),strtoupper($materno),strtoupper($nombres));
		$datos['cantidad'] =count($datos['row'][0]);
		echo json_encode($datos);
	break;
	case 'titularidadjuridica':
	$tipo =    (isset($_POST['condicion']))?$_POST['condicion']:"";
	$paterno = (isset($_POST['paterno']))?$_POST['paterno']:"";
	$materno = (isset($_POST['materno']))?$_POST['materno']:"";
	$nombres = (isset($_POST['nombres']))?$_POST['nombres']:"";
	$razon = (isset($_POST['razon']))?$_POST['razon']:"";


	$datos['row'] = $sunarp->titularidad($tipo,strtoupper($paterno),strtoupper($materno),strtoupper($nombres),$razon);
	$datos['cantidad'] =count($datos['row'][0]);
		echo json_encode($datos);

	break;

	case 'listarPorRazonSocial':
	$razon =    (isset($_POST['razon']))?$_POST['razon']:"";

	$datos['row'] = $sunarp->buscarPJRazonSocialx(strtoupper($razon));
	echo json_encode($datos);
	break;

	case 'buscaraeronave':
	$matricula = (isset($_POST['matricula']))?$_POST['matricula']:"";

	$datos['row'] = $sunarp->buscarNaveAeronave(strtoupper($matricula));
	echo json_encode($datos);
	break;
	case 'listarAsientos':
		$zona = (isset($_POST['zona']))?$_POST['zona']:"";
		$oficina = (isset($_POST['oficina']))?$_POST['oficina']:"";
		$partida = (isset($_POST['partida']))?$_POST['partida']:"";
		$registro = (isset($_POST['registro']))?$_POST['registro']:"";
		

		$datos['row'] = $sunarp->listarAsientosx($zona,$oficina,$partida,$registro);
		echo json_encode($datos);
	break;

	case 'listarOficinas':
		$datos['row'] = $sunarp->listarOficinas();
		echo json_encode($datos);
	break;

	
}