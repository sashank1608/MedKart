<!--Template Name: Medistore
File Name: single-product.html
Author Name: ThemeVault
Author URI: http://www.themevault.net/
License URI: http://www.themevault.net/license/-->

<!DOCTYPE html>
<html lang="en">
    <head>
    <?php
$cart=5;
$email="sashank729@gmail.com";
$username="sashank";

require_once 'db_connect.php';
		if(empty($_POST['category'])){
			echo "<h1> Nothing chosen! </h1>";
			echo "<script> alert('Nothing chosen!');window.location.href = 'users_home.php'; </script>";
        }
        else
        {
?>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="icon" href="images/favicon.png"/>
        <title>MediStore</title>
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
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Guarantee</a></li>
                                    <li><a href="#">Disclaimer</a></li>
                                    <li><a href="#">Shipping & Payment</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Site Map</a></li>
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
                                        <div class="login">
                                            <a class="btn btn-default reg_button" href="/php.logout.php">Logout</a> 
                                            
                                        </div>			
                                    </div>
                                </div> 
                                <div class="dropdown-bn wd-33 col-md-6 remove_PL col-xs-6">
                                    <div class="row">
                                        <div class="pl-0 col-md-6 col-xs-6">

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
                                            <li class="first "><a href="users_home.php">Home</a></li>
                                            
                                            <li><a href="#">Contact Us</a></li>
                                            <li><a href="#">Site Map</a></li>
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
           
                           <div class="container">
                                  <div class="contentText">
                                    <h1> category search results</h1>
                                    <div class="row margin-top product-layout_width">
                                        <form action="cart.php" method="POST" id='viewmedicine'>
                                        <?php 
                                     
                                           
                                        $chosen = $_POST['category'];
                                        $N = count($chosen);
                                        for($i=0;$i<$N;$i++){
                                            $query = 'SELECT * from symptoms natural inner join medicine where symptom = "'.$chosen[$i].'"';
                                            
                                            $query_result = mysqli_query($con,$query);
                                          while(  $row = mysqli_fetch_array($query_result)){
                                           

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
                                                        <input type="number" id="quantity" name="quantity'.$row['commercial_name'].'" min="1" max="25">
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
                                    </div>
                                <!----content_2 End--!-->




        <div id="footer1">
            <div class="container-fluid footer-background">
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2 col-sm-3 col-xs-12 txt-center">
                                <a href="home.html">
                                    <span class="logo-text">DRUGSTORE</span>
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
                                <div class="copyright">
                                    <!--Do not remove Backlink from footer of the template. To remove it you can purchase the Backlink !-->
                                    © 2017 All right reserved. Designed by
                                    <a href="http://www.themevault.net/" target="_blank">ThemeVault.</a>
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
        <script>
            $("document").ready(function () {

                $(".galleryimg").on("click", function () {
                    var src = $(this).attr('src');
                    console.log(src)
                    $(".changeimg").attr('src', src);
                });
            });
        </script>
    </body>
</html> 