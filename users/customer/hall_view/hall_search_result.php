<?php include('../../../includes/connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReserveMe</title>
    <link href="../../../images/logo.png" rel="shortcut icon"/>
    <!--fontawesome-------------------->
    <script src="https://kit.fontawesome.com/20026fc328.js" crossorigin="anonymous"></script>
    <!--stylesheet-------------------->
	<link rel="stylesheet" type="text/css" href="../../../CSS/nav.css">
    <link rel="stylesheet" href="../../../CSS/search.css">
    <link rel="stylesheet" href="../../../CSS/footer.css">   
    <link rel="stylesheet" href="../../../CSS/main.css">
</head>

<body>
    <!--Start of nav-->
    <div class="topnav" id="myTopnav">
        <a href="../../../index.php"><img class = "logo" src="../../../images/logo.png"></a>
		<a class="navtab" href="../customerReg.php">Register</a>
		<a class="navtab" href="../../../includes/login.php">Login</a>
		<a class="navtab" href="../../../includes/contact.php">Contact</a>
		<a class="navtab" href="../../../includes/about.php">About</a>    
		<a class="navtab" href="javascript:void(0);" id="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a>
    </div>
    <!--End of nav-->
	
    <!--Start of Hall1-->
	<section class="reservation">
		<!--text-->
		<div class="reservation-text">
			<!--heading-->
			<h3>Orchid Hall</h3>
			<!--details-->
            <p>Enlight your special occasion by finding the best place. You can now search and find the best venue to your weddings, birthday parties and more occasion. We provide you the facility to book it before others.</p>
			<button type="button" class="hero-button" onclick="location.href='hall_view.php?res_id=4'" style="cursor: pointer">Find Out More</button>  
		</div>
		<!--img-->
		<div class="reservation-img"><img src="../../../images/gallery4.jpg" /></div>
	</section>
	<!--End of Hall1-->

    <!--Start of Hall2-->
	<section class="reservation">
		<!--img-->
		<div class="reservation-img"><img src="../../../images/gallery4.jpg" /></div>
		<!--text-->
		<div class="reservation-text">
			<!--heading-->
			<h3>Oak Room</h3>
			<!--details-->
			<p>Enlight your special occasion by finding the best place. You can now search and find the best venue to your weddings, birthday parties and more occasion. We provide you the facility to book it before others.</p>
			<a class="hero-button" href="hall_view.php" >Find Out More</a>
		</div>
		</section>
	<!--End of Hall2-->

	<!--Start of Hall2-->
	<section class="reservation">
		<!--img-->
		<div class="reservation-img"><img src="../../../images/gallery4.jpg" /></div>
		<!--text-->
		<div class="reservation-text">
			<!--heading-->
			<h3>Oak Room</h3>
			<!--details-->
			<p>Enlight your special occasion by finding the best place. You can now search and find the best venue to your weddings, birthday parties and more occasion. We provide you the facility to book it before others.</p>
			<a class="hero-button" href="hall_view.php" >Find Out More</a>
		</div>
		</section>
	<!--End of Hall2-->


    <!--Include footer.php-->
    <div><?php include "../../../includes/footer.php" ?></div>

    <!--script for slideshow-->
    <script src="../../../js/onClickNav.js"></script>
</body>
</html>

