App.controller('ViewProductController',function($scope,$rootScope,$http,$filter){
	
	$scope.initializeController = function(){
		$scope.currentPage = 1; 
		$scope.imageLimit = 12;
		$scope.relatedProductLimit = 6;

		if(window.location.pathname.split('/')[3]){
			var slug = window.location.pathname.split('/')[3];
				
			$http.get("/sesephil/products/by_filter/"+slug).success(function(response) {
				$scope.data = response;
				$scope.productId = $scope.data.Product.id;
				$scope.related_products = $scope.data.Manufacturer.Product;
			
				console.log($scope.related_products);
			});
		}
		
	}
});