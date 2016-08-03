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
                <a class="navbar-brand">SESEPHIL Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
				<li>
					<?php  echo $this->Html->
									link($this->Html->tag('i', '', array('class' => 'fa fa-home')),
									array('admin' => false,'controller'=>'pages','action'=>'/'),
									array('escape' => false,'class'=>'navbar-brand company-name')
									);  ?>
				</li>
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
						<?php  echo $this->Html->link($this->Html->tag('i', '', array('class' =>'fa fa-question-circle')).'  &nbsp;'.
												$this->Html->tag('span', 'Inquiries'),
												array('admin' => true,'controller'=>'inquiries','action'=>'/'),
												array('escape' => false));						
						?>
					</li>
					 <li>		
						<?php echo $this->Html->link( 	$this->Html->tag('i', '', array('class' => 'fa fa-fw fa-dropbox')).' '.
												$this->Html->tag('span', 'Products'),
												array('admin' => true,'controller'=>'products','action'=>'/'),
												array('escape' => false)
												);  ?>
					</li>
					<li>		
						<?php echo $this->Html->link( 	$this->Html->tag('i', '', array('class' => 'fa fa-fw fa-tags')).' '.
												$this->Html->tag('span', 'Categories'),
												array('admin' => true,'controller'=>'categories','action'=>'/'),
												array('escape' => false)
												);  ?>
					</li>
					<li>		
						<?php echo $this->Html->link( 	$this->Html->tag('i', '', array('class' => 'fa fa-fw fa-truck')).' '.
												$this->Html->tag('span', 'Manufacturers'),
												array('admin' => true,'controller'=>'manufacturers','action'=>'/'),
												array('escape' => false)
												);  ?>
					</li>
					<li>		
						<?php echo $this->Html->link( 	$this->Html->tag('i', '', array('class' => 'fa fa-fw fa-users')).' '.
												$this->Html->tag('span', 'Users'),
												array('admin' => true,'controller'=>'users','action'=>'/'),
												array('escape' => false)
												);  ?>
					</li>		
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
        <div id="page-wrapper" style="min-height: 620px;">
            <div class="container-fluid">
				<?php echo $this->Session->flash(); ?>
				<?php echo $this->Session->flash('email'); ?>
				<div class="breadcrumb"><?php echo $this->Html->getCrumbs(' <i class="fa fa-chevron-circle-right" aria-hidden="true"></i> ','Home Page'); ?></div>
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
	<script>
		$(function () {
		  $('[data-toggle="tooltip"]').tooltip();
		});
	</script>
	<?php  echo $scripts_for_layout; ?>


</body>

</html>
