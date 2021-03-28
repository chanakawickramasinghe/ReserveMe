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
	<!--Start of main section-->
	<section class="main">
		<!--Start of nav-->
		<div class="topnav" id="myTopnav">
			<img class = "logo" src="../../images/logo.png">
			<a class="navtab" href="../../index.php">Logout</a>
			<a class="navtab" href="customer-profile.php">Profile</a>
			<a class="navtab" href="reservation_details.php">Reservations</a>
			<a class="navtab" href="../../includes/logged_contact.php">Contact</a>
			<a class="navtab" href="../../includes/logged_about.php">About</a>
			<a class="navtab" href="javascript:void(0);" id="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a>
		</div>
		<!--End of nav-->
	
		<!--Start of img-->
		<div class="m-img">			
			<?php 
        		$sql = "SELECT * FROM promotions ";
            	$resultProduct = mysqli_query($connection,$sql);
            	while($rowProduct  = mysqli_fetch_assoc($resultProduct)){ 
					$end_date=$rowProduct['end_date'];
					$date_now = new DateTime();
 					$date2    = new DateTime($end_date);

					if($date_now < $date2 ) {
    					echo"<div class=\"slideshow-container\">
							<div class=\"mySlides fade\">
								<img src= \"../../images/promos/{$rowProduct['image']}\" style=\"width:100% ; height:60vh\">
							</div>
						</div>
						<div style=\"text-align:center\">
							<span class=\"dot\"></span> 
						</div>";
					}
					
				}
    		?>
		<!--End of img-->
		
		<!--Start of social-->
		<div class="social">
			<a href="#"><i class="fab fa-facebook-f"></i></a>
			<a href="#"><i class="fab fa-twitter"></i></a>
			<a href="#"><i class="fab fa-instagram"></i></a>
			<a href="#"><i class="fab fa-youtube"></i></a>
		</div>
		<!--End of social-->
	</section>
	<!--End of main section-->

	<!--Start of Table reservation-->
	<section class="reservation">
		<!--text-->
		<div class="reservation-text">
			<!--heading-->
			<?php 
			checkSession();
			echo $_SESSION["userID"];
			
			?>
			<h3>Table Reservation</h3>
			<h4>Best places to <font>Dine in</font> with esense of joy</h4>
			<!--details-->
			<p>We have brought the fine option of placing a table reservation at your favourite restaurant to your finger tip. Explore more restaurants and place a table reservation in few minutes.</p>
			<a class="hero-button" href="res_view/logged_res_view.php">Table Reservation</a>
		</div>
		<!--img-->
		<div class="reservation-img"><img src="../../images/hall.jpg" /></div>
	</section>
	<!--End of Table reservation-->

	<!--Start of Hall reservation-->
	<section class="reservation">
		<!--img-->
		<div class="reservation-img"><img src="../../images/hall.jpg" /></div>
		<!--text-->
		<div class="reservation-text">
			<!--heading-->
			<h3>Hall Reservation</h3>
			<h4>Best places to <font>Enlight</font> your occasion</h4>
			<!--details-->
			<p>Enlight your special occasion by finding the best place. You can now search and find the best venue to your weddings, birthday parties and more occasion. We provide you the facility to book it before others.</p>
			<a class="hero-button" href="hall_view/logged_hall_search_result.php">Hall Reservation</a>
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
							<?php 
        						$sql = "SELECT * FROM restaurant WHERE res_id = '4'";
            					$resultProduct = mysqli_query($connection,$sql);
            					while($rowProduct  = mysqli_fetch_assoc($resultProduct)){ 
									echo"<iframe width=\"400vh\" height=\"300vw\" id=\"gmap_canvas\" src=\"".$rowProduct['res_location']."\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe>";
								}
    						?>
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
						<p><i class=\"far fa-comments\" id=\"i1\"></i><br><br>". $rowProduct['content'] ."<br><br>
						<div>";
						
							$stars=$rowProduct['rating'];
							for($count=0;$count< $stars;$count++ ) {
    							echo"<i class=\"far fa-star\" id=\"i3\"></i>";
							}

						echo"</div>
						<i class=\"far fa-comments\" id=\"i2\"></i></p>
					</div>
					<div class=\"card2\">
						<img src=\"../../images/review.svg\" style=\"height: 200px ; width: 200px\"/>
						<a class=\"subcribe-btn\" href=\"res_view/review/logged_index.php\">More</a>
					</div>
				</section>";
            	}
    ?>
	<!--End of Reviews section-->          

	<!--Start of Gallery section-->
	<section clss="Gallerysection">
		<div class="container">
            <div class="gallery">
                <figure class="gallery__item gallery__item--1">
                    <img src="../../images/gallery2.jpg" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--2">
                    <img src="../../images/gallery5.jpg" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--3">
                    <img src="../../images/gallery4.jpg" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--4">
                    <img src="../../images/gallery6.jpg" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--5">
                    <img src="../../images/gallery1.jpg" class="gallery__img">
                </figure>
                <figure class="gallery__item gallery__item--6">
                    <img src="../../images/gallery3.jpg" class="gallery__img">
				</figure>
				<figure class="gallery__item gallery__item--7">
                    <img src="../../images/gallery7.jpg" class="gallery__img">
                </figure>
            </div>
        </div>
	</section>        
	<!--End of Gallery section-->

	<!--Include footer.php-->
    <div><?php include "../../includes/footer.php" ?></div>
	
	<!--script for slideshow-->
    <script src="../../js/slideshow.js"></script>
	
	<!--script for onClickNav() for the navigation menu-->
    <script src="../../js/onClickNav.js"></script>
</body>
</html>
