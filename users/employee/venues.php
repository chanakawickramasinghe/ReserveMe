<?php include('../../includes/connection.php') ?>
<?php include('../../includes/session.php') ?>
<?php include('emp-session.php') ?>



<html>
    <head>
        <title>Employee Profile</title>
        <link href="../../images/logo.png" rel="shortcut icon"/> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Link the style sheets -->
        <link rel="stylesheet" href="../../CSS/employee.css">
        <link rel="stylesheet" href="../../CSS/main.css">
        <link rel="stylesheet" href="../../CSS/nav.css">   
        <link rel="stylesheet" href="../../CSS/footer.css">
        <link href="../../css/res_view.css" rel="stylesheet" type="text/css"/>

    </head>
    
    <body>  
        
    <?php include('navigations.php'); ?>

    <!-- Start of sidbar -->
    <div class="sidebar"> 
      <a href="venues.php" class="active">Reservation status</a><hr>   
      <a href="menu.php">Set Menu</a><hr>
      <a href="queries.php">Queries</a><hr>
      <a href="table-reservation.php">Manage Reservation</a><hr>
    </div>
    <!-- End of sidebar -->
    
    <div class="content">



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

                checkSession();
                $cus_id=$_SESSION["emp_id"];
                
                if(isset($_POST['submit'])){
                  $floor=$_POST['floor'];
                  $guests=$_POST['guests'];
                  $time=$_POST['time'];
                  $date=$_POST['date'];  
                
                echo "<p> Number of Person : <span style=\"color:blue\">$guests </span> <br> @ Date : <span style=\"color:blue\"> $date </span> <br> @ Time : <span style=\"color:blue\"> $time </span>";

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

                      echo "<form action=\"../customer/res_view/reservation-submit.php\" method=\"POST\" > ";
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
            
        <input type="submit" class="dropbtn"  id="no" name="no" value="Reserve" >
        <input type="hidden" id="cus_id" name="cus_id" value="<?php echo $cus_id;?>" required>
        <input type="hidden" id="guests2" name="guests2" value="<?php echo $guests;?>" required>
        <input type="hidden" id="date2" name="date2" value="<?php echo $date;?>" required>
        <input type="hidden" id="time2" name="time2" value="<?php echo $time;?>" required>

            
	    </div>
            </form>
    </section>
    <!--End of form section-->    
    

        <h3>Hall Reservation Visible</h3>
        <label class="switch">
                <input type="checkbox" checked>
                <span class="slider round"></span>
        </label>

        <h3>Table Reservation Visible</h3>
        <label class="switch">
                <input type="checkbox" checked>
                <span class="slider round"></span>
        </label>

   
    </div>   
        
    <div class="footer"> <?php include('../../includes/footer.php'); ?> </div> 

</body>
</html> 