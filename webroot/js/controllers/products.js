App.controller('ProductsController',function($scope,$rootScope,$http,$filter){
	
	$scope.initializeController = function(){
		$scope.currentPage = 1; 
		$scope.pageSize =10;
		
		$http.get("/sesephil/categories/main_children").success(function(response) {
			$scope.categories = response;
		});
			
		$http.get("/sesephil/products/all").success(function(response) {
			$scope.products = response;
			
			if(window.location.pathname.split('/')[3]){
				$scope.productFilter = window.location.pathname.split('/')[3];
			}
		});
	}
});