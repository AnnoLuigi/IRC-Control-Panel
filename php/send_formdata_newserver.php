<?php
if (isset($_REQUEST['submit'])) {
    include 'config.php';

    $errorMessage = "";
    $server_name  = $_POST['server_name'];
    $server_ip    = $_POST['server_ip'];
    $port         = $_POST['port'];
    $use_ssl = $_POST['use_ssl'];
    $nick         = $_POST['nick'];
    $secondary    = $_POST['secondary'];
    $pass         = $_POST['pass'];

    // Validation will be added here

    if ($errorMessage != "") {
        echo "<p class='message'>" . $errorMessage . "</p>";
    } else {
        //Inserting record in table using INSERT query
        $insqDbtb = "INSERT INTO `irc_bot`.`server_info`
    (`server_name`, `server_ip`, `port`, `use_ssl`, `nick`,
      `secondary`, `pass`) VALUES ('$server_name', '$server_ip',
        '$port', '$use_ssl', '$nick', '$secondary', '$pass')";
        mysql_query($insqDbtb);
    }
}
header( "refresh:0;url=../index.php" );
?>
