<div ng-controller="InquiriesController" ng-init="initializeController()">	
	<div class="row">
		<div class="col-lg-4 col-md-4 col-xs-4">
			<label for="search">Search</label>
			<input ng-model="q" id="search" class="form-control input-sm" placeholder="Filter text">
		</div>
		<div class="col-lg-4  col-md-4 col-xs-4 col-lg-offset-4 col-md-offset-4 col-xs-offset-4 ">
			<label for="search">Item per page</label>
			<input type="number" min="1" max="100" class="form-control input-sm" ng-model="pageSize">
		</div>
	</div><br/>
	<table class="table table-striped table-hover ">
		<thead>
			<tr>
				<th>ID</th>
				<th>From</th>
				<th>Subject</th>
				<th>Created</th>
				<th class="actions text-center">Action</th>
			</tr>
		</thead>
		<tbody>
			<tr pagination-id="InquiryListTable" dir-paginate="s in inquiries | filter:q | itemsPerPage: pageSize" current-page="currentPage">
				<td>{{s.Inquiry.id}}</td>
				<td>{{s.Inquiry.from}}</td>
				<td>{{s.Inquiry.subject}}</td>
				<td>{{s.Inquiry.created}}</td>
				<td class="actions text-center">
					<a data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
				</td>
			</tr>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="5" class="text-center">
					<dir-pagination-controls pagination-id="InquiryListTable"></dir-pagination-controls>
				</td>
			</tr>
		</tfoot>
	</table>	
</div>
<?php echo $this->Html->script('controllers/inquiries',array('inline'=>false));?>