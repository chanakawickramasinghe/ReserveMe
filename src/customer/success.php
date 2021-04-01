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
    
    $reservation_insert_sql = "INSERT INTO hall_reservation(hall_id,customer_id,capacity,payment,reservation_date,reservation_time) 
    VALUES ('$hall_id','$userID','$capacity','$advacefee','$reservation_date','$reservation_time')";
    
    $sql_get_reservation_id=mysqli_insert_id($connection);

    $sql_for_cus_act= "INSERT INTO cus_activity(cus_id, reservation_id, reservation_type, activity) VALUES ('$userID','$sql_get_reservation_id','Hall','Booked Hall $hall_id For $capacity')";
    $result_cus_activity = ($connection->query($sql_for_cus_act));



    if (mysqli_query($connection,$reservation_insert_sql) == TRUE) {
        $delete_temp_reservation_sql = "DELETE from temp_hall_reservation WHERE temp_reservation_id = $order_id ";
        $delete_reservation_query  = mysqli_query($connection,$delete_temp_reservation_sql);


    }else{
            echo "Page error";//need to show error message
        }
    header('Location:reservation_details.php');
    
     
}

?>  

