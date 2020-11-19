<?php include('../../../includes/connection.php'); ?>
<!DOCTYPE html>
<html> 
<head>
    <meta charset="utf-8"/>
    <meta content="IE-edge" http-equiv="X-UA-Compatible"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>ReserveMe</title>
    <!--web-icon-->
    <link href="../../../images/logo.png" rel="shortcut icon"/>
    <!--stylesheet-->
    <link href="../../../css/res_view.css" rel="stylesheet" type="text/css"/>
    <link href="../../../css/nav.css" rel="stylesheet" type="text/css"/>
    <link href="../../../css/footer.css" rel="stylesheet" type="text/css"/>
    <link href="../../../css/reservation_form.css" rel="stylesheet" type="text/css"/>
    <!--FontAwesome-->
    <script crossorigin="anonymous" src="https://kit.fontawesome.com/70a642cd7c.js"></script>
</head>
<body>
    <!--Start of nav-->
    <div class="topnav" id="myTopnav">
		<a href="../customer-home.php"><img class = "logo" src="../../../images/logo.png"></a>
		<a class="navtab" href="../../../index.php">Logout</a>
        <a class="navtab" href="../customer-profile.php">Profile</a>
        <a class="navtab" href="../reservation_details.php">Reservations</a>
		<a class="navtab" href="../../../includes/logged_contact.php">Contact</a>
		<a class="navtab" href="../../../includes/logged_about.php">About</a>
		<a  class="navtab" href="javascript:void(0);" id="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a>
	</div>
    <!--End of nav-->

    <!--Start of main-section-->
    <?php 
        if(isset($_GET['res_id'])){
            $sql = "SELECT * FROM restaurant WHERE res_id = ".$_GET['res_id'];
            $resultProduct = mysqli_query($connection,$sql);
            while($rowProduct  = mysqli_fetch_assoc($resultProduct)){  
                echo"<section class=\"main\">
                        <div class=\"m-img\">       
                            <img class=\"food-img\" src= \"../../../images/restaurant/{$rowProduct['res_image']}\">
                        </div>
                        <div class=\"m-text\">
                            <h2>". $rowProduct['res_name'] ."</h2>
                            <br>
                            <h4><i class=\"fas fa-star-half-alt\">". $rowProduct['res_rate'] ."</i></h4>
                            <br>
                            <h4><i class=\"fas fa-map-marker-alt\">". $rowProduct['city'] ."</i></h4>
                            <br>
                            <h4><i class=\"fas fa-phone-alt\">". $rowProduct['res_tel'] ."</i></h4>
                            <!--<button class=\"reserve-button pulsate\" type=\"submit\" name=\"submit\" onclick=\"onClickOpenForm()\">Reserve</button>-->
	                    </div>	
	                </section>";
            }
        }
    ?>
    <!--Start of add section-->
		<div class="add-img">
			<div class="slideshow-container">
				<div class="mySlides fade">
				   	<img src="../../../images/promos/3.jpg" style="width:100%">
				</div>
                <div class="mySlides fade">
				   	<img src="../../../images/promos/2.jpg" style="width:100%">
				</div>
			</div>

			<div style="text-align:center">
			  <span class="dot"></span> 
			  <span class="dot"></span> 
			  <span class="dot"></span> 
			</div>
		</div>
		<!--End of add section-->
    <!--End of main-section-->

    <!--Start of pop up login page-->
    <div class="form-popup" id="myForm">
        <form action="login_submit.php" method="post" class="form-container">
            <h1>Login</h1>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>
            <div class="pass">
                <a href="#">Forgot Password?</a>
            </div>
            <button type="submit" class="btn">Login</button>
            <button type="button" class="btn cancel" onclick="onClickCloseForm()">Close</button>
            <div class="signup">Don't have account?
                <a href="#">Signup Now</a>
            </div>
        </form>
    </div>

    <script src="../../../js/onClickOpenForm.js"></script>
    <!--End of pop up login page-->

    <!--Start of iframe section-->
    <section class="content">
	    <div class="content-container">	
	        <div class="select">
		        <ul class="select-menu">
					<?php 
						if(isset($_GET['res_id'])){
							$retriewMenu = "SELECT * FROM restaurant WHERE res_id = ".$_GET['res_id'];
							$resultMenu = mysqli_query($connection,$retriewMenu);
							while($rowProduct  = mysqli_fetch_assoc($resultMenu)){  
                                echo"<li><a  href=\"hall_discription.php?res_id={$rowProduct['res_id']}\" target=\"iframeBox\">About</a></li>
                                    <li><a  href=\"menu.php?res_id={$rowProduct['res_id']}\" target=\"iframeBox\">Menu</a></li>
									<li><a  href=\"directions.php?res_id={$rowProduct['res_id']}\" target=\"iframeBox\">Directions</a></li>
									<li><a  href=\"review/logged_index.html?res_id={$rowProduct['res_id']}\" target=\"iframeBox\">Reviews</a></li>";
							}               
						}
					?>  
		        </ul>
	        </div>
			<iframe src="hall_discription.php?res_id= <?php echo $_GET['res_id']?>" id="iframeBox" name="iframeBox" class="iframeBox" height="500px" width="100%" title="Iframe Example" frameborder="0" marginwidth="0" marginheight="0"><div></iframe>
	    </div>	
	</section>
	<!--End of iframe section-->

    <!--Start of reservationform section-->
    <section class = "banner">
            <h2>BOOK YOUR TABLE NOW</h2>
            <div class = "card-container">
                <div class = "card-img">
                <img src="../../../images/hall.jpg" style="width:100%">
                </div>

                <div class = "card-content">
                    <h3>Book</h3>
                    <form class="reservation_form" action="checkout.php">
                        <div class = "form-row">
                            <input type = "text" placeholder="Hall Name">
                            <input type = "date" placeholder="Select Date">
                        </div>

                        <div class = "form-row">
                            <input type = "number" placeholder="How Many Persons?" min = "1">
                            <select name = "hours">
                                <option value = "session-select">Select Session</option>
                                <option value = "1">Morning</option>
                                <option value = "1">Evening</option>
                            </select>
                        </div>
                        <div class = "form-row">
                            <button href="checkout.php" class="reserve-button" type=""  name="submit">Book</button>
                        </div>
                    </form>
                    <div class="check"><button   class="food-btn" type=""  name="submit">Check Availability</button></div>
                </div>
            </div>
        </section>
        <!--Start of reservationform section-->

	<!--Include footer.php-->
    <div><?php include "../../../includes/footer.php" ?></div>
    
    <!--script for slideshow-->
    <script src="../../../js/onClickNav.js"></script>

     <!--script for slideshow-->
     <script src="../../../js/slideshow.js"></script>
</body>
</html>
