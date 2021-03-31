<?php

include('../../../config/connection.php');
include('../../../public/includes/session.php');

if(isset($_GET['hall_id'])){
    $reservation_date = $_GET['reservation_date'];
    $reservation_time = $_GET['reservation_time'];
    $hall_id = $_GET['hall_id'];
    $advance_fee = $_GET['advance_fee'];
    $hall_sql = "SELECT * from reception_hall WHERE hall_id = $hall_id ";
    $rowhall  = mysqli_fetch_assoc(mysqli_query($connection,$hall_sql));
	checkSession();
    $userID = $_SESSION["userID"]; //session id
	
    $temp_insert_sql = "INSERT INTO temp_hall_reservation(hall_id,customer_id,capacity,reservation_date,reservation_time,advance_fee) 
    VALUES ('$hall_id','$userID','". $rowProduct['capacity'] ."','$reservation_date','$reservation_time','". $rowProduct['advance_fee'] ."')";
  

    if (mysqli_query($connection,$temp_insert_sql) == TRUE) {
        $temp_reserve_id = "SELECT * from temp_hall_reservation WHERE hall_id = $hall_id";
        $temp_hall  = mysqli_fetch_assoc(mysqli_query($connection,$temp_reserve_id));
        $temp_id = $temp_hall['temp_reservation_id'];
            header( "Location:checkout.php?hall_id='$hall_id'&reservation_date=$reservation_date&reservation_time=$reservation_time&temp_orderid=$temp_id");
        
    }else{
            //need to show error message
        }
     
}
?>  