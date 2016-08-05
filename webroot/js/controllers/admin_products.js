App.controller('AdminProductsController',function($scope,$rootScope,$http,$filter){
	
	$scope.initializeController = function(){
		$scope.currentPage = 1; 
		$scope.pageSize = 7;
			
		$http.get(BASE_URL+"products/all").success(function(response) {
			$scope.products = response;
		});
	}
});