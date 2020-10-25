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
            $mainsql = "SELECT * FROM restaurant WHERE res_id = ".$_GET['res_id'];
            $resultProduct = mysqli_query($connection,$mainsql);
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
                            <button class=\"reserve-button pulsate\" onclick=\"onClickOpenForm()\" type=\"submit\" name=\"submit\">Reserve</button>
	                    </div>	
	                </section>";
            }
        }
    ?>
    <!--End of main-section-->

    <!--Start of pop up login page-->
    <div class="form-popup" id="myForm">
        <form action="login_submit.php" method="post" class="form-container">
            <h1>Login</h1>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>
            <div class="pass">
                <a href="#">Forgot Password?</a>
            </div>
            <button type="submit" class="btn">Login</button>
            <button type="button" class="btn cancel" onclick="onClickCloseForm()">Close</button>
            <div class="signup">Don't have account?
                <a href="#">Signup Now</a>
            </div>
        </form>
    </div>

    <script src="./js/onClickOpenForm.js"></script>
    <!--End of pop up login page-->

    <!--Start of Menu content-->
    <section class="content">
        <div class="p-heading">
		    <h3>Menu</h3>
	    </div>
        <section id="gallery">    
            <div id="gallery-center">
                <?php 
                    if(isset($_GET['res_id'])){
                        $retriewMenu = "SELECT * FROM menu WHERE res_id = ".$_GET['res_id'];
                        $resultMenu = mysqli_query($connection,$retriewMenu);
                        while($rowProduct  = mysqli_fetch_assoc($resultMenu)){  
                            echo"<article class=\"gallery-item\">
                                    <a href=\"images/restaurant/{$rowProduct['res_id']}/menu/{$rowProduct['menu_id']}.jpg\">
                                    <img class=\"food-img\" src= \"images/restaurant/{$rowProduct['res_id']}/menu/{$rowProduct['menu_id']}.jpg\">
                                    </a>";
                        }
                        echo"</article>";
                    }
                ?>
            </div>
        </section>    
    </section>
    <!--End of Menu content-->

    <!--Start of Floorplan content-->
    <section class="content">
        <div class="p-heading">
		    <h3>Floorplan </h3>
	    </div>
        <section id="gallery">    
            <div id="gallery-center">
                <?php 
                    if(isset($_GET['res_id'])){
                        $retriewMenu = "SELECT * FROM floorplan WHERE res_id = ".$_GET['res_id'];
                        $resultMenu = mysqli_query($connection,$retriewMenu);
                        while($rowProduct  = mysqli_fetch_assoc($resultMenu)){  
                            echo"<article class=\"gallery-item\">
                                    <a href=\"images/restaurant/{$rowProduct['res_id']}/menu/{$rowProduct['floorplan_id']}.jpg\">
                                    <img class=\"food-img\" src= \"images/restaurant/{$rowProduct['res_id']}/floorplan/{$rowProduct['floorplan_id']}.jpg\">
                                </a></article></div>";
                        }
                        echo"</section>";
                    }
                    echo"</section>";
                ?>    
    <!--End of floorplan content-->

    <!--Start of Map-->
    <section class="content">
        <div class="p-heading">
		    <h3>Map </h3>
	    </div>
        <section id="gallery">    
            <div id="gallery-center">
                <?php 
                    if(isset($_GET['res_id'])){
                        $retriewMenu = "SELECT * FROM restaurant WHERE res_id = ".$_GET['res_id'];
                        $resultMenu = mysqli_query($connection,$retriewMenu);
                        while($rowProduct  = mysqli_fetch_assoc($resultMenu)){  
                            echo"<div class=\"mapouter\">
                                    <div class=\"gmap_canvas\">
                                        <iframe width=\"100%\" height=\"100%\" id=\"gmap_canvas\" src=\"{$rowProduct['res_location']}\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe>
                                    </div>
                                </div>";
                        }
                        echo"</article>";
                    }
                ?>    
            </div>
        </section>   
    </section>
    <!--End of Map-->

    <!--Start of Review-->
    <section class="content">
        <div class="p-heading">
		    <h3>Review</h3>
	    </div>
        <section id="gallery">    
            <div id="gallery-center">    
                <?php 
                    if(isset($_GET['res_id'])){
                        $retriewMenu = "SELECT * FROM restaurant WHERE res_id = ".$_GET['res_id'];
                        $resultMenu = mysqli_query($connection,$retriewMenu);
                        while($rowProduct  = mysqli_fetch_assoc($resultMenu)){  
                            echo"<div class=\"mapouter\">
                                    <div class=\"gmap_canvas\">
                                        <iframe width=\"600\" height=\"500\" id=\"gmap_canvas\" src=\"review/index.html?res_id={$rowProduct['res_id']}\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe>                               
                                    </div>
                                </div>";
                        }
                        echo"</article>";
                    }
                ?>    
            </div>
        </section>    
    </section>
    <!--End of Review-->
		
	<!--Include footer.php-->
    <div><?php include "includes/footer.php" ?></div>
    
    <!--script for onClickNav() for the navigation menu-->
    <script src="./js/onClickNav.js"></script>
</body>
</html>
