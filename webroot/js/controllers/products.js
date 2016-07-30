App.controller('ProductsController',function($scope,$rootScope,$http,$filter){
	
	$scope.initializeController = function(){
		$scope.currentPage = 1; 
		$scope.pageSize = 5;
			
		$http.get("/sesephil/products/all").success(function(response) {
			$scope.products = response;
			console.log($scope.products);
		});
		
		$http.get("/sesephil/categories/main_children").success(function(response) {
			$scope.categories = response;
			
		});
	}
});