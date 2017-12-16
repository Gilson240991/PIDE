<?php 
Class sunat_model{
	function datos_principales($ruc){

$servicio="https://ws3.pide.gob.pe/services/SunatConsultaRuc?wsdl";
$client = new SoapClient($servicio);
$result = $client->verDetalleRPV($zona,$oficina,$placa);
	}
}