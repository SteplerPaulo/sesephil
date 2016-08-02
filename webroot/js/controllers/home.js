App.controller('HomeController',function($scope,$rootScope,$http,$filter){
	
	$scope.initializeController = function(){
		$scope.currentPage = 1; 
		$scope.categoryLimit = false;
		$scope.productLimit = 6;
		$scope.imageLimit = 5;
		 
		 $scope.phones = [{
			"name": "Motorola XOOM™ with Wi-Fi",
				"snippet": "The Next, Next <br/> Generation tablet."
		}];
			
		$http.get("/sesephil/categories/main_children").success(function(response) {
			$scope.categories = response;
			
		});
		
		$http.get("/sesephil/products/all").success(function(response) {
			$scope.products = response;
		});
	}
});