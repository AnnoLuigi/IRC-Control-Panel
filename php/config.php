<?php

// SQL Credentials
$dbhost = 'localhost';
$dbuser = 'irc';
$dbpass = 'q1w2e3r4';
$dbname = 'irc_bot';
$primarytable = "server_info";

// Create server connection
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error connecting to mysql');

//Select database
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error connecting to mysql');

mysql_select_db($dbname);

// Initial data population
$data = mysql_query("SELECT * FROM $primarytable");

?>
