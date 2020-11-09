<?php include('../../includes/session.php') ?>
<?php include('../../includes/connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta content="IE-edge" http-equiv="X-UA-Compatible"/>
	<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
	<title>ReserveMe</title>
	<!--web-icon------------------->
	<link href="../../images/logo.png" rel="shortcut icon"/>
	<!--stylesheet-------------------->
	<link href="../../CSS/main.css" rel="stylesheet" type="text/css"/>
	<link href="../../CSS/nav.css" rel="stylesheet" type="text/css"/>
	<link href="../../CSS/footer.css" rel="stylesheet" type="text/css"/>
	<!--FontAwesome-------->
	<script crossorigin="anonymous" src="https://kit.fontawesome.com/70a642cd7c.js"></script>
</head>
<body>

	<!--main-section--------------->
	<section class="main">
		<!--Start of nav-->
		<div class="topnav" id="myTopnav">
			<img class = "logo" src="../../images/logo.png">
            <a class="navtab" href="../../index.php">Logout</a>
			<a class="navtab" href="../../includes/contact.php">Contact</a>
			<a class="navtab" href="../../includes/about.php">About</a>
			<!--<a href="javascript:void(0);" class="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a> -->
		</div>
		<!--End of nav-->
	
		<!--Start of img-->
		<div class="m-img">
			<div class="slideshow-container">
				<div class="mySlides fade">
				  <div class="numbertext">1/3</div>
				  <img src="../../images/promos/1.jpg" style="width:100%">
				  <div class="text"><a class="hero-button pulsate" href="res_view.php">Visit</a></div>
				</div>

				<div class="mySlides fade">
				  <div class="numbertext">2 / 3</div>
				  <img src="../../images/promos/2.jpg" style="width:100%">
				  <div class="text"><a class="hero-button pulsate" href="res_view.php">Visit</a></div>
				</div>

				<div class="mySlides fade">
				  <div class="numbertext">3 / 3</div>
				  <img src="../../images/promos/3.jpg" style="width:100%">
				  <div class="text"><a class="hero-button pulsate" href="res_view.php">Visit</a></div>
				</div>
			</div>

			<div style="text-align:center">
			  <span class="dot"></span> 
			  <span class="dot"></span> 
			  <span class="dot"></span> 
			</div>
		</div>
		<!--End of img-->
		
		<!--Start of text-->
		<div class="m-text">
			<h2>Reserve<font>Me</font></h2>
			<h4>Reservation at finger tip</h4>
			<h5>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit ut a veritatis minus, magni pariatur. Esse illo iusto odio omnis laborum? Rem dolor accusamus repudiandae perspiciatis eveniet quasi quas eius.</h5>
		</div>
		<!--End of text-->
		
		<!--Start of social-->
		<div class="social">
			<a href="#"><i class="fab fa-facebook-f"></i></a>
			<a href="#"><i class="fab fa-twitter"></i></a>
			<a href="#"><i class="fab fa-instagram"></i></a>
			<a href="#"><i class="fab fa-youtube"></i></a>
		</div>
		<!--End of social-->
	</section>

	<!--Start of our-brand-section 1-->
	<section class="reservation">
		<!--text-->
		<div class="reservation-text">
			<!--heading-->
			<h3>Table Reservation</h3>
			<h4>Best places to <font>Dine in</font> </h4>
			<!--details-->
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, sint. Non officiis, architecto exercitationem modi distinctio quaerat at aspernatur omnis nobis et voluptatibus hic veritatis excepturi vel molestias quisquam dicta.</p>
			<a class="hero-button pulsate" href="../../search_result.php">Table Reservation</a>
		</div>
		<!--img-->
		<div class="reservation-img"><img src="../../images/table.jpg" /></div>
	</section>
	<!--End of our-brand-section 1-->
	
	<!--Start of About-->
    <section id="about">
        <div class="about-center">
            <!--Start of the article1-->
            <article class="about">
                <div class="about-icon">
					<i class="fas fa-mug-hot"></i>
					<h2 class="about-subtitle"><a href="../../category/arabic.php">Sri Lankan</a></h2>
                </div>              
            </article>
            <!--End of the article1-->
            <!--Start of the article2-->
            <article class="about">
                <div class="about-icon">
					<i class="fas fa-hamburger"></i>
					<h2 class="about-subtitle"><a href="../../category/arabic.php">Street Food</a></h2>
                </div>
            </article>
            <!--End of the article2-->
            <!--Start of the article3-->
            <article class="about">
                <div class="about-icon">
					<i class="fas fa-mortar-pestle"></i>
					<h2 class="about-subtitle"><a href="../../category/arabic.php">Chinese</a></h2>
                </div>
            </article>
            <!--End of the article3-->
            <!--Start of the article4-->
            <article class="about">
                <div class="about-icon">
					<i class="fas fa-pizza-slice"></i>
					<h2 class="about-subtitle"><a href="../../category/arabic.php">Italian</a></h2>
                </div>
            </article>
            <!--End of the article4-->
            <!--Start of the article5-->
            <article class="about">
                <div class="about-icon">
					<i class="fas fa-fish"></i>
					<h2 class="about-subtitle"><a href="../../category/arabic.php">Mongolian</a></h2>
                </div>
            </article>
            <!--End of the article5-->
            <!--Start of the article6-->
            <article class="about">
                <div class="about-icon">
					<i class="fas fa-pepper-hot"></i>
					<h2 class="about-subtitle"><a href="../../category/arabic.php">Arabic</a></h2>
                </div>
            </article>
            <!--End of the article6-->
			<!--Start of the article7-->
            <article class="about">
                <div class="about-icon">
					<i class="fas fa-fish"></i>
					<h2 class="about-subtitle"><a href="../../category/arabic.php">Thai</a></h2>
                </div>
            </article>
            <!--End of the article7-->
        </div>
    </section>
	<!--End of About-->

	<!--Start of our-brand-section 2-->
	<section class="reservation">
		<!--img-->
		<div class="reservation-img"><img src="../../images/hall.jpg" /></div>
		<!--text-->
		<div class="reservation-text">
			<!--heading-->
			<h3>Hall Reservation</h3>
			<h4>Best places to <font>Enlight</font> your occasion</h4>
			<!--details-->
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, doloremque exercitationem illum vitae earum, velit nulla pariatur est esse, ratione qui! Quis sapiente illum, et quaerat veritatis nihil numquam repellendus!</p>
			<a class="hero-button pulsate" href="../../hall_search_result.php">Hall Reservation</a>
		</div>
		</section>
	<!--End of our-brand-section 2-->
	
	
	<!--Start of subscribe-->
	<section class="subcribe-container">
		<!--heading-->
		<h3>Subcribe For Enjoy Amazing Offers</h3>
		<!--Input-------->
		<div class="subcribe-input">
			<input placeholder="Example@gmail.com" type="email" />
			<a class="subcribe-btn" href="#">Send</a>
		</div>
	</section>
	<!--Start of subscribe-->
	
	<!--Include footer.php-->
    <div><?php include "../../includes/footer.php" ?></div>
	
	<!--script for slideshow-->
    <script src="../../js/slideshow.js"></script>
	
	<!--script for onClickNav() for the navigation menu-->
    <script src="../../js/onClickNav.js"></script>
</body>
</html>
