App.controller('CategoriesController',function($scope,$rootScope,$http,$filter){
	
	$scope.initializeController = function(){
		$scope.currentPage = 1; 
		$scope.pageSize = 11;
		
		
		$http.get("/DTR/categorie/all").success(function(response) {
			$scope.categories = response;
		});
	}
	
});