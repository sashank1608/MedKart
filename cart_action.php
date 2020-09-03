<?php
		require_once 'db_connect.php';
		if(empty($_POST['addtocart'])){
			echo "<h1> Nothing chosen! </h1>";
			echo "<script> alert('Nothing chosen!');window.location.href = 'view_medicine.php'; </script>";
		}
		else{
			$chosen = $_POST['addtocart'];
			echo "<table border='2'>";
			echo "<tr>";
			echo "<th> ID </th>";
			echo "<th> Name </th>";
			echo "<th> Quantity chosen </th>";
			echo "<th> Cost </th>";
			echo "</tr>";
			$N = count($chosen);
			$total_cost = 0;
			for($i=0;$i<$N;$i++){
				$query = "SELECT medicine_id,name,cost from medicine where medicine_id = ".$chosen[$i];
				$query_result = mysqli_query($con,$query);
				$row = mysqli_fetch_array($query_result);
				echo "<tr>";
				echo "<td>".$row['medicine_id']."</td>";
				echo "<td>".$row['name']."</td>";
				echo "<td>".$_POST['quantity'.$chosen[$i]]."</td>";
				echo "<td>".$_POST['orderquantity'.$chosen[$i]]*$row['cost']."</td>";
				$total_cost += $_POST['orderquantity'.$chosen[$i]]*$row['cost'];
				echo "</tr>";
			}
			echo "</table>";
			echo "<p> total bill amount = ".$total_cost."<p>";
			echo "<form action = 'confirm_booking_backend.php' method = 'POST'>";
			foreach($chosen as $chosen_val)
			{
				echo "<input type='hidden' name='data[]' value='".$chosen_val."'>";
				echo "<input type='hidden' name='orderquantity".$chosen_val."' value='".$_POST['orderquantity'.$chosen_val]."'>";
			}
			echo "<input type='hidden' name='bill_amount' value='".$total_cost."'>";
			echo "<input type='submit' name='Confirm Booking'>";
		}
	?>