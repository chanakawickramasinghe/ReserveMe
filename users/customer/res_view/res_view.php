<?php include('../../../includes/connection.php'); ?>
<?php include('../../../includes/session.php') ?>
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
		  <a class="navtab" href="../../user-type.php">Register</a>
		  <a class="navtab" href="../../../includes/login.php">Login</a>
		  <a class="navtab" href="../../../includes/contact.php">Contact</a>
		  <a class="navtab" href="../../../includes/about.php">About</a>
		  <a class="navtab" href="javascript:void(0);" id="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a>
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
                  <br>
                  <h4><i class=\"fas fa-clock\"> ". $rowProduct['opening_hour'] ." - ". $rowProduct['closing-hour'] ."</i></h4>
                  <br>
                  <h4><i class=\"fas fa-map-marker-alt\"> ". $rowProduct['city'] ."</i></h4>
                  <br>
                  <h4><i class=\"fas fa-star-half-alt\"> ". $rowProduct['res_rate'] ."</i></h4>
                </div>	
	            </section>";
        }
      }
    ?>
		<!--End of add section-->
    <!--End of main-section-->

    <!--Start of pop up login page-->
    <div class="form-popup" id="myForm">
      <form action="../includes/login-submit.php" method="post" class="form-container">
        <h1>Login</h1>
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>
			  <h3 class="error-msg"><?php include_once('../../../includes/message.php'); ?></h3> 
        <div class="pass">
          <a href="#">Forgot Password?</a>
        </div>
        <button type="submit" class="btn" style="background-color:orange;">Login</button>
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
								  echo"<li><a  href=\"menu.php?res_id={$rowProduct['res_id']}\" target=\"iframeBox\">Menu</a></li>
									<li><a  href=\"floorplan.php?res_id={$rowProduct['res_id']}\" target=\"iframeBox\">Floorplan</a></li>
									<!--<li><a  href=\"directions.php?res_id={$rowProduct['res_id']}\" target=\"iframeBox\">Directions</a></li>
									<li><a  href=\"review/index.html?res_id={$rowProduct['res_id']}\" target=\"iframeBox\">Reviews</a></li>-->";
							  }               
						  }
					  ?>  
		      </ul>
	      </div>
			  <iframe src="menu.php?res_id= <?php echo $_GET['res_id']?>" id="iframeBox" name="iframeBox" class="iframeBox" height="500px" width="100%" title="Iframe Example" frameborder="0" marginwidth="0" marginheight="0"><div></iframe>
	    </div>	
	  </section>
    <!--End of iframe section-->

    <!--start of from section-->
    <section class="reservation">
		  <!--Form-->
		  <div class="col1">
        <h1>Check Availability</h1>
			  <hr>
			  <form action="">
			    <div>
            <select class="dropbtn" name="lounge" id="lounge" required>
              <option value="">Launge</option>
              <option value="10.00 a.m">aaa</option>
              <option value="2.00 p.m">bbb</option>
              <option value="8.00 p.m">ccc</option>
            </select>
			      <select class="dropbtn" name="guests" id="guests" required>
              <option value="">Guests</option>
	            <option value="1">1</option>
              <option value="2">2</option>
              <option value="4">4</option>
              <option value="6">6</option>
            </select>
            <select class="dropbtn" name="Time" id="Time" required>
              <option value="">Time</option>
              <option value="10.00 a.m">10.00 a.m</option>
              <option value="2.00 p.m">2.00 p.m</option>
              <option value="8.00 p.m">8.00 p.m</option>
            </select>
	          <input type="date" id="date" name="date" required>
	        </div>
          <br>
	        <input class="dropbtn" type="submit" id="submit" name="submit" value="Check">
        </form>
		  </div>

      <!--Available tables-->
		  <div class="col2">
        <h1>Available Tables</h1>
        <div class="customRadio">
          <label for="1">1</label><input type="radio" id="1" name="table" value="1">
          <label for="2">2</label><input type="radio" id="2" name="table" value="2">
          <label for="3">3</label><input type="radio" id="3" name="table" value="3">
        </div>
        <br>
        <input class="dropbtn" type="submit" id="reserve" name="reserve" value="reserve" onclick="onClickOpenForm()">
	    </div>
    </section>
    <!--end of form section-->

    <!--Include footer.php-->
    <div><?php include "../../../includes/footer.php" ?></div>

    <!--script for slideshow-->
    <script src="../../../js/slideshow.js"></script>

    <!--script for slideshow-->
    <script src="../../../js/onClickNav.js"></script>

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

