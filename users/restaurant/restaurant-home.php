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
    <link rel="stylesheet" href="../../CSS/employee.css">
    <link rel="stylesheet" href="../../CSS/main.css">
    <link rel="stylesheet" href="../../CSS/nav.css">   
    <link rel="stylesheet" href="../../CSS/footer.css">

</head>

<body>
  <!-- nav bar -->
  <?php include('navigation.php'); ?>
   
    <!-- Start of side bar -->
    <div class="sidebar"> 
      <a href="restaurant-home.php" class="active">Home</a> 
      <a href="add-preordermenu.php">Pre - Order Menu</a>    
      <a href="add-menu.php">Update the Menu</a>
      <a href="res-promo.php">Promotions</a>
      <a href="res-floor-plan.php">Floor Plan</a> 
      <a href="res-reservation.php">Reservations</a>
      <a href="res-review.html">View Reviews</a>   
      <br>
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
                echo "
                <table border=\"1\">
                <tr>
                    <th>Restaurant Name</th>
                    <th>Restaurant Email</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Restaurant location</th>
                    <th>Telephone Number</th>
                    <th>Image</th>
                    <th>Rating</th>
                    <th>No. of Rates</th>
                    <th>Opening time</th>
                    <th>Closing time</th>
                </tr> ";

                $row = mysqli_fetch_assoc($res_query);
                echo"
                <tr> 
                    <td>".$row['res_name']."</td> 
                    <td>".$row['res_email']."</td> 
                    <td>".$row['res_add_line1']."</td> 
                    <td>".$row['city']."</td> 
                    <td>".$row['res_location']."</td> 
                    <td>".$row['res_tel']."</td> 
                    <td><img class=\"img-promo\" src= \"../../images/restaurant/{$row['res_image']}\"></td>                     
                    <td>".$row['res_rate']."</td>
                    <td>".$row['no_of_rates']."</td>
                    <td>".$row['opening_hour']."</td>
                    <td>".$row['closing-hour']."</td>

                </tr>";
                
                echo"
                </table> ";
            }
        ?>
          

    <?php include('../../includes/footer.php'); ?>
  </div>  
</body>

</html>
