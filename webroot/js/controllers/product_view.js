App.controller('ViewProductController',function($scope,$rootScope,$http,$filter){
	
	$scope.initializeController = function(){
		$scope.currentPage = 1; 
		$scope.imageLimit = 12;
		$scope.relatedProductLimit = 6;

		if (document.location.hostname == "localhost"){
			if(window.location.pathname.split('/')[3]){
				var slug = window.location.pathname.split('/')[3];
					
				$http.get(BASE_URL+"products/by_filter/"+slug).success(function(response) {
					$scope.data = response;
					$scope.productId = $scope.data.Product.id;
					$scope.related_products = $scope.data.Manufacturer.Product;
				});
			}
		}else{
			if(window.location.pathname.split('/')[2]){
				var slug = window.location.pathname.split('/')[2];
				$http.get(BASE_URL+"products/by_filter/"+slug).success(function(response) {
					$scope.data = response;
					$scope.productId = $scope.data.Product.id;
					$scope.related_products = $scope.data.Manufacturer.Product;
				});
			}
		}
		
	}
});