<?php
//session_start();
Class minedu_model{
		
	public function consulta_grados_y_titulos($dni){
			$servicio="https://ws3.pide.gob.pe/services/MineduTitulos?wsdl";
			$client = new SoapClient($servicio);
			$data['nroDocumento']=$dni;
			$result = $client->GetData($data);
			return $result;
		
	}
}