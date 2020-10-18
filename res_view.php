<?php include('includes/connection.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta content="IE-edge" http-equiv="X-UA-Compatible"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>ReserveMe</title>
    <link href="images/logo.png" rel="shortcut icon"/>
    <!--web-icon-->
    <link href="images/hero.jpg" rel="shortcut icon"/>
    <!--stylesheet-->
    <link href="css/res_view.css" rel="stylesheet" type="text/css"/>
    <link href="css/nav.css" rel="stylesheet" type="text/css"/>
    <link href="css/footer.css" rel="stylesheet" type="text/css"/>
    <!--FontAwesome-->
    <script crossorigin="anonymous" src="https://kit.fontawesome.com/70a642cd7c.js"></script>
</head>
<body>
    <!--Start of nav-->
    <div class="topnav" id="myTopnav">
        <img class = "logo" src="images/logo.png">
        <a href="users/user-type.php">Register</a>
        <a href="includes/login.php">Login</a>
        <a href="#contact">Contact</a>
        <a href="#aboutus">About</a>
        <a href="javascript:void(0);" class="icon" onclick="onClickNav()">
            <i class="fa fa-bars"></i>
        </a>       
    </div>
    <!--End of nav-->

	<!--Start of main-section-->
    <?php 
        if(isset($_GET['res_id'])){
            $sql = "SELECT * FROM restaurant WHERE res_id = ".$_GET['res_id'];
            $resultProduct = mysqli_query($connection,$sql);
            while($rowProduct  = mysqli_fetch_assoc($resultProduct)){  
                echo"<section class=\"main\">
                        <div class=\"m-img\">       
                            <img class=\"food-img\" src= \"images/{$rowProduct['res_id']}.jpg\">
                        </div>
                        <div class=\"m-text\">
                            <h2>". $rowProduct['res_name'] ."</h2>
                            <br>
                            <h4><i class=\"fas fa-star-half-alt\">". $rowProduct['res_rate'] ."</i></h4>
                            <br>
                            <h4><i class=\"fas fa-map-marker-alt\">". $rowProduct['city'] ."</i></h4>
                            <button class=\"reserve-button pulsate\" type=\"submit\" name=\"submit\">Reserve</button>
	                    </div>	
	                </section>";
            }
        }
    ?>
    <!--End of main-section-->

	<!--Start of product-container-->
    <section class="ccontent">
	    <div class="content-container">	
	        <div class="select">
		        <ul class="select-menu">
			        <li><a href="menu_view.php" target="iframe">Menu</a></li>
			        <li><a href="floorplan_view.php" target="iframe">Seeting</a></li>
			        <li><a href="direction.php" target="iframe">Directions</a></li>
			        <li><a href="review.php" target="iframe">Reviews</a></li>
		        </ul>
	        </div>
	    </div>	
        <div>
            <iframe src="index.php.html" style="border: none;" height="300px" name = "iframe" scrolling="no" class="iframe">
                <p>hiiiii</p>
            </iframe>
        </div>
	</section>
	<!--End of product-container-->
		
	<!--Include footer.php-->
    <div><?php include "includes/footer.php" ?></div>
    
    <!--script for onClickNav() for the navigation menu-->
    <script src="./js/onClickNav.js"></script>
</body>
</html>
