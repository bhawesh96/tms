<?php 

	$username = 'root';
	$pass = '';
	$dbname = 'tms';
	$host = 'localhost';

	$db = mysql_connect($host, $username, $pass);

	if(!$db){
		 die('failed to connect' . mysql_error());
	}

	$db_selected = mysql_select_db($dbname, $db);


 ?>
