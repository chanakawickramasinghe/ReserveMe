<?php include('../../../config/connection.php'); ?>
<!DOCTYPE html> 
<html>
<head>
    <meta charset="utf-8"/>
    <meta content="IE-edge" http-equiv="X-UA-Compatible"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>ReserveMe</title>
    <!--web-icon-->
    <link href="../../../public/images/logo.png" rel="shortcut icon"/>
    <!--stylesheet-->
    <link href="../../../public/css/res_view.css" rel="stylesheet" type="text/css"/>
    <link href="../../../public/css/nav.css" rel="stylesheet" type="text/css"/>
    <link href="../../../public/css/footer.css" rel="stylesheet" type="text/css"/>
    
    <!--FontAwesome-->
    <script crossorigin="anonymous" src="https://kit.fontawesome.com/70a642cd7c.js"></script>
</head>
<body>
    <!--Start of nav-->
    <div class="topnav" id="myTopnav">
        <a href="../../../index.php"><img class = "logo" src="../../../public/images/logo.png"></a>
		<a class="navtab" href="../customerReg.php">Register</a>
		<a class="navtab" href="../../../public/includes/login.php">Login</a>
		<a class="navtab" href="../../../public/includes/contact.php">Contact</a>
		<a class="navtab" href="../../../public/includes/about.php">About</a>
		<a class="navtab" href="javascript:void(0);" id="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a>  
    </div>
    <!--End of nav-->
    <br><br><br>
    <!--Start of main-section-->
    <?php 
      if(isset($_GET['hall_id'])){
        $sql = "SELECT * FROM reception_hall WHERE hall_id = ".$_GET['hall_id'];
        $resultProduct = mysqli_query($connection,$sql);
        while($rowProduct  = mysqli_fetch_assoc($resultProduct)){  
          echo"<!--Start of main-section-->
          <section class=\"reservation\" style=\"padding-top:38px; margin:auto;\">
              <!--img-->
              <div class=\"reservation-img\"><img src=\"../../../public/images/halls/{$rowProduct['main_image']}\" /></div>
              <!--text-->
              <div class=\"reservation-text\">
                  <!--heading-->
                  <h3> ". $rowProduct['hall_name'] ."</h3>
                  <!--details-->
                  <p>Opening Hours: 8 a.m - 12 p.m</p>
                  <p>Capacity:  ". $rowProduct['capacity'] ."</p>
                  <p>Contact: ". $rowProduct['contact_no'] ."</p>
                  <p>Advance Payment: ". $rowProduct['advance_fee'] ." LKR NON-REFUNDABLE</p> 
                  <p>Total Payment: Depends on customer requirement. Please feel free to contact us</p> 
                  
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
                    <img src=\"../../../public/images/halls/{$rowProduct['image1']}\" class=\"gallery__img\">
                </figure>
                <figure class=\"gallery__item gallery__item--2\">
                    <img src=\"../../../public/images/halls/{$rowProduct['image2']}\" class=\"gallery__img\">
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
      <form action="../../../public/includes/login_submit_hall_login.php?hall_id=<?php echo $_GET['hall_id']?>" method="post" class="form-container">
        <h1>Login</h1>
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>
        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>
			  <h3 class="error-msg"><?php include_once('../../../public/includes/message.php'); ?></h3> 
        <div class="pass">
          <a href="../reset/email_verify.php">Forgot Password?</a>
        </div>
        <button type="submit" class="btn" style="background-color:orange;" name="submit">Login</button>
        <button type="button" class="btn cancel" onclick="onClickCloseForm()">Close</button>
        <div class="signup">Don't have account?
          <a href="../customerReg.php">Signup Now</a>
        </div>
      </form>
    </div>

    <script src="../../../public/js/onClickOpenForm.js"></script>
    <!--End of pop up login page-->

    <!--start of from section-->
    <section class="reservation">
		<!--Form-->
		<div class="col1">
      <h1>Check Availability</h1>
			<hr>
			<form method="POST">
			  <div>
          <input type="date" class="dropbtn" id="date" name="date" min="<?php echo date("Y-m-d"); ?>" required>

          <select class="dropbtn" name="time" id="time" required>
            <option value="">Time</option>
            <option value="Day">Day</option>
            <option value="Evening">Evening</option>
          </select>
	      </div>
        <br>
        <!-- <input type="time" name="time" > -->
	      <input class="dropbtn" type="submit" id="submit" name="submit" value="Check" onclick="onClickOpenAvailTab()">
      </form>
		</div>


    <!--Available tables-->
		<div class="col2" id="avail_tab">
        <h1>Availability</h1>
          <?php
            if(isset($_POST['submit'])){
              $time=$_POST['time'];
              $date=$_POST['date'];
              $hall_id=$_GET['hall_id'];

              $sql_select_table= "SELECT * FROM hall_reservation WHERE hall_id = '$hall_id' AND reservation_date = '$date' AND reservation_time = '$time'";
              $result=($connection->query($sql_select_table));
              $no_rows = mysqli_num_rows($result);

              if($no_rows==1){
                echo "Sorry! Already Booked";
              } else {
                echo "Available
                <input type=\"button\" class=\"dropbtn\"  id=\"reserve\" name=\"reserve\" value=\"Reserve\" onclick=\"onClickOpenForm()\">";
              }
            }
          ?>         
    </div>
    </section>
    <!--End of form section-->

    <!--Include footer.php-->
    <div><?php include "../../../public/includes/footer.php" ?></div>

    <!--script for nav-->
    <script src="../../../public/js/onClickNav.js"></script>

    <script>/* When the user clicks on the button,toggle between hiding and showing the dropdown content */
		  function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
      }

      function myFunction2() {
        document.getElementById("myDropdown2").classList.toggle("show");
      }

      // Close the dropdown menu if the user clicks outside of it
      window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
          var dropdowns = document.getElementsByClassName("dropdown-content");
          var i;
          for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
              openDropdown.classList.remove('show');
            }
          }
        }
      }
    </script>

</body>
</html>
