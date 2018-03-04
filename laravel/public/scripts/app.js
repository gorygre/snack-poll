(function() {

	'use strict';

	angular
		.module('poll', [
			'ngResource',
			'ui.bootstrap'
		], function($interpolateProvider) {
			$interpolateProvider.startSymbol('<%');
			$interpolateProvider.endSymbol('%>');
		});
})();
