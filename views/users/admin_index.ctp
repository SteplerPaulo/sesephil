<div ng-controller="AdminUsersController" ng-init="initializeController()">	
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
						<th>Username</th>
						<th>Full Name</th>
						<th class="actions text-center">Action</th>
					</tr>
				</thead>
				<tbody>
					<tr pagination-id="ProductListTable" dir-paginate="d in users | filter:q | itemsPerPage: pageSize" current-page="currentPage">
						<td>{{d.User.username}}</td>
						<td>{{d.User.full_name}}</td>
						<td class="actions text-center">
							<a data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
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
<?php echo $this->Html->script('controllers/admin_users',array('inline'=>false));?>


