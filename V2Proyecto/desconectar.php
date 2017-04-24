<?php 
	session_start();
	if($_SESSION['user'])
	{
		session_destroy();
		header("location:logueo.php");
		
	}
	 else 
	 {
	 	header("location:logueo.php");
	 	
	 }
	
 ?>