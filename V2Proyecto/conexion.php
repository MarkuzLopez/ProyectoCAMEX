<?php
	
	$conexionn =mysql_connect("localhost","root","");
	
	if($conexionn){
		mysql_select_db("canasta",$conexionn);
	}

	mysql_query("SET NAMES 'utf8'");
?>