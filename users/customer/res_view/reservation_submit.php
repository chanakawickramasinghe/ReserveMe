<?php include('../../../includes/connection.php'); ?>
<?php include('../../../includes/session.php') ?>

<?php
    if(isset($_POST['no'])){
        $table_id=$_POST['table_id'];
        $cus_id =$_POST['cus_id'];
        $guests = $_POST['guests2'];
        $date = $_POST['date2'];
        $time = $_POST['time2'];

        // echo $table_id;
        // echo $cus_id;
        // echo $guests;
        // echo $date;
        // echo $time;
        $sql_reservqtion ="INSERT INTO `reservation`(cus_id, table_id, no_of_guests, date, time) VALUES ($cus_id,'$table_id',$guests,'$date','$time')";
        $result =($connection->query($sql_reservqtion));

        if($result){
            header("Location:../success.php");
        } else {
            echo "SQL Syntex error";
        }
    }
?>

<?php

    if(isset($_POST['yes'])){
        $table_id=$_POST['table_id'];
        $cus_id =$_POST['cus_id'];
        $guests = $_POST['guests2'];
        $date = $_POST['date2'];
        $time = $_POST['time2'];

        header("Location:preorder.php?table=$table_id&cus_id=$cus_id&guests=$guests&date=$date&time=$time");
    }
?>