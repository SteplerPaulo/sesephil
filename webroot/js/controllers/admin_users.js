App.controller('AdminUsersController',function($scope,$rootScope,$http,$filter){
	
	$scope.initializeController = function(){
		$scope.currentPage = 1; 
		$scope.pageSize = 10;
		
		
		$http.get("/sesephil/users/all").success(function(response) {
			$scope.users = response;
		});
	}
	
});