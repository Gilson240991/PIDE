<?php 	
$ws  = "http://ws.reniec.gob.pe:80/SRELService/SRELServiceService?wsdl";
			$client = new SoapClient($ws);
	
	$data['usuario']="MULIMWS";
	$data['codigo']="Mzc3NDk2MDY=";
			
			$result = $client->getSession($data);

			$buscar['sesion']=$result->return;
			$buscar['usuario']="MULIMWS";
			$buscar['apPaterno']="AGUILAR";
			$buscar['apMaterno']="CARBAJAL";
			$buscar['nombres']="GILSON JAIR";

			$result2 = $client->getRegIdentAproximacion($buscar);
?>

<pre><?php print_r($client->__getFunctions()); ?></pre>