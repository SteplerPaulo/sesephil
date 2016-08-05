<?php echo $this->Html->addCrumb('Dashboard','/admin/'); ?>
<?php echo $this->Html->addCrumb('Manufacturers',''); ?>
<div ng-controller="AdminManufacturersController" ng-init="initializeController()">	
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
		<div class="col-lg-12 col-md-12 col-xs-12">
			<table class="table table-striped table-hovered">
				<thead>
					<tr>
						<th colspan="4">MANUFACTURERS</th>
						<th colspan="1"><a href = "<?php echo $this->base;?>/admin/manufacturers/add" class="btn btn-sm btn-warning pull-right">Add New Manufacturer</a></th>
					</tr>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Slug</th>
						<th>Address</th>
						<th class="actions text-center">Action</th>
					</tr>
				</thead>
				<tbody>
					<tr pagination-id="ManufacturerListTable" dir-paginate="d in manufacturers | filter:q | itemsPerPage: pageSize" current-page="currentPage">
						<td>{{d.Manufacturer.id}}</td>
						<td>{{d.Manufacturer.name}}</td>
						<td>{{d.Manufacturer.slug}}</td>
						<td>{{d.Manufacturer.address}}</td>
						<td class="actions text-center">
							<a href="<?php echo $this->base;?>/admin/manufacturers/edit/{{d.Manufacturer.id}}" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
						</td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<td colspan="5" class="text-center">
							<dir-pagination-controls pagination-id="ManufacturerListTable"></dir-pagination-controls>
						</td>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</div>
<?php echo $this->Html->script('controllers/admin_manufacturers',array('inline'=>false));?>


