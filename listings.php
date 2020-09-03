<!DOCTYPE html>
<html>
<head>
<?php
session_start();
require_once 'db_connect.php';
$name=$_SESSION['username'];
//$name='varshit';

?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="icon" href="images/favicon.png"/>
        <title>MediStore</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/> 
        <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="css/owl-carousel.css"/>
        <script src="js/jquery.min.js"></script>
        <script src="js/owl-carousel.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
    background-colour:#E5E7E0;
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
thead{
    background-color : #E5E7E0;
}

</style>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-4 col-sm-4 col-xs-4" id="logo" >
                    <a href="vendors.php" class="logo-text">
                        Medi<span style="color:#39BAF0; font-size:40px"> Kart</span>
                    </a>		
                </div>
                </div>

                <div class="row">
<h2>My Listings</h2>

<table>
<thead>
  <tr>
  <th>medicine_name</th>
  <th>quantity</th>
    
    <th>created on</th>
    <th>last processed on</th>
    <th>listing price</th>
    
    <th>status </th>
   

  </tr>
  </thead>
  <tbody>
<?php
$query='SELECT * from inventory where username="'.$name.'"';
$query_result = mysqli_query($con,$query);
while ($row = mysqli_fetch_array($query_result)){
   echo "<tr class='row100 body'>";
  echo "<td>".$row['commercial_name']."</td>";
  echo "<td>".$row['quantity']."</td>";
  
  echo '<td>'. $row['date']. '</td>';
  echo "<td></td>";
  echo "<td></td>";
  echo "<td></td>";


  
  echo "</tr>";
}


?>


  </tbody>
  <tr>
    
    
  </tr>
  <tr>
    
  </tr>
  
</table>
</div>
</body>
</html>