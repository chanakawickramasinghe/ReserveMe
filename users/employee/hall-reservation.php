<?php include('../../includes/connection.php') ?>
<?php include('../../includes/session.php') ?>
<?php include('emp-session.php') ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pre-Order Menu</title>
    <link href="../../images/logo.png" rel="shortcut icon"/> 
    <!-- Link the style sheets -->
    <link rel="stylesheet" href="../../CSS/employee.css">
    <link rel="stylesheet" href="../../CSS/main.css">
    <link rel="stylesheet" href="../../CSS/nav.css">   
    <link rel="stylesheet" href="../../CSS/footer.css">
   
</head>

<body>

    <?php include('navigations.php'); ?>

    <!-- Start of sidbar -->
    <div class="sidebar"> 
      <!-- <a href="venues.php">Reservation Status</a><hr>      -->
      <a href="menu.php">Set Menu</a><hr>
      <a href="chat.php">Chat</a><hr>
      <a href="table-reservation.php" >Table Reservation</a><hr>
      <a href="menu-reservation.php" >Pre Orders</a><hr>
      <a href="#" class="active">Hall Reservation</a><hr>

    </div>
    <!-- End of sidebar -->

<div class="content">
   
    <h1> Hall <span style="color:orange"> Reserved </span> </h1>
    
    <!-- <div style="float:right">
        <button type="button" class="hero-button" onclick="window.location.href='table-reservation.php'">Table Reservation</button>
        <button type="button" class="hero-button" onclick="window.location.href='menu-reservation.php'">Pre Orders</button>    
        <button type="button" class="hero-button active" onclick="window.location.href='#'">Hall Reservation</button>
    </div>
    <br><br> -->

    <div class="employee-container">
        <table class="res-table">
            <tr>
                <!-- <th width=".8vw">Reservation id.</th> -->
                <th>Name</th>
                <!-- <th>Email</th> -->
                <th>Mobile No</th>
                <th>Hall Name</th>
                <th>Date </th>
                <th>Session</th>
                <th>Participants(Avg)</th>
                <!-- <th>Event Type</th> -->
            </tr>
            <?php
                $sql = "SELECT hall_reservation.* , customer.user_name, customer.contact_no, reception_hall.hall_name FROM ((hall_reservation INNER JOIN customer ON hall_reservation.customer_id = customer.user_id) INNER JOIN reception_hall ON hall_reservation.hall_id= reception_hall.hall_id)" ;
        
                $sql_query = mysqli_query($connection,$sql);
                while($row = mysqli_fetch_assoc($sql_query)){
                    // $date = $row['reservation_date'];
                    // if($date>= date("Y-m-d")){
                        echo "
                        <tr>             
                            <td>".$row['user_name']."</td>
                            <td>".$row['contact_no']."</td>
                            <td>".$row['hall_name']."</td>
                            <td>".$row['reservation_date']."</td>
                            <td>".$row['reservation_time']."</td>
                            <td>".$row['capacity']."</td>
                        </tr>";

                    // }
                                        
                } 
                
                ?>

        </table>
    </div>
</div>
<div class="footer"> <?php include('../../includes/footer.php'); ?> </div>

</body>
</html>