<?php include('../../includes/connection.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReserveMe</title>
    <!--web-icon-->
    <link href="../../images/logo.png" rel="shortcut icon"/>
    <!--fontawesome-------------------->
    <script src="https://kit.fontawesome.com/20026fc328.js" crossorigin="anonymous"></script>
    <!--stylesheet-------------------->
	<link rel="stylesheet" type="text/css" href="../../CSS/nav.css">
    <link rel="stylesheet" href="../../CSS/footer.css">   
    <link rel="stylesheet" href="../../CSS/reservation_details.css">
</head>

<body>
    <!--Start of nav-->
    <div class="topnav" id="myTopnav">
            <a href="customer-home.php"><img class = "logo" src="../../images/logo.png"></a>
			<a class="navtab" href="../../index.php">Logout</a>
			<a class="navtab" href="customer-profile.php">Profile</a>
			<a class="navtab" href="reservation_details.php">Reservations</a>
			<a class="navtab" href="../../includes/logged_contact.php">Contact</a>
			<a class="navtab" href="../../includes/logged_about.php">About</a>
			<a class="navtab" href="javascript:void(0);" id="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a>
		</div>
    <!--End of nav-->
    
    <!--Start of Ongoing Card Section-->
        <div class="title_text">
            <h3>Ongoing <font>Reservaions</font></h3>
        </div>
        <section class="food">
            
            <div class="food-container">
                <div class="food-box">
                    <h3 class="name">KFC</h3> 
                    <img class="food-img" src= "../../images/4.jpg">
                    <br>
                    <i class="fas fa-map-marker-alt">Colombo</i>
                    <br>
                    <h4 class="">2020 Dec 04</h4>
                    <h4 class="">8.00pm</h4>
                    <h4 class="">For 2</h4>
                    <h4 class="">Rs.2000.00</h4>
                    <button type="button" class="food-btn" onclick="" style="cursor: pointer;">Cancel</button>  
                </div>
            </div>
            <div class="food-container">
                <div class="food-box">
                    <h3 class="name">KFC</h3> 
                    <img class="food-img" src= "../../images/10.jpg">
                    <br>
                    <i class="fas fa-map-marker-alt">Colombo</i>
                    <br>
                    <h4 class="">2021 Feb 19</h4>
                    <h4 class="">8.00pm</h4>
                    <h4 class="">For 4</h4>
                    <h4 class="">Rs.6000.00</h4>
                    <button type="button" class="food-btn" onclick="" style="cursor: pointer;">Cancel</button>  
                </div>
            </div>
            <div class="food-container">
                <div class="food-box">
                    <h3 class="name">Fab</h3> 
                    <img class="food-img" src= "../../images/8.jpg">
                    <br>
                    <i class="fas fa-map-marker-alt">Negombo</i>
                    <br>
                    <h4 class="">2020 Apr 14</h4>
                    <h4 class="">10.00am</h4>
                    <h4 class="">For 6</h4>
                    <h4 class="">Rs.4500.00</h4>
                    <button type="button" class="food-btn" onclick="" style="cursor: pointer;">Delete</button>  
                </div>
            </div>
        </section>           
    <!--End of Ongoing Card Section-->

    <!--Start of Past Card Section-->
    <div class="title_text">
        <h3>Past <font>Reservaions</font></h3>
    </div>
    <section class="food">
            <div class="food-container">
                <div class="food-box">
                    <h3 class="name">KFC</h3> 
                    <img class="food-img" src= "../../images/4.jpg">
                    <br>
                    <i class="fas fa-map-marker-alt">Colombo</i>
                    <br>
                    <h4 class="">2020 Sep 14</h4>
                    <h4 class="">6.00pm</h4>
                    <h4 class="">For 2</h4>
                    <h4 class="">Rs.2000.00</h4>
                    <button type="button" class="food-btn" onclick="" style="cursor: pointer;">Delete</button>  
                </div>
            </div>
            <div class="food-container">
                <div class="food-box">
                    <h3 class="name">Cinnomon</h3> 
                    <img class="food-img" src= "../../images/10.jpg">
                    <br>
                    <i class="fas fa-map-marker-alt">Colombo</i>
                    <br>
                    <h4 class="">2020 Jul 18</h4>
                    <h4 class="">4.00pm</h4>
                    <h4 class="">For 4</h4>
                    <h4 class="">Rs.6000.00</h4>
                    <button type="button" class="food-btn" onclick="" style="cursor: pointer;">Delete</button>  
                </div>
            </div>
            <div class="food-container">
                <div class="food-box">
                    <h3 class="name">Fab</h3> 
                    <img class="food-img" src= "../../images/8.jpg">
                    <br>
                    <i class="fas fa-map-marker-alt">Negombo</i>
                    <br>
                    <h4 class="">2020 Apr 14</h4>
                    <h4 class="">10.00am</h4>
                    <h4 class="">For 6</h4>
                    <h4 class="">Rs.4500.00</h4>
                    <button type="button" class="food-btn" onclick="" style="cursor: pointer;">Delete</button>  
                </div>
            </div>
            <div class="food-container">
                <div class="food-box">
                    <h3 class="name">Cinnomon</h3> 
                    <img class="food-img" src= "../../images/10.jpg">
                    <br>
                    <i class="fas fa-map-marker-alt">Colombo</i>
                    <br>
                    <h4 class="">2020 Jul 18</h4>
                    <h4 class="">4.00pm</h4>
                    <h4 class="">For 4</h4>
                    <h4 class="">Rs.6000.00</h4>
                    <button type="button" class="food-btn" onclick="" style="cursor: pointer;">Delete</button>  
                </div>
            </div>
            <div class="food-container">
                <div class="food-box">
                    <h3 class="name">Fab</h3> 
                    <img class="food-img" src= "../../images/8.jpg">
                    <br>
                    <i class="fas fa-map-marker-alt">Negombo</i>
                    <br>
                    <h4 class="">2020 Apr 14</h4>
                    <h4 class="">10.00am</h4>
                    <h4 class="">For 6</h4>
                    <h4 class="">Rs.4500.00</h4>
                    <button type="button" class="food-btn" onclick="" style="cursor: pointer;">Delete</button>  
                </div>
            </div>
        </section>
    <!--End of Past Card Section-->

    <!--Include footer.php-->
    <div><?php include "../../includes/footer.php" ?></div>

    <!--script for onClickNav() for the navigation menu-->
    <script src="../../js/onClickNav.js"></script>
</body>
</html>
