<!DOCTYPE html>
<html ng-app="crudApp">
<head>
	<meta charset="utf-8">
	<title>Saddam | CRUD using AngularJS</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
  <script type="text/javascript" src="test.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3 align="center">AngularJS crud</h3>				
			</div>			
		</div>
		<div ng-controller="crudController">
			<div class="row">			
				<div class="col-md-6">
					<h4 align="center">Insert Form</h4>
					<label>Employee Name</label>
					<input type="text" name="emp_name" ng-model="employee.emp_name" class="form-control"><br>
					<label>Employee ID</label>
					<input type="text" name="emp_id" ng-model="employee.emp_id" class="form-control"><br>
					<label>Employee Designation</label>
					<input type="text" name="emp_designation" ng-model="employee.emp_designation" class="form-control"><br>
					<input type="hidden" ng-model="employee.id">
					<input type="submit" name="insert" ng-click="insert()" class="btn btn-primary" value="{{ btnName }}">						
				</div>

				<div class="col-md-6" ng-init="show_data()">
					<table class="table table-bordered">
						<tr align="center">
							<th>S. No</th>
							<th>Emp. Name</th>
							<th>Emp. ID</th>
							<th>Designation</th>
							<th colspan="2">Action</th>
						</tr>
						<tr ng-repeat="emp in employees">
							<td>{{ $index + 1 }}</td>
							<td>{{ emp.emp_name }}</td>
							<td>{{ emp.emp_id }}</td>
							<td>{{ emp.emp_designation }}</td>
							<td>
								<button class="btn btn-success btn-xs" id="btnEdit" ng-click="update_data(emp)">
									<span class="fa fa-edit"></span>
								</button>
								<button class="btn btn-danger btn-xs" ng-click="delete_data(emp)">
									<span class="fa fa-trash"></span>
								</button>
							</td>
						</tr>						
					</table>
				</div>				
			</div>			
		</div>		
	</div>



</body>
</html>