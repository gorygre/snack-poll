(function() {

	'use strict';

	angular
		.module('poll')
		.factory('snack', snack);

		function snack($resource) {

			// ngResource call to our static data
			var Snack = $resource('/api/snacks');

			function getSnack() {
				return Snack.query().$promise.then(function(results) {
					return results;
				}, function(error) {
					console.log(error);
				});
			}

			return {
				getSnack: getSnack,
			}

		}

})();
