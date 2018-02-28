<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Snack Poll</title>
		<link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.css">
		<link rel="stylesheet" href="/css/style.css">
	</head>
	<body ng-app="poll" ng-controller="Vote as vm">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">Snack Poll</a>
				</div>
			</div>
		</nav>

		<div class="container">
			<div class="row">
				<div class="col-md-6" ng-repeat="snack in vm.votes">
					<div class="card {{snack.name}}">
						<img class="card-img-top" src="images/{{snack.name}}.jpg" alt="{{snack.name}}">
						<div class="card-body">
							<h5 class="card-title">{{snack.name}}</h5>
							<a href="#" class="btn btn-primary" ng-click="vote($event)" data="{{snack.votes}}" data-id="{{snack.id}}">Vote</a>
							<span class="votes">&nbsp;{{snack.votes}}</span>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Scripts -->
		<script type="text/javascript" src="/bower_components/angular/angular.js"></script>
		<script type="text/javascript" src="/bower_components/angular-bootstrap/ui-bootstrap-tpls.js"></script>
		<script type="text/javascript" src="/bower_components/angular-resource/angular-resource.js"></script>
		<script type="text/javascript" src="/scripts/app.js"></script>
		<script type="text/javascript" src="/scripts/controllers/Vote.js"></script>
		<script type="text/javascript" src="/scripts/services/snack.js"></script>
	</body>
</html>
