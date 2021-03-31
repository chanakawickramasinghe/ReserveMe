<?php include('res-session.php'); ?>
<?php include('../../config/connection.php'); 
include('../../public/includes/message.php');?>


<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Restaurant-Reservation</title>
        <link href="../../public/images/logo.png" rel="shortcut icon"/>
        <link rel="stylesheet" href="../../public/CSS/res-promo.css"/>
            <!-- Link the style sheets -->
        <link rel="stylesheet" href="../../public/CSS/pre-order.css">
        <link rel="stylesheet" href="../../public/CSS/main.css">
        <link rel="stylesheet" href="../../public/CSS/nav.css">   
        <link rel="stylesheet" href="../../public/CSS/footer.css">
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
      <a href="res-reservation.php" class="active">Table Reservations</a>
      <a href="hall-reservation.php">Hall Reservations</a>
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
            <div class="promo-btn-bar">
                <button type="button" class="btn-promos active" onclick="window.location.href='#'">Ongoing Reservations</button>
                <button type="button" class="btn-promos" onclick="window.location.href='res-fut-res.php'">Future Reservations</button>
                <button type="button" class="btn-promos" onclick="window.location.href='res-past-res.php'">Past Reservation</button>
            </div>
            <br><br><br>

            <table class="promo" id="ongoing">
        <tr>
            <th>Name</th>
            <th>Date </th>
            <th>Time</th> 
            <th>Mobile No</th>
            <th>Table Id</th>
            <th>Members</th>
        </tr>
        
        <?php
                $sql = "SELECT reservation.* , customer.user_name, customer.contact_no FROM reservation INNER JOIN customer
                ON reservation.cus_id = customer.user_id" ;
        
                $sql_query = mysqli_query($connection,$sql);
                while($row = mysqli_fetch_assoc($sql_query)){
                    $date = $row['date'];
                    if($date== date("Y-m-d")){
                        echo "
                        <tr>             
                            <td>".$row['user_name']."</td>
                            <td>".$row['date']."</td>
                            <td>".$row['time']."</td>
                            <td>".$row['contact_no']."</td>
                            <td>".$row['table_id']."</td>
                            <td>".$row['no_of_guests']."</td>
                        </tr>";

                    }                    
                } 
                
                ?>
    </table>


    </div>
    <!--script for onClickNav() for the navigation menu-->
    <script src="../../public/js/onClickNav.js"></script>

    </body>
</html>
