<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="icon" href="images/favicon.png"/>
<title>MedKart</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/> 
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css"/>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-sm-4 col-xs-4" id="logo" >
			<a href="index.html" class="logo-text">
				Medi<span style="color:#39BAF0; font-size:40px">Kart</span>
			</a>		
		</div>
		<div class="col-md-2 col-sm-12 col-xs-12" style="display:none " id="navbar_hide" >
			<nav  role="navigation" class="navbar navbar-inverse">
				<a href="index.html" style="float: left" class="logo-text">
					Medi<span style="color:#39BAF0; font-size:40px">Kart</span>
				</a>
				<div id="nav">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="background: #8EBE08; border: none; margin-right: 0">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
				</div>
			</nav>
		</div>
	</div>
</div> 
<div class="container-fluid bg-color">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-xs-12">
					<nav  role="navigation" class="navbar navbar-inverse" id="nav_show">
						<div id="nav">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								
							</div>
						</div>
					</nav>
				</div>
			</div> 
			
		</div>
	</div>
</div>
</div>
<!-- This div contains any errors thrown during login/registration -->
<div id="errors" class="container">
<?php require_once('php/message.php'); ?>
</div>
<div id="site_content">
<div class="container">
	<div class="col-sm-12" id="content">            
		<div class="breadcrumbs">
			<a href="index.html"><i class="fa fa-home"></i></a>
			<a href="#">Login</a>
		</div>
		<div class="contentText">
			<h1>Welcome, Please Sign In</h1>
			<div class="row">
				<div class="col-sm-6">
						<h2>Don't have an account ?</h2>
						<h3>I am a vendor</h3>
						<p>
							By creating a vendor account at MedKart you will be able to sell your medicines to our consumers at convinient prices.
							Create an account and get startred now !
						</p>
						<a class="btn btn-primary reg_button" href="/vendor_register.php">
							<i class="fa fa-caret-right"></i>&nbsp;
							Vendor Registration
						</a>
						<h3>I am a Consumer</h3>
						<p>
							By creating a consumer account at MedKart you will have access to our high quality medicines at the best possible prices.
							Let's get started !
						</p>
						<a class="btn btn-primary reg_button" href="/register.php">
							<i class="fa fa-caret-right"></i>&nbsp;
							Consumer Registration
						</a>
						</div>
						<div style="border-left: 1px dashed #c1bebe" class="col-sm-6">
								<h2>Returning Customer</h2>
								<p>Please login to your account. If you are a vendor, please don't forget to check the box below !</p>
								<form action="php/handle_login.php" method = "POST" enctype="multipart/form-data"  role="form" class="form-horizontal add_margin">
									<div class="form-group">
										<label for="input-username" class="control-label col-sm-4">Username</label>
										<div class="col-sm-8">
											<input required type="text" class="form-control" id="input-username" placeholder="Username" value="" name="username">
										</div>
									</div>
									<div class="form-group">
										<label for="input-password" class="control-label col-sm-4">Password</label>
										<div class="col-sm-8">
											<input required type="password" class="form-control" id="input-password" placeholder="Password" value="" name="password">
										</div>
										<div class="form-check   col-sm-8">
											<input class="form-check-input" name = "isvendor" type="checkbox" value="Yes" id="vendorCheck">
											<label class="form-check-label" for="vendorCheck">
												I am a vendor
											</label>
										</div>
									</div>
									<!-- <p class="cat_name"> <a href="#">Forgot Passowrd? Click here.</a></p> -->
									<button class="btn btn-primary reg_button" name="submit" value="Login" type="submit">
										<i class="fa fa-key"></i>&nbsp;
										Login                            
									</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<a style="display: none" href="javascript:void(0);" class="scrollTop back-to-top" id="back-to-top">
		<i class="fa fa-chevron-up"></i>
	</a>
</body>
</html> 