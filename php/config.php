<?php
$dbhost = '';
$dbuser = '';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error connecting to mysql');
$dbname = '';
mysql_select_db($dbname);
$data = mysql_query("SELECT * FROM server_info");
?>
