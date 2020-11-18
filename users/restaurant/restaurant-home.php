<?php include('../../includes/session.php') ?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Restaurant Home</title>
        <!-- <link rel="stylesheet" href="../../CSS/login.css">  -->
        <script src="https://kit.fontawesome.com/20026fc328.js" crossorigin="anonymous"></script>
	    <link rel="stylesheet" href="../../CSS/nav.css">
        <link rel="stylesheet" href="../../CSS/footer.css">
        <link href="../../images/logo.png" rel="shortcut icon"/>
        <link rel="stylesheet" href="../../CSS/restaurant-dashboard.css"/>
    </head>
    <body style="background-color:">

        <!--Start of nav-->
        <div class="topnav" id="myTopnav">
            <a href="../../index.php"><img class = "logo" src="../../images/logo.png"></a>
            
            <a class="navtab" href="../../index.php">Logout</a>
		    <a class="navtab" href="restaurant-profile.php">My Profile</a>    
        </div>
        <!--End of nav-->

        <!-- Restaurant Sidebar Dashboard -->
        
        <div class="sidebar">
            </br></br>
            <a class="active" href="restaurant-homeframe.php" target="iframeBox" >Home</a>
            <a href="add-preordermenu.php" target="iframeBox">Pre - Order Menu</a>
            <a href="add-menu.php" target="iframeBox">Update the Menu</a>
            <a href="res-promo.php" target="iframeBox">Promotions</a>
            <a href="res_view.php" target="iframeBox">View Reviews</a>
            <a href="res-contactus.php" target="iframeBox">Help Desk</a>
            <br><br><br>
            <hr>
            <a href="emp-iframe.php" target="iframeBox">Manage Employee</a>
            <a href="hall-details.php" target="iframeBox">Reception Hall</a>

        </div>

        <div class="container">
        <iframe name="iframeBox" class="responsive-iframe" src="restaurant-homeframe.php" frameBorder="0"></iframe>
	</div>
    <br><br><br> 
    <!--Include footer.php-->
    <div><?php include "../../includes/footer.php" ?></div>
    
    </body>
</html>
