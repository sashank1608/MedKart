<!--Template Name: Medistore
File Name: home.html
Author Name: ThemeVault
Author URI: http://www.themevault.net/
License URI: http://www.themevault.net/license/-->

<!DOCTYPE html>
<html lang="en">
    <head>
    <?php


session_start();
$email="sashank729@gmail.com";
$username=$_SESSION["username"];

require_once 'db_connect.php';
$query = 'SELECT * FROM medicine ';
	if(!($selectRes = mysqli_query($con,$query)))
	{
		echo 'retrieval of data from datbase failed -#'.mysqli_errno().':'.mysqli_error();
	}
	else{
?>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="icon" href="images/favicon.png"/>
        <title>MediKart</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/> 
        <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="css/owl-carousel.css"/>
        <script src="js/jquery.min.js"></script>
        <script src="js/owl-carousel.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
        <style>
           .wrap 
           {
               text-align:center;
           }
            </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-4" id="logo" >
                    <a href="home.html" class="logo-text">
                        Medi<span style="color:#39BAF0; font-size:40px">Kart</span>
                    </a>		
                </div>
                <div class="col-md-2 col-sm-12 col-xs-12" style="display:none " id="navbar_hide" >
                    <nav  role="navigation" class="navbar navbar-inverse">
                        <a href="home.html" style="float: left" class="logo-text">
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
                            <div class="collapse navbar-collapse" id="myNavbar">
                                <ul class="nav navbar-nav site_nav_menu1"  >
                                    <li class="first " ><a href="users_home.php">Home</a></li>
                                    <li><a href="consumer_update_info.php">My profile</a></li>
                                    
                                    <li><a href="#">Contact Us</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-md-4 col-md-offset-4 col-sm-offset-2  col-sm-6 col-xs-12" >
                    <div id="top_right">
                        <div id="cart">
                            <div class="text">
                                <div class="img">
                                   
                                </div>
                            </div> 
                        </div>
                        <div id="bottom_right">
                            <div class="row">
                                <div class="col-md-6 col-xs-6 wd_auto">
                                    <div class="left">
                                    <form action="/php/logout.php" method="POST">
                                        <div class="login">
                                            <a class="btn btn-default reg_button" href="/php/logout.php">Logout</a> 
                                           
                                        </div>	</form>		
                                    </div>
                                </div> 
                                <div class="dropdown-bn wd-33 col-md-6 remove_PL col-xs-6">
                                    <div class="row">
                                        <div class=" pl-0 col-md-6 col-xs-6">

                                            <div class="dropdown btn-group">
                                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">language
                                                    <span class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">English</a></li>
                                                    <li><a href="#">French</a></li>
                                                    <li><a href="#">German</a></li>
                                                    <li><a href="#">Dutch</a></li>
                                                    <li><a href="#">Swedish</a></li>
                                                    <li><a href="#">Danish</a></li>
                                                    <li><a href="#">Portuguese</a></li>
                                                    <li><a href="#">Finish</a></li>
                                                    <li><a href="#">German</a></li><li><a href="#">Norwegian</a></li>

                                                </ul>
                                            </div>
                                        </div>

                                        <div class="pl_0 col-md-6 col-xs-6">
                                            <div class="dropdown btn-group">
                                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">currency
                                                    <span class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">U.S. Dollar</a></li>
                                                    <li><a href="#">Euro</a></li>
                                                    <li><a href="#">Pounds Sterling</a></l>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

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
                                    <div class="collapse navbar-collapse" id="myNavbar">
                                        <ul class="nav navbar-nav site_nav_menu1"  >
                                        <li class="first " ><a href="users_home.php">Home</a></li>
                                    <li><a href="consumer_update_info.php">My profile</a></li>
                                    
                                            <li><a href="#">Contact Us</a></li>
                                            
                                        </ul>

                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div> 

                </div>
            </div>
        </div>
        <div class="container" >
            <div class="row" id="search_manu" style="margin-top: 10px">
                <div class="col-md-6 col-xs-12">
                    <form  name="quick_find">
                        <div class="form-group">
                            <div class="input-group">

                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 col-xs-12">

                    <form  name="manufacturers"> 
                        <div class="form-group">
                            <div class="">
                               

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div id="site_content">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-12 left_sidebar1">
                        <div id="left_part">
                            <div class="bs-example">
                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="infoBoxHeading">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Categories search</a>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                    <i  id="accordan_plus" class="indicator glyphicon glyphicon-chevron-down  pull-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                <form action="product.php" method="post">
                                                <div class="checkbox">
                                                <label><input type="checkbox" name="category[]" value="Fever">Fever</label>
                                                </div>
                                                <div class="checkbox">
                                                <label><input type="checkbox" name="category[]" value="Headache">Headache</label>
                                                </div>
                                                <div class="checkbox ">
                                                <label><input type="checkbox" name="category[]" value="Sore throat" >Sore throat</label>
                                                </div>
                                                <div class="checkbox ">
                                                <label><input type="checkbox" name="category[]" value="Allergy" >Allergy</label>
                                                </div>
                                                <input class="contact100-form-btn btn-primary btn-block" type="submit" value="submit">
                                                
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="infoBoxHeading">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">What's New?</a>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                    <i id="accordan_plus" class="indicator glyphicon glyphicon-chevron-up  pull-right accordan_plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="infoBoxContainer">  
                                                    <div class="infoBoxHeading">
                                                        <a href="#">What's New?</a>
                                                    </div> 
                                                    <div class="infoBoxContents" id="sidebar">
                                                        <div>
                                                            <a href="single-product.html">
                                                                
                                                            </a>
                                                        </div>
                                                        <a href="product.php"></a><br />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="infoBoxHeading">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Information</a>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                    <i id="accordan_plus" class="indicator glyphicon glyphicon-chevron-up  pull-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="infoBoxContents">    
                                                  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="infoBoxHeading">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Bestsellers</a>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                                    <i id="accordan_plus" class="indicator glyphicon glyphicon-chevron-up  pull-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapseFour" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="infoBoxContents" id="sidebar">
                                                    <a href="single-product.html">
                                                        <img src="images/img4.jpg"  class="img-responsive" />
                                                    </a>
                                                    <a href="single-product.html"></a><br /><del></del>
                                                    <span class="productSpecialPrice"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="infoBoxHeading">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">Specials</a>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                                                    <i id="accordan_plus" class="indicator glyphicon glyphicon-chevron-up  pull-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapseFive" class="panel-collapse collapse">
                                            <div class="panel-body">

                                                <div class="infoBoxContents" id="sidebar">

                                                    <a href="single-product.html">
                                                        <img src="images/img6.jpg"  class="img-responsive" />
                                                    </a>
                                                    <a href="single-product.html"></a><br /><del></del>
                                                    <span class="productSpecialPrice"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <script>
                            function toggleChevron(e) {
                                $(e.target)
                                        .prev('.panel-heading')
                                        .find("i.indicator")
                                        .toggleClass('glyphicon-chevron-down glyphicon-chevron-up');
                            }
                            $('#accordion').on('hidden.bs.collapse', toggleChevron);
                            $('#accordion').on('shown.bs.collapse', toggleChevron);
                        </script>

                    </div> 
                    <div class="col-md-9 col-sm-8 col-xs-12 right_sidebar1">
                        <div id="right_part">
                            <div class="contentContainer">
                                <div class="contentText">
                                    <div class="breadcrumbs">
                                        <a href="home.html" class="headerNavigation"><i class="fa fa-home"></i></a>			
                                    </div>
                                </div>

                                <!----slidder start-!-->
                                <div class="contentText">
                                   

                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12"  >
                                            <!--                                        <div class="bg_best">-->
                                            <div class="bg_best">
                                                

                                                <script>
                                                    $(document).ready(function () {
                                                        $('.owl-carousel').owlCarousel({
                                                            loop: true,
                                                            margin: 10,
                                                            responsiveClass: true,
                                                            responsive: {
                                                                0: {
                                                                    items: 2,
                                                                    nav: true
                                                                },
                                                                600: {
                                                                    items: 3,
                                                                    nav: false
                                                                },
                                                                1000: {
                                                                    items: 5,
                                                                    nav: true,
                                                                    loop: false,
                                                                    margin: 20
                                                                }

                                                            }
                                                        })
                                                    })
                                                </script>
                                            </div>
                                            <!--                                    </div>-->
                                        </div>
                                    </div>
                                </div>
                                <!----slidder End-!-->
                                <!----content_1--!-->
                                <div class="contentText Static">
                                    <h1>What is MediKart?</h1>
                                    <p> MediKart is an online pharmacy where one can buy medicines online and get them deliverd  </p>
                                    <p>.</p>
                                </div>
                                <!----content_1 End--!-->


                                <!----content_2 For New Products--!-->
                                <div class="contentText">
                                    <h1> Products For March</h1>
                                    <div class="row margin-top product-layout_width">
                                        <form action="cart.php" method="POST" id='viewmedicine'>
                                        <?php 
                                        if(mysqli_num_rows($selectRes)==0)
                                        {
                                            echo '<tr><td colspan="4">No Rows Returned</td></tr>';
                                        }
                                        else
                                        {
                                            while($row=mysqli_fetch_array($selectRes))
                                            {
                                                $row_quant = $row['quantity'];
                                                if($row_quant>0){

                                       echo '<div class="product-layout  col-md-4 col-sm-6 col-xs-12">
                                            <div class="product-thumb-height">
                                                <div class="product-thumb transition">
                                                    <ul>
                                                        <li class="li_product_title">
                                                            <div class="product_title">
                                                                <a href="single-product.html">'.$row['commercial_name'].'</a>
                                                            </div></li>
                                                        <li class="li_product_image">
                                                            <div class="image">
                                                                <a href="single-product.html">
                                                                    <img class="img-responsive" width="200" height="200" src="data:image/png;base64,'.base64_encode($row['image']).'"  />
                                                                </a>

                                                            </div>
                                                        </li>
                                                        <li class="li_product_price">
                                                            <span class="old_price1"></span>
                                                            <span class="new_price1">$'.$row['max_retail_price'].'</span>
                                                            <span class="saving1"></span><li>
                                                        <li class="li_product_desc">
                                                            <div class="caption">
                                                                <p>
                                                                   print side effects
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <label for="quantity">Quantity (between 1 and 5):</label>
                                                        <input type="number" id="quantity" name="quantity'.$row['commercial_name'].'" min="1" max='.$row_quant.'>
                                                        <li class="li_product_buy_button">
                                                        <label class="radio-inline">  <input type="checkbox" name="addtocart[]" value="'.$row['commercial_name'].'" >
                                                        Addtocart</label>
                                                            <div class="pull-right">
                                                                <button  type="button" class="btn btn-primary wish_button"><i class="fa fa-heart"></i></button>
                                                                <button  type="button" class="btn btn-primary wish_button"><i class="fa fa-exchange"></i></button>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>';
                                                }
                                            }

                                        }
                                    }
                                    ?>

                                       
                                        <div class="product-layout  col-md-12 col-sm-12 col-xs-12">
                                            
                                            </div>
                                </form>
                                        </div>
                                    
                                     <div class="container-contact100-form-btn">
                                     <div class="wrap">
					<button class="contact100-form-btn btn-primary btn-lg" form="viewmedicine" >
						<span>
							Place Order
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>

                                </div>
                                    </div>
                                </div>
                                <!----content_2 End--!-->

                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>



        <div id="footer1">
            <div class="container-fluid footer-background">
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2 col-sm-3 col-xs-12 txt-center">
                                <a href="home.html">
                                    <span class="logo-text">MEDIKART</span>
                                </a>
                            </div>
                            <div class="col-md-7 col-sm-6 col-xs-12">
                                <div id="footer_menu">
                                    <a href="home.html">Home</a> | 
                                    <a href="#">About Us</a> | 
                                    <a href="#">Disclaimer</a> | 
                                    <a href="#">Guarantee</a> | 
                                    <a href="#">Shipping & Payment</a> | 
                                    <a href="#">Privacy Policy</a> <br class="disable_content" />
                                    <a href="#">Terms & Conditions</a> | 
                                    <a href="#">Contact Us</a> | 
                                    <a href="#">Site Map<span></span></a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div id="social_icons" class="pull-right">
                                    <a href="#" class="btn btn-default reg_button"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="btn btn-default reg_button"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="btn btn-default reg_button"><i class="fa fa-yahoo"></i></a>
                                    <a href="#" class="btn btn-default reg_button"><i class="fa fa-envelope"></i></a>
                                    <a href="#" class="btn btn-default reg_button"><i class="fa fa-linkedin"></i></a>	
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                
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