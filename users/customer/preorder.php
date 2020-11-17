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
    <link rel="stylesheet" href="../../CSS/preorder.css">
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
            <h3>Pre<font>Order</font></h3>
        </div>
        <form class="food">
            <div class="food-container">
                <div class="food-box">
                    <h4 class="">Kottu</h4>
                    <h4 class="">Rs.500.00</h4>
                    <input type="number" id="quantity" name="quantity" min="1" max="5" placeholder="1">
                </div>
            </div>
            <div class="food-container">
                <div class="food-box">
                <h4 class="">Burger</h4>
                    <h4 class="">Rs650.00</h4>
                    <input type="number" id="quantity" name="quantity" min="1" max="5" placeholder="1">
                </div>
            </div>
            <div class="food-container">
                <div class="food-box">
                <h4 class="">Cappuccino</h4>
                    <h4 class="">Rs.500.00</h4>
                    <input type="number" id="quantity" name="quantity" min="1" max="5" placeholder="1">
                </div>
            </div>
            <div class="food-container">
                <div class="food-box">
                <h4 class="">Pasta</h4>
                    <h4 class="">Rs.500.00</h4>
                    <input type="number" id="quantity" name="quantity" min="1" max="5" placeholder="1">
                </div>
            </div>
            <button type="button" class="food-btn" onclick="" style="cursor: pointer;">Order</button>  
        </form>           
    <!--End of Ongoing Card Section-->

    

    <!--Include footer.php-->
    <div><?php include "../../includes/footer.php" ?></div>

    <!--script for onClickNav() for the navigation menu-->
    <script src="../../js/onClickNav.js"></script>
</body>
</html>
