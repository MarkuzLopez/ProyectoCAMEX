<?php 

	require 'conexion.php';
	$id = NULL;
	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];

	echo $nombre;
	echo "<br>";
	echo $apellidos;

	//$procesar = "insert into prueba (id,nombre,apellidos) values ($id,'$nombre','$apellidos')";
	$sql = "insert into prueba(id,nombre,apellidos) values ('$id','$nombre','$apellidos')";
	mysql_query($sql);

	?>