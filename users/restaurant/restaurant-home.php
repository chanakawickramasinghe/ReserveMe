<?php include('../../includes/connection.php') ?>
<?php include('../../includes/session.php') ?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Home</title>  
    <link href="../../images/logo.png" rel="shortcut icon"/> 
    <!-- Link the style sheets -->
    <link rel="stylesheet" href="../../CSS/pre-order.css">
    <link rel="stylesheet" href="../../CSS/main.css">
    <link rel="stylesheet" href="../../CSS/nav.css">   
    <link rel="stylesheet" href="../../CSS/footer.css">
    <link rel="stylesheet" href="../../CSS/restaurant.css">
</head>

<body>
  <!-- nav bar -->
  <?php include('navigation.php'); ?>
   
    <!-- Start of side bar -->
    <div class="sidebar"> 
      <a href="restaurant-home.php" class="active">Home</a>     
      <a href="add-menu.php">Update Menu</a>
      <a href="res-promo.php">Promotions</a>
      <a href="res-floor-plan.php">Floor Plan</a> 
      <a href="res-reservation.php">Table Reservations</a>
      <a href="hall-reservation.php">Hall Reservations</a>
      <a href="res-review.php">View Reviews</a>   
      <hr>
      <a href="mng-emp.php">Manage Employee</a>
      <a href="hall-details.php">Reception Hall</a>
    </div>
    <!-- End of side bar -->

    <div class="content">
    <div style="margin:20px">      
       
        <center><h2><span style="color:black">Reserve</span><span style="color:orange">Me</span></h2></center>
        <?php

            $res_sql = "SELECT * FROM restaurant"; //get all data from restaurant table

            $res_query = mysqli_query($connection,$res_sql);
            $num_res = mysqli_num_rows($res_query);

            if ($num_res == 0){ //if no data in table
                echo"<p>No Data on Resataurant</p>";
            }

            else { //to see res details
               

                $row = mysqli_fetch_assoc($res_query);
                echo"
                <br><br/><br/>
                <img class=\"img-res-home\" src= \"../../images/restaurant/{$row['res_image']}\" style=\"float:right\">
                
                <table class=\"res-home-tbl\">
                <tr>
                    <th><br/>Address:</th>  
                    <td><br/>".$row['res_add_line1'].", ".$row['city']."</td>
                </tr>
                <tr>
                    <th>Email:</th>  
                    <td>".$row['res_email']."</td> 
                </tr>
                <tr>
                    <th>Telphone No:</th> 
                    <td>".$row['res_tel']."</td>
                </tr>
                <tr>
                    <th>Location:</th> 
                    <td><a href=".$row['res_location']."><font color=\"blue\"><u>Click Here to view Location on Map</u></font></a></td>
                </tr>
                <tr>
                    <th>Opening Hours:</th> 
                    <td>".$row['opening_hour']." - ".$row['closing-hour']."</td>
                </tr>
                <tr>
                    <th>Ratings:</th> 
                    <td>".$row['res_rate']." (".$row['no_of_rates']." Total Ratings) </td>
                </tr>
                <tr>
                    <th></th>
                    <td><button class=\"emp-button\">Edit Details</button></td> 
                </tr>
           
                </table> ";
                
            }
        ?>
        <div></div>
  </div>  
</body>

</html>
