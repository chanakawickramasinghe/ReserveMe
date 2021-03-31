<?php include('../../../config/connection.php'); ?>
<?php include('../../../public/includes/session.php') ?>

<?php
    if(isset($_POST['no'])){
        $table_id=$_POST['table_id'];
        $cus_id =$_POST['cus_id'];
        $guests = $_POST['guests2'];
        $date = $_POST['date2'];
        $time = $_POST['time2'];


        $sql_reservation ="INSERT INTO `reservation`(cus_id, table_id, no_of_guests, date, time) VALUES ($cus_id,'$table_id',$guests,'$date','$time')";
        $result =($connection->query($sql_reservation));

        if($result){
            header("Location:../reservation_details.php");
        } else {
            echo "SQL Syntex error";
        }
    }
?>

<?php

    if(isset($_POST['yes'])){

        header('Location:preorder.php');
    }
?>