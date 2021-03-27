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
		<a class="navtab" href="javascript:void(0);" id="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a>
	</div>
    <!--End of nav-->

    <!--Start of main-section-->
    <?php 
      if(isset($_GET['res_id'])){
        $sql = "SELECT * FROM restaurant WHERE res_id = ".$_GET['res_id'];
        $resultProduct = mysqli_query($connection,$sql);
        while($rowProduct  = mysqli_fetch_assoc($resultProduct)){  
          $preorder_available=$rowProduct['preorder_available'];
          echo"<section class=\"main\">
                <div class=\"m-img\">       
                  <img class=\"food-img\" src= \"../../../images/restaurant/{$rowProduct['res_image']}\">
                </div>
                <div class=\"m-text\">
                <br>
                  <h4><i class=\"fas fa-map-marker-alt\"> ". $rowProduct['res_add_line1'] ."". $rowProduct['res_add_line2'] ." ". $rowProduct['city'] ."</i></h4>
                  <br>
                  <h4><i class=\"fas fa-clock\"> ". $rowProduct['opening_hour'] ." - ". $rowProduct['closing-hour'] ."</i></h4>                  
                  <br>
                  <h4><i class=\"fas fa-star-half-alt\"> ". $rowProduct['res_rate'] ."</i></h4>
                </div>	
                <div class=\"m-text2\">
                  <br>
                  <h4><i class=\"fas fa-at\"> ". $rowProduct['res_email'] ."</i></h4>
                  <br>
                  <h4><i class=\"fas fa-phone\"> ". $rowProduct['res_tel'] ."</i></h4>
                  <br>";
                  if($preorder_available == 1){
                    echo "<h4><i class=\"fas fa-utensils\"> Preorder Available </i></h4>";
                  }else{
                    echo "<h4><i class=\"fas fa-utensils\"> Preorder Unavailable </i></h4>";
                  }
                  
                echo"</div>	
	            </section>";
        }
      }
    ?>
    <!--End of main-section-->

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
									<li><a  href=\"floorplan.php?res_id={$rowProduct['res_id']}\" target=\"iframeBox\">Floorplan</a></li>";
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
			<form>
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
	            <input class="dropbtn" type="submit" id="submit" name="submit" value="Check" onclick="toggleSection()">
            </form>
		</div>

        <!--Available tables-->
		<div class="col2" style="display:none" id="availableSection">
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
    <!--End of form section-->

    <!--Start of pop up preorder selection page-->
    <div class="form-popup" id="myForm" >
        <div class="form-container">
            <h1>Do you want to Preorder?</h1>
            <div class="left"><button type="submit" class="food-btn" onclick="window.location.href='preorder.php'">Yes</button></div>
            <div class="right"><button type="submit" class="food-btn" onclick="window.location.href='../success.php'">No</button></div>
            <button type="button" class="btn cancel" onclick="onClickCloseForm()">Close</button>
        </div>
    </div>
    <!--End of pop up login page-->
    
    <script src="../../../js/onClickOpenForm.js"></script>
    <!--End of pop up login page-->

    <!--Include footer.php-->
    <div><?php include "../../../includes/footer.php" ?></div>

    <!--script for slideshow-->
    <script src="../../../js/onClickNav.js"></script>

    <script>
      function toggleSection() {
    // get the availableSection
    var mySection = document.getElementById('availableSection');

    // get the current value of the availableSection's display property
    var displaySetting = mySection.style.display;

    
    // now display availableSection
    if (displaySetting == 'none') {
      // availableSection is visible.
      mySection.style.display = 'block';
      
    }
    
  }

    </script>
</body>
</html>
