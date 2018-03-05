(function() {

	'use strict';

	angular
		.module('poll')
		.factory('snack', snack);

		function snack($resource, $http) {

			function getSnack() {
				return $http.get('/api/snacks');
			}

			function getVote() {
				var apiToken = angular.element('meta[name="api-token"]').attr('content');
				return $http.get('/api/user', {
					headers: {
						'Authorization': 'Bearer ' + apiToken
					}

				});
			}

			function vote($window, $event, vm) {
				var apiToken = angular.element('meta[name="api-token"]').attr('content');
				var obj = angular.element($event.currentTarget);
				var votes = obj.attr('data');
				var id = obj.attr('data-id');
				votes++;	
				return $http.patch(
					'/api/snacks/' + id,
					JSON.stringify({ votes: votes }),
					{
						headers: {
							'Authorization': 'Bearer ' + apiToken
						}
					}
				);

			}

			return {
				getSnack: getSnack,
				getVote: getVote,
				vote: vote,
			}

		}

})();
