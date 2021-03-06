<!DOCTYPE html>
<html>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script src="http://localhost/CodeigniterAngularJS/js/server.js"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<body>

	<div class="container" ng-app="ServerApp" ng-controller="ServerCtrl"> 
		<div class="row">
			<div class="md-col-12">
				<button class="btn btn-success" data-toggle="modal" data-target="#myModal" ng-click="new_entry()">New Entry</button>								
				
				<br/>
				
				<table class="table">	
				<thead>
					<tr>
						<th>ID</th>
						<th>IP</th>
						<th>Type</th>
						<th>Username</th>
						<th>Password</th>
						<th></th>
					</tr>				
				</thead>
				<tbody>
					<tr ng-repeat="l in servers">
						<td>{{ l.id }}</td>
						<td>{{ l.server_ip }}</td>
						<td>{{ l.server_type }}</td>
						<td>{{ l.user_name }}</td>
						<td>{{ l.pass_word }}</td>
						<td><button class="btn btn-info" ng-click="edit(l.id)">Edit</button></td>
					</tr>
				</tbody>
				</table>
				
				
			</div>
		</div>
		
		
		<div ng-include="'http://localhost/CodeigniterAngularJS/load-entry-modal/'"></div>	
		<div ng-include="'http://localhost/CodeigniterAngularJS/top-navigation/'"></div>
	
		
		
	</div>
		
</body>
</html>
