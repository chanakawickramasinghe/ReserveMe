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
        <!-- Link the icon style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>

    <?php include('navigations.php'); ?>

    <!-- Start of sidbar -->
    <div class="sidebar"> 
      <a href="menu.php">Set Menu</a><hr>
      <a href="chat.php">Chat</a><hr>
      <a href="table-reservation.php" >Table Reservation</a><hr>
      <a href="#" class="active">Pre Orders</a><hr>
      <a href="hall-reservation.php" >Hall Reservation</a><hr>      
    </div>
    <!-- End of sidebar -->

<div class="content">

    <h1>Pre Orders-<span style="color:orange"> Menu </span> </h1>
    <div class="employee-container">
    <table class="res-table">
        <tr>
            <th>Name</th>
            <th>Date </th>
            <th>Time</th> 
            <th>Mobile No</th>
            <th>Table Id</th>
            <th>Members</th>
            <th>Menues</th>
        </tr>
        
        <?php

                $sql2 = "SELECT menu_reservation.* FROM menu_reservation INNER JOIN reservation
                ON reservation.reservation_id = menu_reservation.reservation_id" ;

                
                $sql_query2 = mysqli_query($connection,$sql2);
                while($row2 = mysqli_fetch_assoc($sql_query2)){
                    $menu_res_id= $row2['menu_res_id'];
                    $reservation_id= $row2['reservation_id'];

                    $sql = "SELECT reservation.* , customer.user_name, customer.contact_no FROM reservation INNER JOIN customer
                    ON reservation.cus_id = customer.user_id WHERE reservation_id= $reservation_id order by date " ;
            
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
                                            <td>";
                                            $sql_menu ="SELECT temp_pre_menus.* , menu.item_name FROM temp_pre_menus INNER JOIN menu
                                            ON temp_pre_menus.item_id = menu.item_id WHERE menu_res_id= $menu_res_id";
                                            $sql_get_menu = mysqli_query($connection,$sql_menu);
                                            while($row3 = mysqli_fetch_assoc($sql_get_menu)){
                                                echo $row3['item_name']."-";
                                                echo $row3['quantity']."<br>";
                                            }

                                    echo "
                                            </td>
                                        </tr>";
    
    
                        }                    
                    } 


                }



                
                ?>
    </table>
    </div>

</div>

<div class="footer"> <?php include('../../public/includes/footer.php'); ?> </div>
   
</body>
</html>