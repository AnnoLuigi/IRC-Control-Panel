<?php
$link = mysqli_connect("localhost","irc","q1w2e3r4")  or die("failed to connect to server !!");
mysqli_select_db($link,"irc_bot");
if(isset($_REQUEST['submit']))
{

$errorMessage = "";
$server_name=$_POST['server_name'];
$server_ip=$_POST['server_ip'];
$port=$_POST['port'];
$use_ssl=$_POST['use_ssl'];
$nick=$_POST['nick'];
$secondary=$_POST['secondary'];
$pass=$_POST['pass'];

// Validation will be added here

if ($errorMessage != "" ) {
echo "<p class='message'>" .$errorMessage. "</p>" ;
}
else{
//Inserting record in table using INSERT query
$insqDbtb="INSERT INTO `irc_bot`.`server_info`
(`server_name`, `server_ip`, `port`, `use_ssl`, `nick`,
`secondary`, `pass`) VALUES ('$server_name', '$server_ip',
'$port', '$use_ssl', '$nick', '$secondary', '$pass')";
mysqli_query($link,$insqDbtb) or die(mysqli_error($link));
}
}
?>
