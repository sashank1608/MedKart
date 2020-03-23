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
                        Med<span style="color:#39BAF0; font-size:40px">Kart</span>
                    </a>		
                </div>
                <div class="col-md-2 col-sm-12 col-xs-12" style="display:none " id="navbar_hide" >
                    <nav  role="navigation" class="navbar navbar-inverse">
                        <a href="index.html" style="float: left" class="logo-text">
                            Med<span style="color:#39BAF0; font-size:40px">Kart</span>
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
        
        <!-- This div contains any errors thrown during login/registration -->
        <div id="errors" class="container">
        <?php require_once('php/message.php'); ?>
        </div> 
        <div id="site_content">
            <div class="container" style="display: flex; justify-content: center;">
                    <div class="col-sm-8" id="content"> 
                        <div class="breadcrumbs">
                            <a href="index.html"><i class="fa fa-home"></i></a>
                            <a href="#">Consumer Registration</a>
                        </div>
                        <h1>Your Account Information</h1>
                        <p> <small><strong class="define_note"></strong></small>If you already have an account with us, please login at the 
                            <a href="login.html"><b>Login Page</b></a>.</p>
                        <form class="form-horizontal" method="POST" action="php/handle_register.php">
                            <div class="contentText">  
                                <fieldset id="account">
                                    <h1>Personal Details</h1>
                                    <div class="form-group required">
                                        <label for="input-username" class="col-sm-2 control-label">UserName *</label>
                                        <div class="col-sm-10">
                                            <input type="text" required class="form-control" id="input-firstname" placeholder="UserName" value=""
                                                name="username">
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-firstname" class="col-sm-2 control-label">First Name *</label>
                                        <div class="col-sm-10">
                                            <input type="text" required class="form-control" id="input-firstname" placeholder="First Name" value="" name="firstname">
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-lastname" class="col-sm-2 control-label">Last Name *</label>
                                        <div class="col-sm-10">
                                            <input type="text" required class="form-control" id="input-lastname" placeholder="Last Name" value="" name="lastname">
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-email" class="col-sm-2 control-label">E-Mail *</label>
                                        <div class="col-sm-10">
                                            <input type="email" required class="form-control" id="input-email" placeholder="E-Mail" value="" name="email">
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-telephone" class="col-sm-3 control-label">Phone Number *</label>
                                        <div class="col-sm-9">
                                            <input type="number" required class="form-control" id="input-telephone" placeholder="Phone Number" value="" name="telephone">
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-address" class="col-sm-2 control-label">Address *</label>
                                        <div class="col-sm-10">
                                            <input type="text" required class="form-control" id="input-address" placeholder="Address" value="" name="address">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <h1>Password</h1>
                                    <div class="form-group required">
                                        <label for="input-password" class="col-sm-2 control-label">Password *</label>
                                        <div class="col-sm-10">
                                            <input type="password" required class="form-control" id="input-password" placeholder="Password" value="" name="password">
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-confirm" class="col-sm-3 control-label">Confirm Password *</label>
                                        <div class="col-sm-9">
                                            <input type="password" required class="form-control" id="input-confirm" placeholder="Confirm Password" value="" name="confirm">
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="buttons" style="text-align: center;">
                                        &nbsp;
                                        <input type="submit" name="submit"  value="submit" class="btn btn-primary reg_button" >
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <a style="display: none" href="javascript:void(0);" class="scrollTop back-to-top" id="back-to-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </body>
</html> 