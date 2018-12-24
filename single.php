<?php 
	include("db_con.php");
	$result = mysqli_query($conn,"Select * from employees where id = {$_GET['id']}");

	print_r($result);exit();

	$data = array();
	while( $row = mysqli_fetch_array($result)){
		$data[] = $row;
	}

	echo json_encode($data);


?>