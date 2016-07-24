<div ng-controller="InquiriesController" ng-init="initializeController()">	
	<div class="row">
		<div class="col-lg-4 col-md-4 col-xs-4">
			<label for="search">Search</label>
			<input ng-model="q" id="search" class="form-control input-sm" placeholder="Filter text">
		</div>
		<div class="col-lg-4  col-md-4 col-xs-4 col-lg-offset-4 col-md-offset-4 col-xs-offset-4 ">
			<label for="search">Items per page</label>
			<input type="number" min="1" max="100" class="form-control input-sm" ng-model="pageSize">
		</div>
	</div><br/>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>ID</th>
				<th>From</th>
				<th>Subject</th>
				<th>Content</th>
				<th>Created</th>
				<th class="actions text-center">Action</th>
			</tr>
		</thead>
		<tbody>
			<tr pagination-id="InquiryListTable" dir-paginate="s in inquiries | filter:q | itemsPerPage: pageSize" current-page="currentPage">
				<td>{{s.Inquiry.id}}</td>
				<td>{{s.Inquiry.from}}</td>
				<td>{{s.Inquiry.subject}}</td>
				<td>{{s.Inquiry.content}}</td>
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


<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Inquiry', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Inquiry Files', true), array('controller' => 'inquiry_files', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inquiry File', true), array('controller' => 'inquiry_files', 'action' => 'add')); ?> </li>
	</ul>
</div>

<?php echo $this->Html->script('controllers/inquiries',array('inline'=>false));?>