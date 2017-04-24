<?php
session_start();
	require("conexion.php");
	$username=$_POST['mail'];
	$pass=$_POST['pass'];   

$sql2=mysql_query("SELECT * FROM login WHERE email='$username'");
	if($f2=mysql_fetch_array($sql2)){
		if($pass==$f2['pasadmin']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['user'];
			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
			echo "<script>location.href='admin.php'</script>";		
		}
	}

	$sql=mysql_query("SELECT * FROM login WHERE email='$username'");
	if($f=mysql_fetch_array($sql)){
		if($pass==$f['password']){
			$_SESSION['id']=$f['id'];
			$_SESSION['user']=$f['user'];
			header("Location: principal.php");
		}else{
			echo ' <!DOCTYPE html>
			<html>
			<head> 
			     <meta charset="UTF-8">				
			</head>			
			</html>
			<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='logueo.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='logueo.php'</script>";	

	}

?>