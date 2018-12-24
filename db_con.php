<?php
	
	$host = "localhost";
	$user ="root";
	$pass ="";
	$db_name ="angular_crud";

	$conn = mysqli_connect($host,$user,$pass);
	if(!$conn){
		die(['status'=>"error",'message'=>"Database connect failed"]);
	}

	$db_select = mysqli_select_db($conn,$db_name);

	
?>