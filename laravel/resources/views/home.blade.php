@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6" ng-repeat="snack in vm.votes">
			<div id="snack-<%snack.id%>" class="card <%snack.name%>">
				<figure class="layered-img">
					<img class="card-img-top" src="images/heart.svg" alt="heart">
					<img class="card-img-top" src="images/<%snack.name%>.jpg" alt="<%snack.name%>">
				</figure>
				<div class="card-body">
					<h5 class="card-title"><%snack.name%></h5>
					<button class="btn btn-primary" ng-click="vote($event)" data="<%snack.votes%>" data-id="<%snack.id%>">Vote</button>
					<span class="votes">&nbsp;<%snack.votes%></span>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
