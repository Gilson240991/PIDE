<?php
include "../modelo/sunat_model.php";
$sunat = new sunat_model();
$funcion = $_REQUEST['funcion'];
switch ($funcion) {

	case 'datos_personales':
	$ruc = (isset($_POST['ruc']))?$_POST['ruc']:"";

	$datos['principal'] = $sunat->datos_principales($ruc);
	$datos['secundario'] = $sunat->datos_secundarios($ruc);
	$datos['adicional1'] = $sunat->datos_adicionales_1($ruc);
	$datos['adicional2'] = $sunat->datos_adicionales_2($ruc);
	$datos['domicilio'] = $sunat->datos_domicilio($ruc);
	$datos['est_anexos'] =$sunat->establecimientos_anexos($ruc);
	//retorna la cantidad de anexos 
	$datos['est_anexos_cantidad'] =count($sunat->establecimientos_anexos($ruc)->getEstablecimientosAnexosReturn);
	$datos['representantes']=$sunat->datos_legales($ruc);
	$datos['representantes_cantidad']=count($sunat->datos_legales($ruc)->getRepLegalesReturn);


	echo json_encode($datos);
	break;
}