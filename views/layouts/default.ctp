<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.console.libs.templates.skel.views.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php __('SESEPHIL:'); ?>
		<?php echo $title_for_layout; ?>
	</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('bootstrap.min'); //Bootstrap Core CSS
		echo $this->Html->css('sesephil'); //Custom CSS
		echo $this->Html->css('template\font-awesome-4.4.0\css\font-awesome'); //Custom Fonts
	?>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div ng-app="App">
        <!-- Navigation -->
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					
					<?php  echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-heartbeat')).' '.
									$this->Html->tag('span', 'South East Star Enterprises'),
									array('admin' => false,'controller'=>'pages','action'=>'/'),
									array('escape' => false,'class'=>'navbar-brand company-name')
									);  ?>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						
						<li>
							<?php  echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-dropbox')).' '.
								$this->Html->tag('span', 'Product'),
								array('admin' => false,'controller'=>'products','action'=>'/'),
								array('escape' => false));						
							?>
						</li>
						<li>
							<?php  echo $this->Html->link($this->Html->tag('i', '', array('class' =>'fa fa-info-circle')).' '.
								$this->Html->tag('span', 'About'),
								array('admin' => false,'controller'=>'pages','action'=>'/about'),
								array('escape' => false));						
							?>
						</li>
						<li>
							<?php  echo $this->Html->link($this->Html->tag('i', '', array('class' =>'fa fa-phone-square')).' '.
								$this->Html->tag('span', 'Contact'),
								array('admin' => false,'controller'=>'pages','action'=>'/contact'),
								array('escape' => false));						
							?>
						</li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container -->
		</nav>

        <div id="ContentForLayoutContainer" class="container">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->Session->flash('email'); ?>
			<?php echo $content_for_layout; ?>
        </div>
    </div>
	<?php
		echo $this->Html->script(array('jquery')); 
		echo $this->Html->script(array('bootstrap.min')); //Bootstrap Core JavaScript
		echo $this->Html->script(array('template/angular'));
		echo $this->Html->script(array('template/angular-sanitize'));
		echo $this->Html->script(array('angularUtils/directives/dirPagination'));
		echo $this->Html->script(array('angularUtils/directives/ui-bootstrap-tpls-0.14.3.min'));
	?>
	<script type="text/javascript">(function(){window.App = angular.module('App',['angularUtils.directives.dirPagination','ngSanitize'])})();</script>
	<?php  echo $scripts_for_layout; ?>
</body>
</html>