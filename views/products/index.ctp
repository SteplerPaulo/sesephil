<div ng-controller="ProductsController" ng-init="initializeController()">	
	<div class="row">
		<div class="col-lg-4 col-md-4 col-xs-4">
			<label for="search">Search</label>
			<input ng-model="q" id="search" class="form-control input-sm" placeholder="Filter text">
		</div>
	</div><br/>

	<div class="row">
		<div class="col-sm-3 col-lg-3 col-md-3" pagination-id="ProductList" dir-paginate="d in products | filter:q | itemsPerPage: pageSize">
			<div class="thumbnail">
				<img src="http://placehold.it/320x150" alt="">
				<div class="caption">
					<h4>
						<a href="/sesephil/products/view/{{d.Product.slug}}">{{d.Product.name}}</a>
					</h4>
					<dl>
					  <dt>Manufactured by:</dt>
					  <dd>{{d.Manufacturer.name}}</dd>
					</dl>
				</div>
				<div class="ratings">
					<p class="pull-right">15 reviews</p>
					<p>
						<span class="glyphicon glyphicon-star"></span>
						<span class="glyphicon glyphicon-star"></span>
						<span class="glyphicon glyphicon-star"></span>
						<span class="glyphicon glyphicon-star"></span>
						<span class="glyphicon glyphicon-star"></span>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo $this->Html->script('controllers/products',array('inline'=>false));?>
