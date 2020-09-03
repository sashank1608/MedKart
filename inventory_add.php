<?php
session_start();
require_once 'db_connect.php';
//$name=$_SESSION['username'];
$name='varshit';
$medname=$_POST['commercial_name'];
$quant=$_POST['quantity'];
$d=date('d/m/Y');
$expiry=$_POST['expiry'];
$sql_trigg = "CREATE  TRIGGER trigg2 AFTER INSERT ON inventory FOR EACH ROW begin update medicine set medicine.quantity=medicine.quantity+NEW.quantity where medicine.commercial_name=NEW.commercial_name;  end";

	mysqli_query($con,$sql_trigg);
$sql=
"INSERT INTO inventory (username, commercial_name,  quantity,inventory_id,date,expiry_date) VALUES ( '$name', '$medname', '$quant',NULL,'$d','$expiry');";
$query_result = mysqli_query($con,$sql);
$trigger="CREATE TRIGGER trigg AFTER DELETE ON inventory FOR EACH ROW BEGIN update medicine set medicine.quantity=medicine.quantity-OLD.quantity where medicine.commercial_name=OLD.commercial_name; end";
mysqli_query($con,$trigger);
$query="SELECT * from inventory where expiry_date < curdate()";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($result)){
    $row_id=$row['inventory_id'];
    
$del_query="DELETE from inventory WHERE inventory_id = '$row_id'";
mysqli_query($con,$del_query);
}




header("Location: /listings.php");
?>