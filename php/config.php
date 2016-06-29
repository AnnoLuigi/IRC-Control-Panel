<?php

// SQL Credentials
$dbhost = '';
$dbuser = '';
$dbpass = '';
$dbname = '';
$primarytable = "";

// Create server connection
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error connecting to mysql');

//Select database
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error connecting to mysql');

mysql_select_db($dbname);

// Initial data population
$data = mysql_query("SELECT * FROM $primarytable");

?>
