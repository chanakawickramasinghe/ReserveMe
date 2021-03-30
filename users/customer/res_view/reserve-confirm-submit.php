<?php
 include('../../../includes/connection.php');
 include('../../../includes/session.php');
 ?>

 <?php 
    
        $cus_id=$_POST['cus_id'];
        $table_id=$_POST['table_id'];
        $guests2=$_POST['guests2'];
        $date2=$_POST['date2'];
        $time2=$_POST['time2'];

        $sql_reservation ="INSERT INTO reservation (cus_id, table_id, no_of_guests, date, time) VALUES ($cus_id,'$table_id',$guests2,'$date2','$time2')";
        $result =($connection->query($sql_reservation));

        if($result){
            echo "true";
        } else {
            echo "SQL Syntex error";
        }

        // $sql_cart_table= "SELECT * FROM cart WHERE ";
        // $result=($connection->query($sql_cart_table));

        // if($result){
        //   while($row = $result->fetch_assoc()){
        //     $table_id=$row['table_id'];
        //   }
        // }

        
 
 ?>
