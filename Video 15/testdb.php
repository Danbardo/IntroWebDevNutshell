<?php

	include_once('db.php');
	
	$sql="SELECT * FROM users";
	$query = $db -> query($sql);
	
	foreach($query as $row){
		echo $row['name']." ".$row['email'].'<br>';
	}		
	
	echo $query->num_rows;


?>