<?php include('../includes/connection.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReserveMe</title>
    <link href="../images/logo.png" rel="shortcut icon"/>
    <!--fontawesome-------------------->
    <script src="https://kit.fontawesome.com/20026fc328.js" crossorigin="anonymous"></script>
    <!--stylesheet-------------------->
	<link rel="stylesheet" type="text/css" href="../CSS/nav.css">
    <link rel="stylesheet" href="../CSS/category.css">
    <link rel="stylesheet" href="../CSS/footer.css">   
    <link rel="stylesheet" href="../CSS/main.css">
</head>

<body>
    <!--Start of nav-->
    <div class="topnav" id="myTopnav">
        <img class = "logo" src="../images/logo.png">
        <a href="users/user-type.php">Register</a>
        <a href="includes/login.php">Login</a>
        <a href="#contact">Contact</a>
        <a href="#aboutus">About</a>
        <a href="javascript:void(0);" class="icon" onclick="onClickNav()">
            <i class="fa fa-bars"></i>
        </a>       
    </div>
    <!--End of nav-->
    
    

    

    <!--Include footer.php-->
    <div><?php include "../includes/footer.php" ?></div>
    
    <!--script for onClickNav() for the navigation menu-->
    <script src="../js/onClickNav.js"></script>

    
</body>
</html>