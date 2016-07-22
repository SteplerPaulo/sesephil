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
		<?php __('SB Admin 2 - Bootstrap Admin Theme:'); ?>
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
		echo $this->Html->css('plugins/metisMenu/metisMenu.min'); //MetisMenu CSS
		echo $this->Html->css('plugins/timeline'); //Timeline CSS
		echo $this->Html->css('sb-admin-2'); //Custom CSS
		echo $this->Html->css('plugins/morris.css'); //Morris Charts CSS
		echo $this->Html->css('font-awesome-4.1.0/css/font-awesome.min'); //Custom Fonts
	?>



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	

	<?php
		//echo $this->Html->css('cake.generic');
		echo $scripts_for_layout;
	?>
</head>
<body>

    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="javascript:void(0)">SB Admin v2.0</a>
            </div>
			
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
            
			
			<!--SIDE BAR-->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a class="active" href="javascript:void(0)"><i class="fa fa-u fa-fw"></i> Home Page</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="fa fa-u fa-fw"></i> Other Page</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="page-wrapper">
           <?php echo $this->Session->flash(); ?>
			<?php echo $content_for_layout; ?>
        </div>
    </div>
	
	<?php
		echo $this->Html->script(array('jquery-1.11.0')); //jQuery Version 1.11.0
		echo $this->Html->script(array('bootstrap.min')); //Bootstrap Core JavaScript
		echo $this->Html->script(array('plugins/metisMenu/metisMenu.min')); //Metis Menu Plugin JavaScript
		echo $this->Html->script(array('plugins/morris/raphael.min','plugins/morris/morris.min','plugins/morris/morris-data')); //Morris Charts JavaScript
		echo $this->Html->script(array('sb-admin-2')); //Custom Theme JavaScript
		echo $scripts_for_layout;
	?>
	
	<?php // echo $this->element('sql_dump'); 
	?>
</body>
</html>