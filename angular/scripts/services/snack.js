(function() {

	'use strict';

	angular
		.module('poll')
		.factory('snack', snack);

		function snack($resource) {

			// ngResource call to our static data
			var Snack = $resrouce('data/snack.json');

			return {};

		}

})();
