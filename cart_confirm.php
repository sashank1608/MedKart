<?php
	function getAddress() {
	    $protocol = $_SERVER['HTTPS'] == 'on' ? 'https' : 'http';
	    return $protocol.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	}

	session_start();
	require_once 'db_connect.php';
	$chosen = $_POST['data'];
	$total_cost = $_POST['bill_amount'];
    //$username = $_SESSION['username'];
    $username="sashank729";
	$N = count($chosen);
	$order_id_query = 'SELECT max(order_id) as max_order_id from purchase';
	$order_id_res = mysqli_query($con,$order_id_query);
	$num_rows = mysqli_num_rows($order_id_res);
	$order_id = 0;
	$discount=0;
	if($num_rows == 0)
	{	
		$order_id = 1;
	}
	else
	{
		$row = mysqli_fetch_array($order_id_res);
		$order_id = $row['max_order_id']+1;
	}
	//$agent_id_query = 'SELECT agent_id, delivery_count FROM ( SELECT delivery_agent.agent_id, COUNT(orders.order_id) AS delivery_count FROM delivery_agent LEFT JOIN orders ON delivery_agent.agent_id = orders.agent_id GROUP BY agent_id ) AS agent_order_count ORDER BY delivery_count LIMIT 1';
	// $result = mysqli_query($con,$agent_id_query);
	// printf(mysqli_error($con));
	// if(mysqli_num_rows($result)==0){
	// 	// printf(mysqli_error($con));
	// 	echo "<script type='text/javascript'>";
	// 	echo "alert('Currently not taking orders!'); ";
	// 	echo "window.location.href = 'view_medicine.php';";
	// 	echo "</script>";
	// }
	// // echo "here";
	// else
	{
	//$row = mysqli_fetch_array($result);
	//$agent_id = $row['agent_id'];
	$curr_date = date('d/m/y',time());
	// $insert_query = "INSERT INTO purchase VALUES ('$order_id','$username',,'$curr_date','$total_cost')";
	// mysqli_query($con,$insert_query);
	// printf(mysqli_error($con));
	$sql_trigg = "CREATE  TRIGGER quant_trigg AFTER UPDATE ON inventory FOR EACH ROW begin update medicine set medicine.quantity=medicine.quantity+NEW.quantity-OLD.quantity where medicine.commercial_name=OLD.commercial_name; end";

	mysqli_query($con,$sql_trigg);
	
	foreach($chosen as $chosen_val)
	{
		$med_quant = $_POST['quantity'.$chosen_val];
		$d=date('Y-m-d');
		$insert_query = "INSERT INTO purchase VALUES('$order_id','$username','$chosen_val','$discount','$d','$med_quant')";
		mysqli_query($con,$insert_query);
		printf(mysqli_error($con));
		$done = 0;
		$inv_query = 'SELECT commercial_name,quantity,inventory_id FROM inventory WHERE commercial_name = "'.$chosen_val.'" ';
		$result = mysqli_query($con,$inv_query);
		while($row = mysqli_fetch_array($result)){
			$row_id = $row['inventory_id'];
			if($row['quantity'] > $med_quant){
				$update_query =  "UPDATE inventory SET quantity = quantity - '$med_quant' WHERE inventory_id = '$row_id'";
				mysqli_query($con,$update_query);
				
				break;
			}
			else if($row['quantity'] == $med_quant){
				$delete_query = "DELETE FROM inventory WHERE inventory_id = $row_id";
				mysqli_query($con,$delete_query);
				break;
			}
			else{
				$med_quant = $med_quant - $row['quantity'];
				$delete_query =  "DELETE FROM inventory WHERE inventory_id = $row_id";
				mysqli_query($con,$delete_query);
			}
		}
	}
	echo "<script type='text/javascript'>";
	echo "alert('Order placed!'); ";
	echo "window.location.href = 'users_home.php';";
	echo "</script>";
}
	
?>	