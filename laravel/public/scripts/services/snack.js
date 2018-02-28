(function() {

	'use strict';

	angular
		.module('poll')
		.factory('snack', snack);

		function snack($resource, $http) {

			// ngResource call to our static data
			var Snack = $resource('/api/snacks');

			function getSnack() {
				return Snack.query().$promise.then(function(results) {
					return results;
				}, function(error) {
					console.log(error);
				});
			}

			function vote($event) {
				var obj = angular.element($event.currentTarget);
				var votes = obj.attr('data');
				var id = obj.attr('data-id');
				votes++;	
				return $http.patch('/api/snacks/' + id, JSON.stringify({ votes: votes })).then(function(response) {
					return response;
				}, function(error) {
					console.log(error);
				});
			}

			return {
				getSnack: getSnack,
				vote: vote,
			}

		}

})();
