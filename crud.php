<?php 
	include("db_con.php");
	$info = json_decode(file_get_contents("php://input"),TRUE);

	if(!empty($info) > 0){
		$empName 			= mysqli_escape_string($conn,$info['emp_name']);
		$empId 				= mysqli_escape_string($conn,$info['emp_id']);
		$empDesignation 	= mysqli_escape_string($conn,$info['emp_designation']);
		$empBtnNname		= $info['btnName'];
		

		if($empBtnNname == "Save")
		{
			
			$query = "INSERT INTO employees (emp_id, emp_name, emp_designation) VALUES('".$empId."','".$empName."','".$empDesignation."')";

			if(mysqli_query($conn, $query)){
				echo json_encode(['status'=>"success",'message'=>"Save successfully"]);
			}else{
				echo json_encode(['status'=>"error",'message'=>mysqli_error($conn)]);
			}
		}

		if($empBtnNname == "Update")
		{
			$id 				= $info['id'];
			$updateQuery = "UPDATE employees SET emp_id='".$empId."',emp_name='".$empName."',emp_designation='".$empDesignation."' WHERE id = '".$id."'";

			if(mysqli_query($conn, $updateQuery)){
				echo json_encode(['status'=>"success",'message'=>"Update successfully"]);
			}else{
				echo json_encode(['status'=>"error",'message'=>mysqli_error($conn)]);
			}
		}
	}


?>