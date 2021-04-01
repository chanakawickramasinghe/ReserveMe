<?php
 include('../../../config/connection.php');
 include('../../../public/includes/session.php');
 ?>

 <?php 
    
        $cus_id=$_POST['cus_id'];
        $table_id=$_POST['table_id'];
        $guests2=$_POST['guests2'];
        $date2=$_POST['date2'];
        $time2=$_POST['time2'];

        $sql_reservation ="INSERT INTO reservation (cus_id, table_id, no_of_guests, date, time) VALUES ($cus_id,'$table_id',$guests2,'$date2','$time2')";
        $result =($connection->query($sql_reservation));

        $sql_get_reservation_id=mysqli_insert_id($connection);

        $sql_menu_res = "INSERT INTO menu_reservation(reservation_id) VALUES ('$sql_get_reservation_id')";
        $result2 =($connection->query($sql_menu_res));

        $sql_menu_reservation_id=mysqli_insert_id($connection);

        $getCart_sql = "SELECT * from cart WHERE cus_id = $cus_id";
        $reservation_result = ($connection->query($getCart_sql));

        $sql_for_cus_act= "INSERT INTO cus_activity(cus_id, reservation_id, reservation_type, activity) VALUES ('$cus_id',' $sql_get_reservation_id','table','Booked Table $table_id For $guests2')";
        $result_cus_activity = ($connection->query($sql_for_cus_act));

        while($row=$reservation_result->fetch_assoc()){
            $item_id= $row['item_id'];
            $quantity = $row['quantity'];
            $sql_insert_menu = "INSERT INTO temp_pre_menus( menu_res_id, item_id, quantity) VALUES ('$sql_menu_reservation_id','$item_id','$quantity')";
            $result3 =($connection->query($sql_insert_menu));
        }

        $sql_cart_dlt ="DELETE FROM cart WHERE cus_id=$cus_id";
        $result4 =($connection->query($sql_cart_dlt));

        if($result4){
            echo true;
        } else {
            echo "SQL Syntex error";
        }


        
 
 ?>
