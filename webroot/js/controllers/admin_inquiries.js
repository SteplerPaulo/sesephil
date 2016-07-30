App.controller('AdminInquiriesController',function($scope,$rootScope,$http,$filter){
	
	$scope.initializeController = function(){
		$scope.currentPage = 1; 
		$scope.pageSize = 7;
		
		
		$http.get("/sesephil/inquiries/all").success(function(response) {
			$scope.inquiries = response;
			console.log($scope.inquiries);
		});
	}
	
});