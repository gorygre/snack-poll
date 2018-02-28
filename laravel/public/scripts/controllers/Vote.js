(function() {
	
	'use strict';

	angular
		.module('poll')
		.controller('Vote', ['$scope', 'snack', Vote]);

		function Vote($scope, snack) {

			var vm = this;

			vm.votes = [];

			snack.getSnack().then(function(results) {
				vm.votes = results.reverse();
			}, function(error) {
				console.log(error);
			});

			$scope.vote = function($event) {
				snack.vote($event).then(function(response) {
					vm.votes = response.data.reverse();
				}, function(error) {
					console.log(error);
				});
			}

		}

})();
