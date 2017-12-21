<?php 
include "../modelo/minedu_model.php";

$minedu = new minedu_model();

$funcion = $_REQUEST['funcion'];

switch ($funcion) {

	case 'consulta_grados_y_titulos':
		$dni= (isset($_POST['dni']))?$_POST['dni']:"";
		

		$datos['rows'] = $minedu->consulta_grados_y_titulos($dni);
		
		echo json_encode($datos);
		
	break;


}