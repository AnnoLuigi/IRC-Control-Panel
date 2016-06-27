<?php
include 'config.php';
if (!isset($_GET['id'])) {
    echo 'No ID was given...';
    exit;
}
$con = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($con->connect_error) {
    die('Connect Error (' . $con->connect_errno . ') ' . $con->connect_error);
}
$sql = "DELETE FROM server_info WHERE id = ?";
if (!$result = $con->prepare($sql)) {
    die('Query failed: (' . $con->errno . ') ' . $con->error);
}
if (!$result->bind_param('i', $_GET['id'])) {
    die('Binding parameters failed: (' . $result->errno . ') ' . $result->error);
}
if (!$result->execute()) {
    die('Execute failed: (' . $result->errno . ') ' . $result->error);
}
if ($result->affected_rows > 0) {
    echo "The ID was deleted with success.";
    echo "Redirecting..";
    header( "refresh:0;url=../index.php" );
} else {
    echo "Couldn't delete the ID.";
}
$result->close();
$con->close();
