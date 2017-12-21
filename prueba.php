<?php 	
include 'modelo/sunarp_model.php';

$sunarp = new sunarp_model();
?>

<?php echo '<img  style ="width:100%;" src="data:image/jpeg;base64,'.base64_encode( $sunarp->verasiento('27040','8058883','FOLIO','24','2','1')).'"/>';