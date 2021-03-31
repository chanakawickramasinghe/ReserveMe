<?php include('../../includes/session.php') ?>
<?php include('../../includes/connection.php') ?>


<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Restaurant-Reservation</title>
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
      <a href="add-menu.php">Update Menu</a>
      <a href="res-promo.php">Promotions</a>
      <a href="res-floor-plan.php">Floor Plan</a> 
      <a href="res-reservation.php">Table Reservations</a>
      <a href="hall-reservation.php" class="active">Hall Reservations</a>
      <a href="res-review.php">View Reviews</a>   
      <hr>
      <a href="mng-emp.php">Manage Employee</a>
      <a href="chat.php">Chat</a>
      <a href="hall-details.php">Reception Hall</a>
    </div>
   <!-- End of side bar -->
   <div class="content">
    <!-- <div style="margin:20px">       -->

        <!-- <div class="content-div"> -->
            <br><br>        
            <center><h1 style="color:#ffbb01;"><font color="black">Ongoing</font> Reservations</h1></center>
            <br><br>
            <!-- <div class="promo-btn-bar">
                <button type="button" class="btn-promo" onclick="window.location.href='res-fut-res.php'">Future Reservations</button>
                <button type="button" class="btn-promo" onclick="window.location.href='res-past-res.php'">Past Reservation</button>
            </div>
            <br><br><br><br><br> -->

            <table class="promo" id="myTable">
            <tr>
                <!-- <th width=".8vw">Reservation id.</th> -->
                <th>Name</th>
                <!-- <th>Email</th> -->
                <th>Mobile No</th>
                <th>Hall Name</th>
                <th>Date </th>
                <th>Session</th>
                <th>Participants(Avg)</th>
                <th>Status</th>
            </tr>
            <?php
                $sql = "SELECT hall_reservation.* , customer.user_name, customer.contact_no, reception_hall.hall_name FROM ((hall_reservation INNER JOIN customer ON hall_reservation.customer_id = customer.user_id) INNER JOIN reception_hall ON hall_reservation.hall_id= reception_hall.hall_id) ORDER BY reservation_date" ;
        
                $sql_query = mysqli_query($connection,$sql);
                while($row = mysqli_fetch_assoc($sql_query)){
                        echo "
                        <tr>             
                            <td>".$row['user_name']."</td>
                            <td>".$row['contact_no']."</td>
                            <td>".$row['hall_name']."</td>
                            <td>".$row['reservation_date']."</td>
                            <td>".$row['reservation_time']."</td>
                            <td>".$row['capacity']."</td>";
                            $date = $row['reservation_date'];
                            if($date> date("Y-m-d")){
                                echo "<td> In future</td>";
                            } elseif ($date== date("Y-m-d")){
                                echo "<td>Today</td>";
                            } else {
                                echo "<td>Past</td>";
                            }


                        echo "</tr>";                                        
                } 
                
                ?>

        </table>
        </div>
    <!--script for onClickNav() for the navigation menu-->
    <script src="../../js/onClickNav.js"></script>

    </body>
</html>
