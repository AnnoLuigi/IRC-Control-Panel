<?php
$dbhost = 'localhost';
$dbuser = 'irc';
$dbpass = 'q1w2e3r4';

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');

$dbname = 'irc_bot';
mysql_select_db($dbname);
?>
