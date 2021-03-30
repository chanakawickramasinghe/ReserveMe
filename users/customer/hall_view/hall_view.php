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
                  <p>Contact: 011-1111111</p>
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
        <form action="../../../includes/login-submit.php" method="post" class="form-container">
            <h1>Login</h1>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>
            <div class="pass">
                <a href="#">Forgot Password?</a>
            </div>
            <button type="submit" class="btn" style="background:orange;" >Login</button>
            <button type="button" class="btn cancel" onclick="onClickCloseForm()">Close</button>
            <div class="signup">Don't have account?
                <a href="../../../user-type.php">Signup Now</a>
            </div>
        </form>
    </div>

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
                      <option value="08:00">Day</option>
                      <option value="10:00">Evening</option>
                  </select>
	          </div>
                <br>
                  <!-- <input type="time" name="time" > -->
	                <input class="dropbtn" type="submit" id="submit" name="submit" value="check" onclick="onClickOpenAvailTab()">
        </form>
		</div>

        <!--Available tables-->
		<div class="col2" id="avail_tab">
        <h1>Availablity</h1>
      
              <?php

                if(isset($_POST['submit'])){
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
                      <input type=\"radio\" id=\"$table_id\" name=\"table_id\" value=\"$table_id\">
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
