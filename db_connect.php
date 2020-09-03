<?php
  $host = 'localhost:3307';
  $user = 'root';
  $dbpass = '';
  $dbname = "medkart";
  $con = mysqli_connect($host,$user,$dbpass,$dbname);
  if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
