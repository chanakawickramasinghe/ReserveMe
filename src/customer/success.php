<?php
    include('../../config/connection.php');
    include('../../public/includes/session.php');

    if(isset($_GET['order_id'])){
    $order_id = $_GET['order_id'];
    $reservation_sql = "SELECT * from temp_hall_reservation WHERE temp_reservation_id = $order_id ";
    $reservation_result  = mysqli_fetch_assoc(mysqli_query($connection,$reservation_sql));
    $hall_id = $reservation_result['hall_id'];
    $capacity = $reservation_result['capacity'];
    $reservation_date= $reservation_result['reservation_date'];
    $reservation_time= $reservation_result['reservation_time'];
    $advacefee= $reservation_result['advance_fee'];
	checkSession();
    $userID = $_SESSION["userID"]; //session id
    echo $userID;
    echo $order_id;
    echo $hall_id;
    echo $capacity;
    echo $reservation_date;
    echo $reservation_time;
    echo $advacefee;
    
    $reservation_insert_sql = "INSERT INTO hall_reservation(hall_id,customer_id,capacity,payment,reservation_date,reservation_time) 
    VALUES ('$hall_id','$userID','$capacity','$advacefee','$reservation_date','$reservation_time')";


    if (mysqli_query($connection,$reservation_insert_sql) == TRUE) {
        $delete_temp_reservation_sql = "DELETE from temp_hall_reservation WHERE temp_reservation_id = $order_id ";
        $delete_reservation_query  = mysqli_query($connection,$delete_temp_reservation_sql);


    }else{
            echo "Page error";//need to show error message
        }
    header('Location:reservation_details.php');
    
     
}
// echo "order_id not set";
?>  

