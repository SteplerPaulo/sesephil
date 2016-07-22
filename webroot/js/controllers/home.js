App.controller('HomeController',function($scope,$rootScope,$http,$filter){
	
	$scope.initializeController = function(){
		$scope.currentPage = 1; 
		$scope.categoryLimit = false;
		$scope.productLimit = 5;
		 
		 $scope.myText = "My name is: <h1>John Doe</h1>";
			
		$http.get("/sesephil/categories/main_children").success(function(response) {
			$scope.categories = response;
		});
		
		$http.get("/sesephil/products/all").success(function(response) {
			$scope.products = response;
			console.log($scope.products);
		});
	}
});