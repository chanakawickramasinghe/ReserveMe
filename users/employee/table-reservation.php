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
      <!-- <a href="employee-home.php" >Employee Home</a> -->
      <!-- <a href="venues.php">Reservation Status</a><hr>      -->
      <a href="menu.php">Set Menu</a><hr>
      <a href="queries.php">Queries</a><hr>
      <a href="table-reservation.php" class="active">Manage Reservation</a><hr>
    </div>
    <!-- End of sidebar -->

<div class="content">

    <h1>Table <span style="color:orange"> Reservations </span> </h1>
    
    <div style="float:right">
        <button type="button" class="hero-button active" onclick="window.location.href='#'">Table Reservation</button>
        <button type="button" class="hero-button" onclick="window.location.href='menu-reservation.php'">Pre Orders</button>    
        <button type="button" class="hero-button" onclick="window.location.href='hall-reservation.php'">Hall Reservation</button>
    </div>
    <br><br>

    
    <div class="employee-container">
    <table class="res-table">
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
                    if($date>= date("Y-m-d")){
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
  

</div>

<div class="footer"> <?php include('../../includes/footer.php'); ?> </div>

</body>
</html>