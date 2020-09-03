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
    background-color : #FBFBFB;
}
.customdiv{
margin:10px;
min-height:100px;
background-color:white;
text-align:center;
font-size:large;
padding:10px;

}
body
{
  background-color:#F5F5F5;
}
</style>
</head>
<body>
<div class="container" >
<div class="row">

                    <a href="#" class="logo-text">
                        Medi<span style="color:#39BAF0; font-size:40px"> Kart</span>
                    </a>		
                </div>
              
                <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12" >
                <div class="col-md-4 col-sm-4 col-xs-4" >
                <div class="customdiv">
                <div class="panel-primary">
                <div class="panel-heading">
                <h3 class="panel-title"> ALL INVENTORY</h3>

                </div>
                <div class="panel-body"> 6 SKU'S </div>
                </div>
                </div>

                </div>
                <div class="col-md-4 col-sm-4 col-xs-4" >
                <div class="customdiv">
                <div class="panel-primary">
                <div class="panel-heading">
                <h3 class="panel-title"> LOW STOCK </h3>

                </div>
                <div class="panel-body"> 2 SKU'S </div>
                </div>
                </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4"  >
                <div class="customdiv">
                <div class="panel-primary">
                <div class="panel-heading">
                <h3 class="panel-title"> OUT OF STOCK </h3>

                </div>
                <div class="panel-body"> 0 SKU'S </div>
                </div>
                </div>
                </div>
                  
                 



                </div>
                </div>
<h2>ALL INVENTORY</h2>

<table class="table table-striped table-bordered table-hover">
<thead>
  <tr>
    <th>product information</th>
    <th>current stock</th>
    <th>date of supply</th>
   
  </tr>
  </thead>
  <?php
  $k=date('d/m/Y');
$query='SELECT * from inventory where username="'.$name.'"';
$query_result = mysqli_query($con,$query);
while ($row = mysqli_fetch_array($query_result)){
   echo "<tr class='row100 body'>";
  echo "<td>".$row['commercial_name']."</td>";
  echo "<td>".$row['quantity']."</td>";
  
  echo '<td>'. $row['date'].'</td>';
 


  
  echo "</tr>";
}


?>
 
  
</table>
<h2>LOW STOCK</h2>

<table class="table table-striped table-bordered table-hover">
<thead>
  <tr>
    <th>product information</th>
    <th>current stock</th>
    
    <th>date of supply</th>
  </tr>
  </thead>
  <?php

$query='SELECT * from inventory where username="'.$name.'" group by commercial_name';
$query_result = mysqli_query($con,$query);
while ($row = mysqli_fetch_array($query_result)){
  if($row['quantity']<15)
  {
   echo "<tr class='row100 body'>";
  echo "<td>".$row['commercial_name']."</td>";
  echo "<td>".$row['quantity']."</td>";
  
  echo '<td>'. $row['date'].'</td>';
 


  
  echo "</tr>";
  }
}


?>
</table>

<h2>OUT OF STOCK</h2>

<table class="table table-striped table-bordered table-hover">
<thead>
  <tr>
    <th>product information</th>
    <th>average daily sales</th>
  
  </tr>
  </thead>
  <tr>
   
  </tr>
  <tr>
    
  </tr>
  
</table>
</div>

</body>
</html>
