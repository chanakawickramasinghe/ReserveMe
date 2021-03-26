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
    
    <!--FontAwesome-->
    <script crossorigin="anonymous" src="https://kit.fontawesome.com/70a642cd7c.js"></script>
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

    <!--Start of main-section-->
    <?php 
      if(isset($_GET['hall_id'])){
        $sql = "SELECT * FROM reception_hall WHERE hall_id = ".$_GET['hall_id'];
        $resultProduct = mysqli_query($connection,$sql);
        while($rowProduct  = mysqli_fetch_assoc($resultProduct)){  
          $preorder_available=$rowProduct['preorder_available'];
          echo"<!--Start of main-section-->
          <section class=\"reservation\" style=\"padding-top:38px; margin:auto;\">
              <!--img-->
              <div class=\"reservation-img\"><img src=\"../../../images/halls/{$rowProduct['main_image']}\" /></div>
              <!--text-->
              <div class=\"reservation-text\">
                  <!--heading-->
                  <h3> ". $rowProduct['hall_name'] ."</h3>
                  <!--details-->
                  <p>Opening Hours: 8 a.m - 12 p.m</p>
                  <p>Capacity:  ". $rowProduct['capacity'] ."</p>
                  <p>Contact: ". $rowProduct['contact_no'] ."</p>
                  <p>Advance: ". $rowProduct['advance_fee'] ." LKR</p>
                  <a class=\"hero-button\"  onclick=\"onClickOpenForm()\">Reserve</a>
              </div>
              </section>
          <!--End of main-section-->


          <!--Start of Description section-->
	<div class=\"description\">
		<h1>Make the best memories with us</h1>
        <p>". $rowProduct['description'] ."</p>
	</div>   
	<!--End of Description section--> 

    <!--Start of Gallery section-->
	<section clss=\"Gallerysection\">
		<div class=\"gallery-container\">
            <div class=\"gallery\">
                <figure class=\"gallery__item gallery__item--1\">
                    <img src=\"../../../images/halls/{$rowProduct['main_image']}\" class=\"gallery__img\">
                </figure>
                <figure class=\"gallery__item gallery__item--2\">
                    <img src=\"../../../images/halls/{$rowProduct['image1']}\" class=\"gallery__img\">
                </figure>
                <figure class=\"gallery__item gallery__item--3\">
                    <img src=\"../../../images/halls/{$rowProduct['image2']}\" class=\"gallery__img\">
                </figure>
             </div>
        </div>
	</section>        
	<!--End of Gallery section-->
    
          
          ";
        }
      }
    ?>

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
            <button type="submit" class="btn" style="background:orange;">Login</button>
            <button type="button" class="btn cancel" onclick="onClickCloseForm()">Close</button>
            <div class="signup">Don't have account?
                <a href="../../user-type.php">Signup Now</a>
            </div>
        </form>
    </div>

    <script src="../../../js/onClickOpenForm.js"></script>
    <!--End of pop up login page-->

    <!--Include footer.php-->
    <div><?php include "../../../includes/footer.php" ?></div>

    <!--script for slideshow-->
    <script src="../../../js/onClickNav.js"></script>

     <!--script for slideshow-->
     <script src="../../../js/slideshow.js"></script>
</body>
</html>
