<!DOCTYPE html>
<html>
<head>
	<title>Update Info</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util_form.css">
	<link rel="stylesheet" type="text/css" href="css/main_form.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
	<link rel="stylesheet" type="text/css" href="css/util_table.css">
	<link rel="stylesheet" type="text/css" href="css/main_table.css">
</head>
<body>
<center>
	<?php
	session_start();
	require_once 'db_connect.php';
    //$username = $_SESSION['username'];
    $username=$_SESSION["username"];
	$query = 'SELECT firstname, address FROM consumers WHERE username = "'.$username.'"';
	$query_result = mysqli_query($con,$query);
	$row = mysqli_fetch_array($query_result);
	?>
	<div class="container-contact100">
		<div class="wrap-login100"  style="width: 100%">
			<span class="contact100-form-title" style="text-align: center;">
				Update Information
			</span>
	<form action= "customer_info.php" method="POST">
	<!-- echo 'Name: <input type="text" name="name" value = "'.$row['name'].'"><br>'; -->
	<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
		<!-- <span class="label-input100">Medicine ID</span> -->
		<?php
		echo '<input class="input100" type="text" name="name" placeholder="Enter Name" required="true" value="'.$row['firstname'].'">';
		?>
		<span class="focus-input100"></span>
	</div>
	<!-- echo 'Enter new password: <input type="password" name="password"><br>'; -->
	<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="password is required">
		<!-- <span class="label-input100">Medicine ID</span> -->
		<input class="input100" type="password" name="password" placeholder="Enter Password">
		<span class="focus-input100"></span>
	</div>
	<!-- echo 'Confirm password: <input type="password" name="password1"><br>'; -->
	<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Confirm password is required">
		<!-- <span class="label-input100">Medicine ID</span> -->
		<input class="input100" type="password" name="password1" placeholder="Confirm Password">
		<span class="focus-input100"></span>
	</div>
	<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Address is required">
		<!-- <span class="label-input100">Medicine ID</span> -->
		<?php
		echo '<input class="input100" type="text" name="address" placeholder="Enter Address" required="true" value="'.$row['address'].'">';
		?>
		<span class="focus-input100"></span>
	</div>
	<!-- echo 'Address: <input type="text" name="address" value = "'.$row['address'].'"><br>'; -->
	<!-- echo '<button type="submit">Edit</button>'; -->
	<div class="container-contact100-form-btn">
		<button class="contact100-form-btn" style="margin-left: 45%">
			<span>
				Update
				<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
			</span>
		</button>
	</div>
	<br>
	<br>
<div class="container-contact100-form-btn">
</form>
<button style="font-size: 15px ;margin-left: 45%"" class="contact100-form-btn" onclick = "location.href='user_home.php'" type="button" name="Back">Back to home</button>
</div>
</div>
</div>
</center>
</body>
</html>
