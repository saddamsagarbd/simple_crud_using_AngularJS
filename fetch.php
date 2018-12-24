<?php 
	include("db_con.php");
	$result = mysqli_query($conn,"Select * from employees");
	$data = array();
	while( $row = mysqli_fetch_array($result)){
		/*echo"<pre>";
		print_r($row);
		echo "</pre>";
		exit();*/

		$data[] = $row;
	}

	echo json_encode($data);


?>