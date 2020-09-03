<!--Template Name: Medistore
File Name: cart.html
Author Name: ThemeVault
Author URI: http://www.themevault.net/
License URI: http://www.themevault.net/license/-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- <?php
        // require_once 'db_connect.php';
		// if(empty($_POST['addtocart'])){
		// 	echo "<h1> Nothing chosen! </h1>";
		// 	echo "<script> alert('Nothing chosen!');window.location.href = 'view_medicine.php'; </script>";
		// }
		// else{
		// 	$chosen = $_POST['addtocart'];
        //$_SESSION['cart']=0;
        $cart=0;
        
        ?> -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="icon" href="images/favicon.png"/>
        <title>MediKart</title>
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
                                    <li class="first " ><a href="#">Home</a></li>
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
                                                    <li><a href="#">Pounds Sterling</a></li>
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
                                            <li class="first "><a href="home.html">Home</a></li>
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
                    </div> 

                </div>
            </div>
        </div>
        <div class="container" >
            <div class="row" id="search_manu" style="margin-top: 10px">
                <div class="col-md-6 col-xs-12">
                    <form  name="quick_find">
                        <div class="form-group">
                            
                        </div>
                    </form>
                </div>
                <div class="col-md-6 col-xs-12">

                    <form  name="manufacturers"> 
                        <div class="form-group">
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="main-content">
            <div class="container cart-block-style">          
                <div class="breadcrumbs">
                    <a href="home.html"><i class="fa fa-home"></i></a>
                    <a href="#">Shopping Cart</a>
                </div>
                <div class="contentText">
                    <h1>Shopping Cart                                &nbsp;
                </div>
                <form>
                    <div class="table-responsive margin-top">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                   
                                    <td class="text-left">PRODUCT NAME</td>
                                   
                                    <td class="text-left">QUANTITY</td>
                                    <td class="text-right">UNIT PRICE</td>
                                    <td class="text-right">TOTAL</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                require_once 'db_connect.php';
                                if(empty($_POST['addtocart'])){
                                    echo "<h1> Nothing chosen! </h1>";
                                    echo "<script> alert('Nothing chosen!');window.location.href = 'view_medicine.php'; </script>";
                                }
                                else{
                                    $chosen = $_POST['addtocart'];
                                    $N = count($chosen);
                                    $total_cost = 0;
                                    for($i=0;$i<$N;$i++){
                                        
                                        $query = 'SELECT * from medicine where commercial_name = '.'"'.$chosen[$i].'"';

                                        $query_result = mysqli_query($con,$query);
                                        if(mysqli_num_rows($query_result)==0)
                                        {
                                            echo 'No Rows Returned';
                                        }
                                        else{
                                        $row = mysqli_fetch_array($query_result);
                                        echo "<tr>";
                                        echo "<td>".$row['commercial_name']."</td>";
                                       
                                        echo "<td>".$_POST['quantity'.$chosen[$i]]."</td>";
                                        echo "<td>".$row['max_retail_price']."</td>";
                                        echo "<td>".$_POST['quantity'.$chosen[$i]]*$row['max_retail_price']."</td>";
                                       
                                        $total_cost += $_POST['quantity'.$chosen[$i]]*$row['max_retail_price'];
                                        echo "</tr>";
                                        }
                                    }
                                }
                                
                                ?>
                              
                            </tbody>
                        </table>
                    </div>
                </form>
                
               
                <br>
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-8">
                        <table class="table table-bordered">
                            <tbody><tr>
                            <strong style="font-size: 30px;float: right">Pricing Details</strong>
                            <td class="text-right"><strong>Sub-Total:</strong></td>
                            <td class="text-right"><?php echo $total_cost; ?></td>
                            </tr>
                            <tr>
                                <td class="text-right">Coupon Code:</td>
                                <td class="text-right">$0</td>
                            </tr>
                            
                            <tr>
                                <td class="text-right">Eco Tax (2%):</td>
                                <td class="text-right"><?php $total_cost=$total_cost*1.02; echo $total_cost;?></td>
                            </tr>
                            <tr>
                                <td class="text-right">VAT (20%):</td>
                                <td class="text-right"><?php $total_cost=$total_cost*1.2; echo $total_cost;?></td>
                            </tr>
                            <tr>
                                <td class="text-right"><strong>Order Total:</strong></td>
                                <td class="text-right"><?php echo $total_cost; ?></td>
                            </tr>
                            </tbody></table>
                    </div>
                </div>
                <div class="buttons">
                    <div class="pull-left"><a class="btn btn-default" href="#"><i class="fa fa-caret-right"></i>&nbsp;Continue Shopping</a></div>
                    <form action = 'cart_confirm.php' method = 'POST'>
                        <?php
                         foreach($chosen as $chosen_val)
                         {
                             echo "<input type='hidden' name='data[]' value='".$chosen_val."'>";
                             echo "<input type='hidden' name='quantity".$chosen_val."' value='".$_POST['quantity'.$chosen_val]."'>";
                         }
                         echo "<input type='hidden' name='bill_amount' value='".$total_cost."'>";
                         echo "<div class=\"pull-right\"><input class=\"btn btn-primary reg_button\" type='submit' name='Confirm Booking'></div>";
                        ?>
                   
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