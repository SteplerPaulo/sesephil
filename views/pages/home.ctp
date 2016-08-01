<?php echo $this->Html->addCrumb('Home Page'); ?>
<div ng-controller="HomeController" ng-init="initializeController()">	
	<div class="row">
		<section class="col-md-9">
			<div class="row carousel-holder">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-generic" data-slide-to="1"></li>
							<li data-target="#carousel-example-generic" data-slide-to="2"></li>
							<li data-target="#carousel-example-generic" data-slide-to="3"></li>
						</ol>
						<div class="carousel-inner">
							<div class="item active">
								<img class="slide-image" src="/sesephil/webroot/img/banner/1.jpg" style="height:300px;">
							</div>
							<div class="item">
								<img class="slide-image" src="/sesephil/webroot/img/banner/2.jpg" style="height:300px;">
							</div>
							<div class="item">
								<img class="slide-image" src="/sesephil/webroot/img/banner/3.jpg" style="height:300px;">
							</div>
							<div class="item">
								<img class="slide-image" src="/sesephil/webroot/img/banner/4.jpg" style="height:300px;">
							</div>
						</div>
						<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
						</a>
						<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
						</a>
					</div>
				</div>
			</div>
			<h4>Featured Products</h4>
			<div class="row">
				<div class="col-sm-4 col-lg-4 col-md-4" pagination-id="FeaturedProductList" dir-paginate="d in products | filter:q | itemsPerPage: productLimit">
					<div class="thumbnail">
						<div class="row carousel-holder" style="margin-bottom: 0px;" ng-if="d.ProductImage.length">
							<div class="col-md-12">
								<div id="{{d.Product.slug}}" class="carousel slide" data-ride="carousel">
									<ol class="carousel-indicators">
										<li data-target="#carousel-example-generic" data-slide-to="0" dir-paginate="(key,images) in d.ProductImage | filter:q | itemsPerPage: productLimit" ng-if="d.ProductImage.length > 1" ng-class="{active: key==0}"></li>
									</ol>
									<div class="carousel-inner">
										<div class="item" dir-paginate="(key,images) in d.ProductImage | filter:q | itemsPerPage: productLimit" ng-class="{active: key==0}">
											<img src="/sesephil/img/product images/{{images.img_file}}" alt="{{d.Product.name}}" style="height:150px;">
										</div>
									</div>
									<a class="left carousel-control" href="#{{d.Product.slug}}" data-slide="prev" ng-if="d.ProductImage.length > 1" >
										<span class="glyphicon glyphicon-chevron-left" style="font-size: 15px;"></span>
									</a>
									<a class="right carousel-control" href="#{{d.Product.slug}}" data-slide="next" ng-if="d.ProductImage.length > 1" >
										<span class="glyphicon glyphicon-chevron-right" style="font-size: 15px;"></span>
									</a>
								</div>
							</div>
						</div>
						<img src="http://placehold.it/320x150" ng-if="!d.ProductImage.length" style="height:150px;">
						<div class="caption">
							<h4>
								<a href="/sesephil/product/{{d.Product.slug}}">{{d.Product.name}}</a>
							</h4>
							<p>
							<dl>
							  <dt>Manufactured by:</dt>
							  <dd>{{d.Manufacturer.name}}</dd>
							</dl>
							</p>
						</div>
						<p class="contact-now">
							<a href="/sesephil/inquiries/send/{{d.Product.slug}}" target="_blank" class="btn btn-danger btn-sm"><i class="fa fa-envelope-o"></i> Contact Now</a>
						</p>
					</div>
				</div>
				<div class="col-sm-4 col-lg-4 col-md-4">
					<h4><a href="javascript:void(0)">Want to Call or Chat our costumer service representative?</a>
					</h4>
					<p>
						What do I need to start contacting SESEPHIL using Skype?
						<br/><br/>
						All you need to get up and running with Skype is an internet connection – broadband is best.
						<a href="https://support.skype.com/en/faq/FA10328/what-do-i-need-to-start-using-skype" target="_blank">Read More...</a>
					</p>
					<span class="call-us-now">Call Us Now!</span>
					<script type="text/javascript" src="https://secure.skypeassets.com/i/scom/js/skype-uri.js"></script>
					<div id="SkypeButton_Call_pkerroj_1" class="pull-right">
						<script type="text/javascript">
							 Skype.ui({
								"name": "dropdown",
								"element": "SkypeButton_Call_pkerroj_1",
								"participants": ["pkerroj"]
							 });
						</script>
					</div>
										
				
				</div>

			</div>

		</section>
		<section class="col-md-3">
			<table class="table table-hover categories-table">
				<thead>
					<th>CATEGORIES</th>
				</thead>
				<tbody>
					<tr pagination-id="CategoryList" dir-paginate="d in categories | filter:q | itemsPerPage: categoryLimit">
						<td>
							<a href="/sesephil/product-category/{{d.Category.slug}}"  >{{d.Category.name}}</a>
						</td>
					</tr>
				</tbody>
			</table>
		</section>
	</div><br/><br/>
</div>
<?php echo $this->Html->script('controllers/home',array('inline'=>false));?>