App.controller('AdminCategoriesController',function($scope,$rootScope,$http,$filter){
	
	$scope.initializeController = function(){
		$scope.currentPage = 1; 
		$scope.pageSize = 7;
		
		
		$http.get("/sesephil/categories/main_children").success(function(response) {
			$scope.categories = response;
		});
	}
	
});