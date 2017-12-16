<?php 
session_start();
include "../modelo/sisacse_model.php";
include_once "../modelo/pide_model.php";

$sisacse = new sisacse_model();
$pide = new pide_model();

$funcion = $_REQUEST['funcion'];

switch ($funcion) {
	case 'index':
		header('Location: ../vista/Login/');		
	break;
	case 'validarAccesoSisacse':
		$usuario = $_POST["usuario"];
		$pass = $_POST["pass"];
		$sistema ="SINSE";

		$credenciales['login']=$usuario;
		$credenciales['password'] = $pass;
		$credenciales['sistema'] =$sistema;

		 try{
		 	$result = $sisacse->ValidarAcceso($credenciales);
		 	$resultado ="Bienvenido, al Sistema de Interoperabilidad de servicios";

		 	//filtrando el id del usuario
		 	$datos = $sisacse->DatosUsuario($result);
		 	

		 	//insertando en la base de datos del pide MML
		 	$pide->registrando_datos_usuario($credenciales,$datos);


		 } catch (SoapFault $e) {
			$resultado = $e->faultstring;
		}
		
		$_SESSION['key']=$result;
		$json['resultado']=$resultado;
		echo json_encode($json);

	break;
	

}