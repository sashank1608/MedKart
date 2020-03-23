<!--
    This file contains the php code for database connection.
    It provides the conn object that can be used in the file
    while imports this file. DO NOT USE ANY OTHER DATABASE CONNECTION
    OTHER THAN THIS CONNECTION.
-->
<?php
$db_server = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "medkart";

$conn = new mysqli($db_server, $db_user, $db_password, $db_name);

if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

?>