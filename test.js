		var app = angular.module("crudApp",[]).controller ('crudController', function($scope, $http) {
			$scope.btnName = "Save";
			$scope.insertForm = true;
			$scope.updateForm = false;
			$scope.employee = {};

			$scope.insert = function()
			{
				if($scope.employee.emp_name == null)
				{
					alert("Employee Name cannot be empty!");
				}else if($scope.employee.emp_id == null)
				{
					alert("Employee ID cannot be empty!");
				}else if($scope.employee.emp_designation == null)
				{
					alert("Employee Designation cannot be empty!");	
				}else
				{
					$scope.employee.btnName = $scope.btnName;
					//console.log($scope.employee);				

					$http.post("crud.php",$scope.employee)
					.then(function(response){
						/*console.log(response.data);return;*/
						if(response.data.status == 'success'){
						$scope.employee = {};
						$scope.btnName = "Save";
						$scope.show_data();
						}
					});
				}
			}
			// insert code ends here

			// show data in table
			$scope.show_data = function(){
				$http.get("fetch.php")
					.then(function(response){
						$scope.employees = response.data;
				});
			}

			// update table
			$scope.update_data = function(info){
				$scope.btnName = "Update";
				$scope.employee.emp_name= info.emp_name;
				$scope.employee.emp_id= info.emp_id;
				$scope.employee.emp_designation= info.emp_designation;
				$scope.employee.id= info.id;
				//console.log($scope.employee.id);
			}
			// update table
			$scope.delete_data = function(info){
				$id = info.id;

				var txt;
			  var r = confirm("Do you want to delete");
			  if (r == true) {
			    $http.post("delete.php", $id)
					.then(function(response){
						if(response.data.status == 'success'){
							$scope.btnName = "Save";
							$scope.show_data();
						}
				});
			  } else {
			    txt = "You pressed Cancel!";
			  }
			}
		});
