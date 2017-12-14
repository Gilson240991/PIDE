<?php
include_once 'modelo/sunarp_model.php';
$o = new sunarp_model();

?>

<pre><?php // print_r($datos) ?></pre>

<?php echo '<a target="_blank"><img src="data:image/jpeg;base64,'.base64_encode( $o->verasiento('27040','63502948','ASIENTO','24','24','1')).'"/> Ver</a>';
 ?>