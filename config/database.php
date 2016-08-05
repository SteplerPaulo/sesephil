<?php
class DATABASE_CONFIG {
	var $remote = array(
		'driver' => 'mysql',
		'persistent' => false,
		'host' => 'mysql.hostinger.ph',
		'login' => 'u519358519_ssphl',
		'password' => 'Ch0wK1ing',
		'database' => 'u519358519_ssphl',
	);
	
	var $default = array(
		'driver' => 'mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'root',
		'password' => '',
		'database' => 'sesephil_updated',
	);
	function __construct() {
		if($_SERVER['HTTP_HOST']!='localhost'){
			$this->default =  $this->remote;
		}
	}
}
?>