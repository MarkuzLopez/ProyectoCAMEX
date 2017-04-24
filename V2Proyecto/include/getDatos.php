<?php
	require_once 'db.php';
	
	$query = "SELECT id, nombre FROM  pueblos";

	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
	
	$arr = array();
	if($result->num_rows > 0){
		while ($row = $result->fetch_assoc()) {
			$arr[] = $row;
		}
	}

	echo $json_response = json_encode($arr);
?>