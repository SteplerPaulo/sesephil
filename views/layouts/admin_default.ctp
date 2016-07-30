<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SESEPHIL-Admin</title>
	
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('bootstrap.min'); //Bootstrap Core CSS
		echo $this->Html->css('sesephil-admin'); //Custom CSS
		echo $this->Html->css('template\font-awesome-4.4.0\css\font-awesome'); //Custom Fonts
		echo $this->Html->css('plugins\morris'); //Custom Fonts
		echo $this->Html->css('plugins/summernote');
	?>
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div id="wrapper" ng-app="App">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SESEPHIL Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo ucfirst($access->getmy('username'))?><b class="caret"></b></a>
                    <ul class="dropdown-menu">

						
						 <li >
							<?php echo $this->Html->link( 	$this->Html->tag('i', '', array('class' => 'fa fa-user fa-fw')).' '.
										$this->Html->tag('span', 'Profile'),
										array('admin' => false,'controller'=>'users','action'=>'view'),
										array('escape' => false)
										);  ?>
						</li>
						<li>
							<?php echo $this->Html->link( 	$this->Html->tag('i', '', array('class' => 'fa fa-gear fa-fw')).' '.
										$this->Html->tag('span', 'Settings'),
										array('admin' => false,'controller'=>'users','action'=>'account_setting'),
										array('escape' => false)
										);  ?>
						</li>
						<li class="divider"></li>
						<li>
							<?php echo $this->Html->link( 	$this->Html->tag('i', '', array('class' => 'fa fa-power-off fa-fw')).' '.
									$this->Html->tag('span', 'Logout'),
									array('admin' => false,'controller'=>'users','action'=>'logout'),
									array('escape' => false)
									);  ?>
						</li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
						<?php echo $this->Html->link( 	$this->Html->tag('i', '', array('class' => 'fa fa-fw fa-dashboard')).' '.
												$this->Html->tag('span', 'Dashboard'),
												array('admin' => true,'controller'=>'users','action'=>'dashboard'),
												array('escape' => false)
												);  ?>
                    </li>
					<li>
						<?php  echo $this->Html->link($this->Html->tag('i', '', array('class' =>'fa fa-question-circle')).' '.
							$this->Html->tag('span', 'Inquiries'),
							array('admin' => true,'controller'=>'users','action'=>'/'),
							array('escape' => false));						
						?>
					</li>
					
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#ProductsLink" class="" aria-expanded="true"><i class="fa fa-fw fa-dropbox"></i> Products <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="ProductsLink" class="collapse in" aria-expanded="true">
                            <li>		
								<?php echo $this->Html->link( 	$this->Html->tag('i', '', array('class' => 'fa fa-fw fa-list-alt')).' '.
														$this->Html->tag('span', 'List'),
														array('admin' => true,'controller'=>'products','action'=>'/'),
														array('escape' => false)
														);  ?>
                            </li>
                            <li>
                                <?php echo $this->Html->link( 	$this->Html->tag('i', '', array('class' => 'fa fa-fw fa-plus-circle')).' '.
														$this->Html->tag('span', 'Add'),
														array('admin' => true,'controller'=>'products','action'=>'add'),
														array('escape' => false)
														);  ?>
                            </li>
                        </ul>
                    </li>
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#CategoriesLink" class="" aria-expanded="true"><i class="fa fa-fw fa-tags"></i> Categories <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="CategoriesLink" class="collapse in" aria-expanded="true">
                            <li>		
								<?php echo $this->Html->link( 	$this->Html->tag('i', '', array('class' => 'fa fa-fw fa-list-alt')).' '.
														$this->Html->tag('span', 'List'),
														array('admin' => true,'controller'=>'categories','action'=>'/'),
														array('escape' => false)
														);  ?>
                            </li>
                            <li>
                                <?php echo $this->Html->link( 	$this->Html->tag('i', '', array('class' => 'fa fa-fw fa-plus-circle')).' '.
														$this->Html->tag('span', 'Add'),
														array('admin' => true,'controller'=>'categories','action'=>'add'),
														array('escape' => false)
														);  ?>
                            </li>
                        </ul>
                    </li>
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#ManufacturersLink" class="" aria-expanded="true"><i class="fa fa-fw fa-truck"></i> Manufacturers <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="ManufacturersLink" class="collapse in" aria-expanded="true">
                            <li>		
								<?php echo $this->Html->link( 	$this->Html->tag('i', '', array('class' => 'fa fa-fw fa-list-alt')).' '.
														$this->Html->tag('span', 'List'),
														array('admin' => true,'controller'=>'manufacturers','action'=>'/'),
														array('escape' => false)
														);  ?>
                            </li>
                            <li>
                                <?php echo $this->Html->link( 	$this->Html->tag('i', '', array('class' => 'fa fa-fw fa-plus-circle')).' '.
														$this->Html->tag('span', 'Add'),
														array('admin' => true,'controller'=>'manufacturers','action'=>'add'),
														array('escape' => false)
														);  ?>
                            </li>
                        </ul>
                    </li>		
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#UsersLink" class="" aria-expanded="true"><i class="fa fa-fw fa-truck"></i> Users <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="UsersLink" class="collapse in" aria-expanded="true">
                            <li>		
								<?php echo $this->Html->link( 	$this->Html->tag('i', '', array('class' => 'fa fa-fw fa-list-alt')).' '.
														$this->Html->tag('span', 'List'),
														array('admin' => true,'controller'=>'users','action'=>'/'),
														array('escape' => false)
														);  ?>
                            </li>
                        </ul>
                    </li>				
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
        <div id="page-wrapper" style="min-height: 620px;">
            <div class="container-fluid">
				<?php echo $this->Session->flash(); ?>
				<?php echo $this->Session->flash('email'); ?>
				<?php echo $content_for_layout; ?>
            </div>
        </div>
    </div>


	<?php
		echo $this->Html->script(array('jquery')); 
		echo $this->Html->script(array('bootstrap.min')); //Bootstrap Core JavaScript
		echo $this->Html->script(array('template/angular'));
		echo $this->Html->script(array('template/angular-sanitize'));
		echo $this->Html->script(array('angularUtils/directives/dirPagination'));
		echo $this->Html->script(array('angularUtils/directives/ui-bootstrap-tpls-0.14.3.min'));
		echo $this->Html->script('plugins/summernote');
	?>
	<script type="text/javascript">(function(){window.App = angular.module('App',['angularUtils.directives.dirPagination','ngSanitize'])})();</script>
	<?php  echo $scripts_for_layout; ?>

</body>

</html>
