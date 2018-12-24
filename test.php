$scope.show_data = function()
			{
				$http.get("fetch.php")
				.success(function(data)
				{
					$scope.employees = data;
				});
			}
			$scope.update_data = function(id, emp_name, emp_id, emp_designation)
			{
				$scope.id = id;
				$scope.emp_name = emp_name;
				$scope.emp_id = emp_id;
				$scope.emp_designation = emp_designation;
				$scope.btnName = "Update";
			}
			$scope.delete_data = function(id)
			{
				if(confirm("Are you sure you want to delete?"))
				{
					$http.post("delete.php",{
						'id':id
					}).success(function(data){
						alert(data);
						$scope.show_data();
					});
				}else{
					return false;
				}
			}