(function() {
	
	'use strict';

	angular
		.module('poll')
		.controller('Vote', Vote);

		function Vote(snack) {

			var vm = this;

			vm.votes = [];

			snack.getSnack().then(function(results) {
				vm.votes = results;
				console.log(vm.votes);
			}, function(error) {
				console.log(error);
			});

		}

})();
