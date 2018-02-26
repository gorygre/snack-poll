(function() {
	
	'use strict';

	angular
		.module('poll')
		.controller('Vote', Vote);

		function Vote(snack) {

			var vm = this;

			vm.votes = [];

		}

})();
