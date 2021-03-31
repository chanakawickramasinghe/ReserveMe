<?php include('../../config/connection.php') ?>
<?php include('emp-session.php') ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pre-Order Menu</title>
    <link href="../../public/images/logo.png" rel="shortcut icon"/> 
    <!-- Link the style sheets -->
    <link rel="stylesheet" href="../../public/CSS/employee.css">
    <link rel="stylesheet" href="../../public/CSS/main.css">
    <link rel="stylesheet" href="../../public/CSS/nav.css">   
    <link rel="stylesheet" href="../../public/CSS/footer.css">
   
</head>

<body>

    <?php include('navigations.php'); ?>

    <!-- Start of sidbar -->
    <div class="sidebar">
      <a href="menu.php">Set Menu</a><hr>
      <a href="chat.php">Chat</a><hr>
      <a href="table-reservation.php" >Table Reservation</a><hr>
      <a href="menu-reservation.php" >Pre Orders</a><hr>
      <a href="#" class="active">Hall Reservation</a><hr>

    </div>
    <!-- End of sidebar -->

<div class="content">
   
    <h1> Hall <span style="color:orange"> Reserved </span> </h1>

    <div class="employee-container">
        <table class="res-table">
            <tr>
                <th>Name</th>
                <th>Mobile No</th>
                <th>Hall Name</th>
                <th>Date </th>
                <th>Session</th>
                <th>Participants(Avg)</th>
            </tr>
            <?php
                $sql = "SELECT hall_reservation.* , customer.user_name, customer.contact_no, reception_hall.hall_name FROM ((hall_reservation INNER JOIN customer ON hall_reservation.customer_id = customer.user_id) INNER JOIN reception_hall ON hall_reservation.hall_id= reception_hall.hall_id)" ;
        
                $sql_query = mysqli_query($connection,$sql);
                while($row = mysqli_fetch_assoc($sql_query)){
                        echo "
                        <tr>             
                            <td>".$row['user_name']."</td>
                            <td>".$row['contact_no']."</td>
                            <td>".$row['hall_name']."</td>
                            <td>".$row['reservation_date']."</td>
                            <td>".$row['reservation_time']."</td>
                            <td>".$row['capacity']."</td>
                        </tr>";
                                        
                } 
                
                ?>

        </table>
    </div>
</div>
<div class="footer"> <?php include('../../public/includes/footer.php'); ?> </div>

</body>
</html>