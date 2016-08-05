App.controller('AdminProductImagesController',function($scope,$rootScope,$http,$filter){
	
	$scope.initializeController = function(){
		
		$scope.pageSize =false;
			
			
		if(window.location.pathname.split('/')[4]){
			var slug = window.location.pathname.split('/')[4];
				
			$http.get("/sesephil/product_images/by_filter/"+slug).success(function(response) {
				
				$scope.d =  response;
				$scope.ProductName = response.Product.name
				$scope.ProductID = response.Product.id
				$scope.ProductSlug = response.Product.slug
				console.log($scope.ProductSlug);
			});
		}		
		
	}
	
	
	
	$scope.addPhoto = function (){
		$scope.isEdit = false;
		$scope.ModalLabel = 'Add Photo';
		$('#Modal').modal('show');
	}
	
	$scope.editImageCaption = function (img){
		
		$scope.ImageID = img.id;// Populate Image ID
		$scope.ImageCaption = img.caption;// Populate Image Caption
		
		$scope.isEdit = true;
		$scope.ModalLabel = 'Edit Caption';
		$('#Modal').modal('show');
	}
});