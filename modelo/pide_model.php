<?php 
include_once 'coneccion.php';
Class pide_model{
	function registrando_datos_usuario($array,$datos){


	$estado = $this->validar_usuario($datos['id']);

	if($estado){
		 $query = "call UPDATE_USUARIO('".$array['login']."','".$array['password']."','".$datos['id']."')";
			 $db = coneccionBD::getInstance();
   			 $cn = $db->conectar();
 			 $result = $cn ->prepare($query);
			 $result->execute();
	}else{
		$query = "call CREAR_USUARIO('".$array['login']."','".$array['password']."','".$datos['id']."')";
			 $db = coneccionBD::getInstance();
   			 $cn = $db->conectar();
 			 $result = $cn ->prepare($query);
			 $result->execute();
	}
		
	}

	function validar_usuario($id){
		try {

			 $db = coneccionBD::getInstance();
   			 $cn = $db->conectar();
   			 $query ="call MOSTRAR_USUARIO_POR_ID('".$id."')";
   			//echo $query;

   			$result = $cn ->prepare($query);
			$result -> setFetchMode(PDO::FETCH_ASSOC);
			$result->execute();

			if($result->rowCount()){
		     	return true;
		     }else{
		     	return false;
		     }   
		     
		} catch (Exception $e) {
			echo "Error".$e->getMessage();
		}
	}
}