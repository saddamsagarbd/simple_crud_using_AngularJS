<?php	
	include("db_con.php");
	$info = json_decode(file_get_contents("php://input"),TRUE);

	if(!empty($info)){
		$deleteQuery = "DELETE from employees WHERE id ='".$info."'";
		if(mysqli_query($conn, $deleteQuery)){
			echo json_encode(['status'=>"success",'message'=>"Delete successfully"]);
		}else{
			echo json_encode(['status'=>"error",'message'=>mysqli_error($conn)]);
		}

	}
?>