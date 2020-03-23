<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="images/favicon.png" />
    <title>MedKart</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/owl-carousel.css" />
    <script src="js/jquery.min.js"></script>
    <script src="js/owl-carousel.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-4" id="logo">
                <a href="index.html" class="logo-text">
                    Med<span style="color:#39BAF0; font-size:40px">Kart</span>
                </a>
            </div>
            <div class="col-md-2 col-sm-12 col-xs-12" style="display:none " id="navbar_hide">
                <nav role="navigation" class="navbar navbar-inverse">
                    <a href="index.html" style="float: left" class="logo-text">
                        Med<span style="color:#39BAF0; font-size:40px">Kart</span>
                    </a>
                    <div id="nav">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"
                                style="background: #8EBE08; border: none; margin-right: 0">
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
    <div class="container-fluid bg-color">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <nav role="navigation" class="navbar navbar-inverse" id="nav_show">
                            <div id="nav">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                                        data-target="#myNavbar">
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
    <div id="errors" class="container">
        <?php require_once('php/message.php'); ?>
        </div>
    <div class="container">
        <div class="jumbotron">
            <h1>User Home page - By Harsh Pritam (Yet to be implemented)</h1>
        </div>
    </div>
    <a style="display: none" href="javascript:void(0);" class="scrollTop back-to-top" id="back-to-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</body>

</html>