<?php

	//database settings
	
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'poll';
	
	$connect = mysql_connect($hostname, $username, $password);
	mysql_select_db($dbname);

?>