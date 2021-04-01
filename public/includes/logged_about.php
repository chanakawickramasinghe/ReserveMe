<!DOCTYPE html>
<html>
    
<head>
    <title>About | ReserveMe</title>
    <!--FontAwesome-------->
	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <!--web-icon-->
    <link href="../images/logo.png" rel="shortcut icon"/>
    
    <!-- link the Style sheet -->
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
    <link rel="stylesheet" type="text/css" href="../CSS/main.css">
    <link rel="stylesheet" type="text/css" href="../CSS/nav.css">    
    <link rel="stylesheet" type="text/css" href="../CSS/footer.css">
    <!--FontAwesome-------->
    <script crossorigin="anonymous" src="https://kit.fontawesome.com/70a642cd7c.js"></script>
	
    
</head>
    
<body>
		<!--Start of nav-->
		<div class="topnav" id="myTopnav">
			<a href="../../src/customer/customer-home.php"><img class = "logo" src="../images/logo.png"></a>
		    <a class="navtab" href="logout.php">Logout</a>
            <a class="navtab" href="../../src/customer/customer-profile.php">Profile</a>
            <a class="navtab" href="../../src/customer/reservation_details.php">Reservations</a>
		    <a class="navtab" href="logged_contact.php">Contact</a>
		    <a class="navtab active" href="#">About</a>
		    <a class="navtab" href="javascript:void(0);" id="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a>
		</div><br><br>
		<!--End of nav-->
    
    <div class="about-body"> 
        <img src="../images/aboutupdated.jpg" alt="about us picture" style="height:50%;width:100%">
        
        <!--Start of Hall reservation-->
	<section class="reservation">
		<!--img-->
		<div class="reservation-img"><img src="../images/logo.png"" /></div>
		<!--text-->
		<div class="reservation-text">
			<!--heading-->
			<h3>Who we are?</h3>
			<!--details-->
			<p style="color:#181616">ReserveMe is one of the most atractive five-star hotel situated in Kandy, the last kingdom of Sri Lanka.<br>
            It is one of the main hotels situated in the heart of Kandy which has been very famous amoung the turists as well. Also it is one of the restaurants which provides the service of online reserving tables and halls though it's web based system.</p>
			<br>
            <p style="color:#181616">This is a service providing platform which serves the customers and the interested parties by giving the opportunity of reserving the tables, reserving halls for their occassions and also preordering food if they are willing to order food before arriving the retaurant. Which will avoid wasting time searching for a table and of avoiding the unpleasent times faced by the customer.</p>
		</div>
		</section>
	<!--End of Hall reservation-->    
    </div>
        
    </div>


    <!--Start of Services section-->
	<div class="serviceh"><h1>Our Services</h1></div>
	<section class="service">
		<div class="flatart"></div>
		<div class="card">
			<div class="about-icon">
				<i class="fas fa-utensils"></i>
			</div>              
            <h3>Table Reservation</h3>
			<p>This facilitates the customer to reserve a table beforehand. The customer can select the table based on the number of people and the place which they prefer. </p>
		</div>
		<div class="card">
			<div class="about-icon">
				<i class="fas fa-hotel"></i>
			</div>              
            <h3>Hall Reservation</h3>
			<p>This facilitates customers who are willing to book halls for the events they will organizing which allows booking them before hand and also to check the details of the venue through the system.</p>
		</div>
		<div class="card">
			<div class="about-icon">
				<i class="fas fa-concierge-bell"></i>
			</div>              
            <h3>Preorder</h3>
			<p>At the same time the system provide the additional opportunity to pre-order the meals if they are willing to and it will be benificial for the users since it will avoid waiting time at the restaurant.</p>
		</div>
	</section>             
	<!--End of Services section-->

    <!--Start of Location section-->
	<section class="location">
		<!--text-->
		<div class="location-text">
			<!--heading-->
			<h3>Our Location</h3>
			<h4>Best place to <font>Enjoy</font> </h4>
			<!--details-->
			<p>The ReserveMe is located in Kandy which is the most significant and hloiest city in Sri Lanka. Here you will get the opportunity to experiance the fresh wind of the Nuwara Lake and to feel the cold and mist in the mornings. Which add the freshness of Sri Lankan breath. </p>
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

    <!--Start of chefs section-->
	<section class="chef">
		<div class="flatart"></div>
		<div class="discription">
			<!--heading-->
			<h3>Kitchen Experts</h3>
			<p style="color:#181616">Enlight your special occasion by finding the best place. You can now search and find the best venue to your weddings, birthday parties and more occasion. We provide you the facility to book it before others.</p>
		</div>
		<div class="image">
			<img src="../images/chef1.jpg" />
		</div>
		<div class="image">
			<img src="../images/chef2.jpg" />
		</div>
	</section>             
	<!--End of chefs section-->
    
    <?php include('footer.php'); ?>
     
    <!--script for slideshow-->
    <script src="../js/onClickNav.js"></script>

</body>
    
</html>
