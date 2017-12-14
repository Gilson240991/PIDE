<?php
include_once '../../modelo/sunarp_model.php';
$o = new sunarp_model();

$transaccion = $_GET['transaccion'];
$idImg = $_GET['idImg'];
$tipo = $_GET['tipo'];
$totalpag = $_GET['totalpag'];
$refpag = $_GET['refpag'];
$pagina = $_GET['pagina'];

?>

<div style="width: 1200px;margin: 0 auto;">
	<?php echo '<img  style ="width:100%;" src="data:image/jpeg;base64,'.base64_encode( $o->verasiento($transaccion,$idImg, $tipo,$totalpag,$refpag,$pagina)).'"/>';
 ?>
</div>
