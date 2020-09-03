
<!--Template Name: Medistore
File Name: home.html
Author Name: ThemeVault
Author URI: http://www.themevault.net/
License URI: http://www.themevault.net/license/-->
<?php
$cart=5;
$email="sashank729@gmail.com";
session_start();
//echo $_SESSION["username"];
$username= $_SESSION["username"];


require_once 'db_connect.php';
$query = 'SELECT image FROM medicine where commercial_name in (select distinct commercial_name from purchase  where date=curdate());';
	if(!($selectRes = mysqli_query($con,$query)))
	{
		echo 'retrieval of data from datbase failed -#'.mysqli_errno().':'.mysqli_error();
	}
	else{
?>

<!DOCTYPE html>
<html lang="en">
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
.zing{

    border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

</style>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="icon" href="images/favicon.png"/>
        <title>MediStore</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/> 
        <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="css/owl-carousel.css"/>
        <script src="js/jquery.min.js"></script>
        <script src="js/owl-carousel.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-4" id="logo" >
                    <a href="home.html" class="logo-text">
                        Medi<span style="color:#39BAF0; font-size:40px"> Kart</span>
                    </a>		
                </div>
                <div class="col-md-2 col-sm-12 col-xs-12" style="display:none " id="navbar_hide" >
                    <nav  role="navigation" class="navbar navbar-inverse">
                        <a href="home.html" style="float: left" class="logo-text">
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
                            <div class="collapse navbar-collapse" id="myNavbar">
                                <ul class="nav navbar-nav site_nav_menu1"  >
                                    <li class="first " >
                                    <li><a href="#">welcome</a></li>
                                    <li><a href="inventory.php">Inventory</a></li>
                                    <li><a href="orders.php">Orders</a></li>
                                    <li><a href="#">Payments</a></li>
                                    <li><a href="listings.php">Listings</a></li>
                                    <li><a href="growth.php">Growth</a></li>
                                    
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
                                            <li class="first ">
                                            <li><a href="#">welcome</a></li>
                                            <li><a href="inventory.php">Inventory</a></li>
                                    <li><a href="orders.php">Orders</a></li>
                                    <li><a href="#">Payments</a></li>
                                    <li><a href="listings.php">Listings</a></li>
                                    <li><a href="growth.php">Growth</a></li>
                                        </ul>

                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div> 

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
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">MyInfo</a>
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                    <i  id="accordan_plus" class="indicator glyphicon glyphicon-chevron-down  pull-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                <div class="infoBoxContents">
                                                    <a href="#">username: <?php echo "<b>".$username."</b>";?></a>&nbsp;<br />
                                                    <a href="#">email: <?php echo $email; ?></a>&nbsp;<br />
                                                    
                                                    <a href="#bank">Bank details</a>&nbsp;<br />
                                                    <a href="#store">Store details</a>&nbsp;<br />
                                                    <a href="#signature">Signature</a>&nbsp;<br />
                                                   
                                                    <a href="#list">list your products</a>
                                                </div>
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
                                                   
                                                </div>
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
                                    <div class="infoBoxHeading">Today Bestsellers</div>

                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12"  >
                                            <!--                                        <div class="bg_best">-->
                                            <div class="bg_best">
                                                <div class="owl-carousel">
                                                   <?php
                                                         if(mysqli_num_rows($selectRes)==0)
                                                         {
                                                             echo '<tr><td colspan="4">No Rows Returned</td></tr>';
                                                         }
                                                         else
                                                         {
                                                             while($row=mysqli_fetch_array($selectRes))
                                                             {
                                                                //  echo"<tr>
                                                                //  <td>{$row['order_id']}</td>
                                                                //  <td>{$row['order_date']}</td>
                                                                //  <td>{$row['a_name']}</td>
                                                                //  <td>{$row['bill']}</td>
                                                                //  </tr>\n";
                                                                echo '<div class="item">
                                                                <span><a href="#"><img class="carasoul_image" src="data:image/png;base64,'.base64_encode($row['image']).'">
                                                                </a></span></div>';
                                     
                                                             }
                                                         }
                                                        }

                                                    ?>
                                                  

                                                    
                                                   
                                                    <!--                                                    <div class="item">
                                                                                                            <span>
                                                                                                                <a href="single-product.html">
                                                                                                                    <img class="carasoul_image" src="images/d25.jpg">
                                                                                                                </a></span>
                                                                                                            <a class="btn btn-default"  href="cart.html" role="button" >
                                                                                                                Buy Now!
                                                                                                            </a>
                                                                                                        </div>-->
                                                    <div class="item">
                                                        <span>
                                                            <a href="single-product.html">
                                                            
                                                            </a></span>
                                                        
                                                    </div>
                                                   

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
                                <div class="zing" id="bank">
                                <h1>bank details</h1>
                                <form action="/action_page.php">
                               
                                <input type="text" id="fname" name="accountname" placeholder="enter account holder name"><br><br>
                                
                                <input type="text" id="lname" name="accountnumber" placeholder="enter bank account number"><br><br>
                                <input type="text" id="lname" name="IFSC" placeholder="enter IFSC number"><br><br>
                                <input type="submit" value="Save">
                                </form>
                                </div>
                                <!----content_1 End--!-->
                                <br><br><br>
                                <div class="zing" id="store">
                                   
                                <h1>store details</h1>
                                <form action="/action_page.php">
                               
                                <input type="text" id="fname" name="storename" placeholder="enter store name"><br><br>
                                <div class="form-group">
                                <label for="store_description">  store description</label>
                                <textarea class="form-control" rows=5 type="text1" id="store_description" name="storedescription" placeholder="enter store description"></textarea><br><br>
                                </div>
                                <input type="submit" value="Save">
                                </form>
                                </div>
                                <br><br><br>
                                <div class="zing" id="signature">
                                    <h1>Signature</h1>
                                <form action="upload.php" method="post" enctype="multipart/form-data">
                             Select image to upload:
                             <input class="form-control" type="file" name="fileToUpload" id="fileToUpload">
                             <input type="submit" value="Upload Image" name="submit">
                                </form>
                                                </div>
                                <!----content_1 End--!-->
                                <br><br><br>
                                
                                <div class="form-group zing"  id="list">
                                    <h1>List your products</h1>
                                <form action="inventory_add.php" method="POST" enctype="multipart/form-data">
                             <input class="form-control" placeholder="enter company name" name="brand" type="text">
                             <input class="form-control" placeholder="enter commercial name" name="commercial_name" type="text">
                             <input class="form-control" placeholder="enter quantity" name="quantity" type="number">
                             <input class="form-control" placeholder="enter listing price" name="price" type="text">
                             <label for="ex">Enter expiry date:</label>
                             <input type="date" name="expiry" id="ex" placeholder="enter expiry date">

                             <input type="submit" value="list my product" name="submit">
                                </form>
                                                </div>
                                <!----content_2 For New Products--!-->
                                
        
        <a style="display: none" href="javascript:void(0);" class="scrollTop back-to-top" id="back-to-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </body>
</html> 