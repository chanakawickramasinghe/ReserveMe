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
        // GET the user id
        checkSession();
        $cus_id=$_SESSION["userID"];

        // TO display the restaurent details
        $sql = "SELECT * FROM restaurant WHERE res_id ='4'";
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
    ?>
    <!--End of main-section-->

    <!--Start of iframe section-->
    <section class="content">
	    <div class="content-container">	
	        <div class="select">
		        <ul class="select-menu">
					<?php 
						
							$retriewMenu = "SELECT * FROM restaurant WHERE res_id ='4'";
							$resultMenu = mysqli_query($connection,$retriewMenu);
							while($rowProduct  = mysqli_fetch_assoc($resultMenu)){  
								echo"<li><a  href=\"menu.php\" target=\"iframeBox\">Menu</a></li>
									<li><a  href=\"floorplan.php\" target=\"iframeBox\">Floorplan</a></li>";
              
						  }
					?>  
		        </ul>
	        </div>
			<iframe src="menu.php" id="iframeBox" name="iframeBox" class="iframeBox" height="500px" width="100%" title="Iframe Example" frameborder="0" marginwidth="0" marginheight="0"><div></iframe>
	    </div>	
	</section>
	<!--End of iframe section-->


    <!--start of from section-->
    <section class="reservation">
		<!--Form-->
		<div class="col1">
            <h1>Check Availability</h1>
			<hr>
			<form method="POST">
			    <div>
                    <select class="dropbtn" name="floor" id="floor" required>
                        <option value="">Floor</option>
                        <option value="1">Ground Floor</option>
                        <option value="2">1st Floor</option>
                    </select>
			              <select class="dropbtn" name="guests" id="guests" required>
                        <option value="">Guests</option>
                        <?php 
                        $x=1;
                        while ($x<=12){
                          echo "<option value=\"$x\">$x</option>";
                          $x++;
                        }
                        ?>
                    </select>

	                <input type="date" class="dropbtn" id="date" name="date" min="<?php echo date("Y-m-d"); ?>" required>

                  <select class="dropbtn" name="time" id="time" required>
                      <option value="">Time</option>
                      <option value="08:00">8.00 a.m</option>
                      <option value="10:00">10.00 a.m</option>
                      <option value="12:00">12.00 p.m</option>
                      <option value="14:00">2.00 p.m</option>
                      <option value="20:00">8.00 p.m</option>
                      <option value="22:00">10.00 p.m</option>
                  </select>
	          </div>
                <br>
                  <!-- <input type="time" name="time" > -->
	                <input class="dropbtn" type="submit" id="submit" name="submit" value="check" onclick="onClickOpenAvailTab()">
        </form>
		</div>


       <!--Available tables-->
		<div class="col2" id="avail_tab">
        <h1>Available Tables</h1>
      
              <?php

                if(isset($_POST['submit'])){
                  $floor=$_POST['floor'];
                  $guests=$_POST['guests'];
                  $time=$_POST['time'];
                  $date=$_POST['date'];


                  // echo $floor."<br>";
                  // echo $guests."<br>";
                  // echo $time."<br>";
                  // echo $date."<br>";

                // $sql = "INSERT INTO `reservation`(`cus_id`, `table_id`, `no_of_guests`, `date`, `time`) VALUES (2,'GT04',2,'$date','$time')";
                // $result2 = ($connection->query($sql));

                // if($result2){
                //   echo "Hello";
                // } else {
                //   echo "Please check your code";
                // }      

                $sql_select_table= "SELECT table_id FROM res_table WHERE floor_no=$floor AND min_cap<=$guests AND max_cap>=$guests";
                $result=($connection->query($sql_select_table));

                if($result){
                  while($row = $result->fetch_assoc()){
                    $table_id=$row['table_id'];
                    // echo $table_id;

                    $sql_check_table_avail="SELECT table_id FROM reservation WHERE table_id='$table_id' AND date='$date' AND time='$time'";
                    $result1=($connection->query($sql_check_table_avail));
                    $no_rows = mysqli_num_rows($result1);

                    if($no_rows==1){
                      // echo $table_id;
                    } else {
                    

                      echo "<form action=\"reservation_submit.php\" method=\"POST\" > ";
                      echo "<label for=\"$table_id\" class=\"container\">$table_id
                      <input type=\"radio\" id=\"$table_id\" name=\"table_id\" value=\"$table_id\" required>
                      <span class=\"checkmark\"> </span>
                      </label>
                      <br>";

                      // echo $table_id;
                      }
                  }
                } else {
                  echo "SQL syntex error";
                }
              }
              
              ?>         
            
        <input class="dropbtn"  id="reserve" name="reserve" value="Reserve" onclick="onClickOpenForm()">
        <input type="hidden" name="cus_id" value="<?php echo $cus_id;?>" required>
        <input type="hidden" name="guests2" value="<?php echo $guests;?>" required>
        <input type="hidden" name="date2" value="<?php echo $date;?>" required>
        <input type="hidden" name="time2" value="<?php echo $time;?>" required>

            
	    </div>

    </section>
    <!--End of form section-->




    <!--Start of pop up login page-->
    <div class="form-popup" id="myForm">
        <div class="form-container">
            <h2>Do you want to Preorder?</h2>
            <h4>If you press "NO" your reservation will be done</h4>
            <div class="left"><button type="submit" class="food-btn" name="yes" value="yes">Yes</button></div>
            <div class="right"><button type="submit" class="food-btn" name="no" value="no">No</button></div><br>
            <button type="button" class="btn cancel" onclick="onClickCloseForm()">Close</button>
        </div>
    </div>
    <!--End of pop up login page-->

    </form>
    
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
