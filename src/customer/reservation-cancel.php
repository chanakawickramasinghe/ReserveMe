<?php include('../../config/connection.php'); ?>
<?php 
    if(isset($_POST['cancel'])){
        $reservation_id = $_POST['reservation_id'];
        // echo $reservation_id;

        $sql_cancel= "DELETE FROM reservation WHERE reservation_id=$reservation_id";
        $result = ($connection->query($sql_cancel));

        if($result){
            header('Location:reservation_details.php');

        } else {
            echo "SQL error";
        }
    }



?>