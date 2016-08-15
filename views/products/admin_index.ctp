<?php echo $this->Html->addCrumb('Dashboard','/admin/'); ?>
<?php echo $this->Html->addCrumb('Products',''); ?>
<div ng-controller="AdminProductsController" ng-init="initializeController()">	
	<div class="row">
		<div class="col-lg-4 col-md-4 col-xs-4">
			<label for="search">Search</label>
			<input ng-model="q" id="search" class="form-control input-sm" placeholder="Filter text">
		</div>
		<div class="col-lg-2 col-md-2 col-xs-2 col-lg-offset-6 col-md-offset-6 col-xs-offset-6">
			<label for="search">Items per page</label>
			<input type="number" min="1" max="100" class="form-control input-sm ng-pristine ng-valid ng-valid-number ng-valid-max ng-valid-min" ng-model="pageSize">
		</div>
	</div><br/>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<table class="table table-striped table-hovered">
				<thead>
					<tr>
						<th colspan="4">PRODUCTS</th>
						<th colspan="1"><a href = "<?php echo $this->base;?>/admin/products/add" class="btn btn-sm btn-warning pull-right">Add New Product</a></th>
					</tr>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Category</th>
						<th>Manufacturer</th>
						<th class="actions text-center">Action</th>
					</tr>
				</thead>
				<tbody>
					<tr pagination-id="ProductListTable" dir-paginate="d in products | filter:q | itemsPerPage: pageSize" current-page="currentPage">
						<td>{{d.Product.id}}</td>
						<td>{{d.Product.name}}</td>
						<td>{{d.Category.name}}</td>
						<td>{{d.Manufacturer.name}}</td>
						<td class="actions text-center">
							<a href="<?php echo $this->base;?>/admin/products/edit/{{d.Product.slug}}" data-toggle="tooltip" title="Edit Product Details"><i class="fa fa-edit"></i></a>
							| 
							<a href="<?php echo $this->base;?>/admin/product/{{d.Product.slug}}/images/" data-toggle="tooltip" title="Product Images"><i class="fa fa-file-image-o"></i></a>
							|
							<a href="<?php echo $this->base;?>/admin/products/delete/{{d.Product.id}}" onclick="return confirm('Are you sure you want to delete this product?');" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
						
						</td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<td colspan="5" class="text-center">
							<dir-pagination-controls pagination-id="ProductListTable"></dir-pagination-controls>
						</td>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</div>
<?php echo $this->Html->script('controllers/admin_products',array('inline'=>false));?>