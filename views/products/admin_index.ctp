<div ng-controller="AdminProductsController" ng-init="initializeController()">	
	<div class="row">
		<div class="col-lg-4 col-md-4 col-xs-4">
			<label for="search">Search</label>
			<input ng-model="q" id="search" class="form-control input-sm" placeholder="Filter text">
		</div>
		<div class="col-lg-4  col-md-4 col-xs-4 col-lg-offset-4 col-md-offset-4 col-xs-offset-4 ">
			<label for="search">Items per page</label>
			<input type="number" min="1" max="100" class="form-control input-sm ng-pristine ng-valid ng-valid-number ng-valid-max ng-valid-min" ng-model="pageSize">
		</div>
	</div><br/>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-xs-12">
			<table class="table table-bordered">
				<thead>
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
							<a href="/sesephil/admin/products/edit/{{d.Product.id}}" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
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