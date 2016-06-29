<?php
include 'config.php';

    $row = mysql_fetch_array($data);
    $id = $row['id'];

    if (!isset($_GET['id'])) {
        echo 'No ID was given...';
        exit;
    }

    mysql_query("UPDATE $primarytable SET $row['server_name'], $row['server_ip'], $row['port'], $row['ssl'], $row['secondary'], $row['server_name'], $row['pass'] WHERE id = '$id'")
    or die(mysql_error());

    header( "refresh:0;url=../index.php" );

    ?>
