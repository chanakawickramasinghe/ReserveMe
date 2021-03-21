<?php include('includes/connection.php'); ?>
<?php include('includes/session.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta content="IE-edge" http-equiv="X-UA-Compatible"/>
	<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
	<title>ReserveMe</title>
	<!--web-icon------------------->
	<link href="images/logo.png" rel="shortcut icon"/>
	<!--stylesheet-------------------->
	<link href="CSS/main.css" rel="stylesheet" type="text/css"/>
	<link href="CSS/nav.css" rel="stylesheet" type="text/css"/>
	<link href="CSS/footer.css" rel="stylesheet" type="text/css"/>
	<!--FontAwesome-------->
	<script crossorigin="anonymous" src="https://kit.fontawesome.com/70a642cd7c.js"></script>
</head>
<body>

	<!--main-section--------------->
	<section class="main">
		<!--Start of nav-->
		<div class="topnav" id="myTopnav">
			<img class = "logo" src="images/logo.png">
			<a class="navtab" href="users/customer/customerReg.php">Register</a>
			<a class="navtab" href="includes/login.php">Login</a>
			<a class="navtab" href="includes/contact.php">Contact</a>
			<a class="navtab" href="includes/about.php">About</a>
			<a class="navtab" href="javascript:void(0);" id="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a>
		</div>
		<!--End of nav-->
	
		<!--Start of img-->
		<div class="m-img">
			<div class="slideshow-container">
				<div class="mySlides fade">
				  	<img src="images/promos/1.jpeg" style="width:100% ; height:60vh">
				</div>
				<div class="mySlides fade">
				  	<img src="images/promos/2.jpeg" style="width:100% ; height:60vh">
				</div>
			</div>

			<div style="text-align:center">
			  <span class="dot"></span> 
			  <span class="dot"></span> 
			  <span class="dot"></span> 
			</div>
		</div>
		<!--End of img-->
		
		<!--Start of text
		<div class="m-text">
			<h2>Reserve<font>Me</font></h2>
			<h4>Reservation at finger tip</h4>
			<h5>Explore the curated list of top restaurants in your area to make things more and more easier. Place a reservation within few minutes with us.</h5>
		</div>
		End of text-->
		
		<!--Start of social-->
		<div class="social">
			<a href="#"><i class="fab fa-facebook-f"></i></a>
			<a href="#"><i class="fab fa-twitter"></i></a>
			<a href="#"><i class="fab fa-instagram"></i></a>
			<a href="#"><i class="fab fa-youtube"></i></a>
		</div>
		<!--End of social-->
	</section>

	<!--Start of Table reservation-->
	<section class="reservation">
		<!--text-->
		<div class="reservation-text">
			<!--heading-->
			<h3>Table Reservation</h3>
			<h4>Best places to <font>Dine in</font> with esense of joy</h4>
			<!--details-->
			<p>We have brought the fine option of placing a table reservation at your favourite restaurant to your finger tip. Explore more restaurants and place a table reservation in few minutes.</p>
			<a class="hero-button" href="users/customer/res_view/res_view.php?res_id=4">Table Reservation</a>
		</div>
		<!--img-->
		<div class="reservation-img"><img src="images/hall.jpg" /></div>
	</section>
	<!--End of Table reservation-->

	
	<!--Start of Hall reservation-->
	<section class="reservation">
		<!--img-->
		<div class="reservation-img"><img src="images/hall.jpg" /></div>
		<!--text-->
		<div class="reservation-text">
			<!--heading-->
			<h3>Hall Reservation</h3>
			<h4>Best places to <font>Enlight</font> your occasion</h4>
			<!--details-->
			<p>Enlight your special occasion by finding the best place. You can now search and find the best venue to your weddings, birthday parties and more occasion. We provide you the facility to book it before others.</p>
			<a class="hero-button" href="users/customer/hall_view/hall_search_result.php">Hall Reservation</a>
		</div>
		</section>
	<!--End of Hall reservation-->

	<!--Start of Location section-->
	<section class="location">
		<!--text-->
		<div class="location-text">
			<!--heading-->
			<h3>Our Location</h3>
			<h4>Best place to <font>Enjoy</font> </h4>
			<!--details-->
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc maximus odio sit amet tellus mollis, ut suscipit lectus ornare. Mauris nisi mauris, scelerisque at dictum et, tempus eget erat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent tristique accumsan massa. Nullam eu ante lorem. In hac habitasse platea dictumst. Pellentesque quis rutrum nisl.</p>
		</div>
		<!--Start of Map-->
		<section class="content">
        <section id="gallery">    
            <div id="gallery-center">
                <div class="mapouter">
            		<div class="gmap_canvas">
                        <iframe width="400vh" height="300vw" id="gmap_canvas" src="https://maps.google.com/maps?q=topaz%20kandy&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>                           
                    </div>
                </div>
            </div>
        </section>   
    </section>
	<!--End of Map-->
	</section>
	<!--End of Location section-->

	<!--Start of Reviews section-->
	<div class="reviewh">
		<h1>Customers Feedback</h1>
	</div>
	<?php 
        $sql = "SELECT * FROM reviews WHERE res_id = '4' order by rating desc limit 1";
            $resultProduct = mysqli_query($connection,$sql);
            while($rowProduct  = mysqli_fetch_assoc($resultProduct)){  
                echo"<section class=\"review\">
				<div class=\"flatart\"></div>
				<div class=\"card1\">
					<h3>". $rowProduct['customer_name'] ."</h3>
					<p><i class=\"far fa-comments\" id=\"i1\"></i><br><br>". $rowProduct['content'] ."<br>
					<i class=\"far fa-star\" id=\"i3\"></i><i class=\"far fa-star\" id=\"i3\"></i><i class=\"far fa-star\" id=\"i3\"></i><i class=\"far fa-star\" id=\"i3\"></i><br>
					<i class=\"far fa-comments\" id=\"i2\"></i></p>
				</div>
				<div class=\"card2\">
				<img src=\"images/review.svg\" style=\"height: 200px ; width: 200px\"/>
				<a class=\"subcribe-btn\" href=\"users/customer/res_view/review/index.php?res_id=4\">More</a>
				</div>
			</section>   
				
			
			
			
			
			";
            }
        
    ?>

				
           


	
	
	<!--End of Reviews section-->          

	<!--Start of Gallery section-->
	<section clss="Gallerysection">
		<div class="container">
            <div class="gallery">
                <figure class="gallery__item gallery__item--1">
                    <img src="images/gallery2.jpg" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--2">
                    <img src="images/gallery5.jpg" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--3">
                    <img src="images/gallery4.jpg" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--4">
                    <img src="images/gallery6.jpg" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--5">
                    <img src="images/gallery1.jpg" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--6">
                    <img src="images/gallery3.jpg" class="gallery__img">
				</figure>
				<figure class="gallery__item gallery__item--7">
                    <img src="images/gallery7.jpg" class="gallery__img">
                </figure>
            </div>
        </div>
	</section>        
	<!--End of Gallery section-->

	<!--Start of subscribe
	<section class="subcribe-container">
		//heading
		<h3>Subcribe For Enjoy Amazing Offers</h3>
		//Input
		<div class="subcribe-input">
			<input placeholder="Example@gmail.com" type="email" />
			<a class="subcribe-btn" href="#">Send</a>
		</div>
	</section>
	Start of subscribe-->
	
	<!--Include footer.php-->
    <div><?php include "./includes/footer.php" ?></div>
	
	<!--script for slideshow-->
    <script src="js/slideshow.js"></script>
	
	<!--script for onClickNav() for the navigation menu-->
    <script src="js/onClickNav.js"></script>
</body>
</html>