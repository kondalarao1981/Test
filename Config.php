<?php

/**
 * @author LiveLong
 * @copyright 2015
 */
    
    $db_hostname = 'localhost';
    $db_username = 'root';
    $db_password = '';
    $db_name = 'rk_acharya';   
    
    
    $con = mysql_connect($db_hostname, $db_username, $db_password);  
    mysql_select_db($db_name, $con);  
    if (!$con) {
    		die('Could not connect: ' . mysql_error());
	}


    
        
?>