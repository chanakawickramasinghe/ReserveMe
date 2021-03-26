<?php include('../../includes/session.php') ?>
<?php include('../../includes/connection.php') ?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Restaurant-Promotions</title>
        <link rel="stylesheet" href="../../CSS/nav.css">
        <link href="../../CSS/footer.css" rel="stylesheet" type="text/css">  
        <link href="../../images/logo.png" rel="shortcut icon"/>
        <link rel="stylesheet" href="../../CSS/res-promo.css"/>
    </head>
    <body>

  <!-- nav bar -->
  <?php include('navigation.php'); ?>
   
   <!-- Start of side bar -->
   <div class="sidebar"> 
     <a href="restaurant-home.php">Home</a>   
     <a href="add-menu.php">Update the Menu</a>
     <a href="res-promo.php" class="active">Promotions</a>
     <a href="res-floor-plan.php">Floor Plan</a> 
     <a href="res-reservation.php">Reservations</a>
     <a href="hall-reservation.php">Hall Reservations</a>
     <a href="res-review.html">View Reviews</a>   
     <br>
     <hr>
     <a href="mng-emp.php">Manage Employee</a>
     <a href="hall-details.php">Reception Hall</a>
   </div>
   <!-- End of side bar -->

        <br/>
        <div class="content">
            
        <center><h1 style="color:#ffbb01;"><font color="black">Ongoing</font> Promotions</h1></center>
        <br/>  
        <div class="promo-btn-bar">
            <button type="button" class="btn-promos active" onclick="window.location.href='#'">Ongoing Promotion</button>
            <button type="button" class="btn-promos" onclick="window.location.href='res-add-promotions.php'">Add Promotion</button>
            <button type="button" class="btn-promos" onclick="window.location.href='res-past-promo.php'">View Past Promotions</button>
        </div>
        <br/>
            
        <?php

            //get date to check
            date_default_timezone_set('Asia/Colombo');
            $today_date = date("Y-m-d H:i:s");

            $promos = "SELECT * FROM promotions WHERE end_date>'$today_date'"; //check with date

            $promo_query = mysqli_query($connection,$promos);
            $num_promos = mysqli_num_rows($promo_query);

            if ($num_promos == 0){ //if there are no current promotions
                echo"<p>No Past Promotions to Display</p>";
            }

            else { //to see current promos
            echo "
            <table class=\"promo\" id=\"myTable\" border=\"1\">
                <tr>
                    <th>Promo ID</th>
                    <th>Promo Image</th>
                    <th>Post Date & Time</th>
                    <th>End Date & Time</th>
                    <th>Description</th>
                <th>Action</th>
            </tr> ";

            while($row = mysqli_fetch_assoc($promo_query)){
            echo"
            <tr> 
                <td>".$row['promo_id']."</td> 
                <td><img class=\"img-promo\" src= \"../../images/promos/{$row['image']}\" alt=\"image not found\"></td>                     
                <td>".$row['start_date']."</td>
                <td>".$row['end_date']."</td>
                <td>".$row['text']."</td>
                <td><a class=\"btn-promo-remove\" href =res-remove-promo.php?id='".$row['promo_id']."' > Remove </a> </td>

            </tr>";
            }
            echo"
            </table> ";
        }
        ?>
        </div>

    <!--script for onClickNav() for the navigation menu-->
    <script src="../../js/onClickNav.js"></script>

    </body>
</html>
