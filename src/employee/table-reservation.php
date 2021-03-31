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
      <a href="#" class="active" >Table Reservation</a><hr>
      <a href="menu-reservation.php" >Pre Orders</a><hr>
      <a href="hall-reservation.php" >Hall Reservation</a><hr>
    </div>
    <!-- End of sidebar -->

<div class="content">

    <h1>Table <span style="color:orange"> Reservations </span> </h1>
    
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

<div class="footer"> <?php include('../../public/includes/footer.php'); ?> </div>

</body>
</html>