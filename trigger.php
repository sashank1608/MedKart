<?php
require_once 'db_connect.php';

$sql_trigg = "DELIMITER $$ 
	CREATE TRIGGER quantityTrigger AFTER UPDATE ON inventory
	for each row
	begin
	update medicine
	set medicine.quantity=medicine.quantity+NEW.quantity-OLD.quantity 
	where medicine.commercial_name=orow.commercial_name;
	end$$
	DELIMITER ;";

   $zing= mysqli_query($con,$sql_trigg);
   echo $zing;
    $update_query =  "UPDATE inventory SET quantity = 30 WHERE inventory_id = aspirin";
				mysqli_query($con,$update_query);



?>