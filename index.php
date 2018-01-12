<!DOCTYPE html>
<html>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
	<body>

		<!-- <div ng-app="" ng-init="designation = 'Software Engineer'">
			Name: <input type="text" name="first_name" ng-model="first_name">
			<center><h2>{{first_name}}</h2></center>
			<p> Name: <span ng-bind="first_name"> </span> </p>
			<p> Designation: <span ng-bind="designation"></span></p>
		</div> -->



		<!-- <div class="" ng-app="my_first_app" ng-controller="my_first_controller">
			<input type="text" ng-model="name">
			<p><span ng-bind="name"></span></p>
		</div> -->
		<script type="text/javascript">
		/*var my_first_app = angular.module('my_first_app',[]);
		my_first_app.controller('my_first_controller', function($scope){
			console.log($scope.first_name)

		});*/
		</script>




		<?php //$arr = "['a','b','c','d','e','f']"; ?>
		<!-- <div ng-app="" ng-init="names= <?php echo $arr; ?>">
			<table>
				<tr ng-repeat="name in names">
					<td>			Name: </td>
					<td>		{{name}}	</td>
				</tr>
			</table>
		</div> -->



		<div class="" ng-app="first_app">
			<new-app-direct></new-app-direct>
			<script>
				var app = angular.module("first_app", []);
				app.directive('newAppDirect',function(){
					return {
						template: "Hi, Its working fine."
					}
				}) 
			</script>
		</div>

		


	</body>
</html>