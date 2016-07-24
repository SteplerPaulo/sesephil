App.controller('InquiriesController',function($scope,$rootScope,$http,$filter){
	
	$scope.initializeController = function(){
		$scope.currentPage = 1; 
		$scope.pageSize = 11;
		
		
		$http.get("/sesephil/inquiries/all").success(function(response) {
			$scope.inquiries = response;
			console.log($scope.inquiries);
		});
	}
	
});