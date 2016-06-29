<?php
include 'config.php';

    $row = mysql_fetch_array($data);
    $id = $row['id'];

    mysql_query("DELETE FROM $primarytable WHERE id = '$id'")
    or die(mysql_error());

    if (!isset($_GET['id'])) {
        echo 'No ID was given...';
        exit;
    }

    header( "refresh:0;url=../index.php" );

    ?>
