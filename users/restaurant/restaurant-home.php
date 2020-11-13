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
		    <!--<a href="javascript:void(0);" class="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a> -->     
        </div>
        <!--End of nav-->

        <!-- Restaurant Sidebar Dashboard -->
        
        <div class="sidebar">
            </br></br>
            <a class="active" href="#home">Home</a>
            <a href="add-preordermenu.php">Pre - Order Menu</a>
            <a href="add-menu.php">Update the Menu</a>
            <a href="#promotions">Promotions</a>
            <a href="#reviews">View Reviews</a>
            <a href="">Help Desk</a>
            <br><br><br>
            <hr>
            <a href="../employee/employee-add.php">Manage Employee</a>
            <a href="../restaurant/add-hall.php">Reception Hall</a>

        </div>
        <div class="content-div">
        <br>       
            <h1>Welcome KFC, Moratuwa!</h1>
        <br>
        </div>
        <div class="search">

        <div class="container">
        <iframe class="responsive-iframe" src="restaurant-homeframe.php"></iframe>

      
    <!--script for onClickNav() for the navigation menu-->
    <script src="../../js/onClickNav.js"></script>

    <br><br><br> 
    
    </body>
</html>