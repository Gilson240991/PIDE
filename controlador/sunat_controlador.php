<?php
include "../modelo/sunat_model.php";
$sunarp = new sunat_model();
$funcion = $_REQUEST['funcion'];
switch ($funcion) {

	case 'datos_principales':
	$ruc = (isset($_POST['ruc']))?$_POST['ruc']:"";


	break;
}