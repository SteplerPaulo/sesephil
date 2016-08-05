var BASE_URL = window.location.href;
App.controller('ProductsController',function($scope,$rootScope,$http,$filter){
	
	$scope.initializeController = function(){
		$scope.currentPage = 1; 
		$scope.pageSize =12;
		
		$http.get(BASE_URL+"categories/main_children").success(function(response) {
			$scope.categories = response;
		});
			
		$http.get(BASE_URL+"products/all").success(function(response) {
			$scope.products = response;
			
			if(window.location.pathname.split('/')[3]){
				$scope.productFilter = window.location.pathname.split('/')[3];
			}
		});
	}
});