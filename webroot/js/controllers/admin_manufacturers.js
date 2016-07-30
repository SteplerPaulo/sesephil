App.controller('AdminManufacturersController',function($scope,$rootScope,$http,$filter){
	
	$scope.initializeController = function(){
		$scope.currentPage = 1; 
		$scope.pageSize = 7;
		
		
		$http.get("/sesephil/manufacturers/all").success(function(response) {
			$scope.manufacturers = response;
		});
	}
	
});