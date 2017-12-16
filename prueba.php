<?php
include_once 'modelo/pide_model.php';
$o = new pide_model();
$datos['usuario']='algo';
$datos['pass']='asdadafa';

$key ="ASdasfasfa";

print_r($o->validar_usuario(891));
if($o->validar_usuario(891)){
	echo "se pudo xD";
}else{
		echo "nada";
}
?>
