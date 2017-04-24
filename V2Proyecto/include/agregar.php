<?php
	require_once 'db.php';

	$folio = $_GET['folio'];	
	$curp = $_GET['curp'];
	$beneficiario = $_GET['beneficiario'];
	$cobeneficiario = $_GET['cobeneficiario'];
	$referencia = $_GET['referencia'];
	$comunidad = $_GET['comunidad'];

	$query = "INSERT INTO personal(folio, curp , beneficiario, cobeneficiario, referencia, Idpueblos) VALUES($folio,'$curp','$beneficiario','$cobeneficiario','$referencia','$comunidad')";

	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

	echo $json_response = json_encode($result);
?>