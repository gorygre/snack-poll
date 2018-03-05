(function() {
	
	'use strict';

	angular
		.module('poll')
		.controller('Vote', ['$window', '$scope', 'snack', Vote]);

		function Vote($window, $scope, snack) {

			var vm = this;

			vm.votes = [];

			function display(data) {
				// load snacks
				vm.votes = data;

				// place heart over snack that a user has voted for
				snack.getVote().then(function(response) {
					var vote = response.data.vote;
					if(vote !== '') {
						var selector = '#snack-' + vote;
						var card = angular.element(selector);
						var figure = card.children()[0];
						figure.className += ' active';
					} else {
						console.log('Not voted');
					}
				}, function(error) {
					console.log('Not logged in');
				});
			}

			// display initial values
			snack.getSnack().then(function(response) {
				display(response.data.reverse());
			});

			// expose snack vote function
			$scope.vote = function($event) {
				snack.vote($window, $event, vm).then(function(response) {
					// Authorized and has not voted
					display(response.data.reverse());
				}, function error(response) {
					if(response.status === 401) {
						// Not Authorized
						$window.location.href = '/login';
					} else {
						console.log('already voted');
					}
				})			
			}

		}

})();
