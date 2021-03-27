<?php include('../../config/connection.php') ?>

<?php

//get date to check
date_default_timezone_set('Asia/Colombo');
$today_date = date("Y-m-d H:i:s");

if(isset($_GET['id'])){
$sql = "UPDATE promotions SET end_date = '$today_date' WHERE promo_id = ".$_GET['id'];
mysqli_query($connection, $sql);

$result = mysqli_query($connection,$sql);

if($result){
    header("Location:promotions.php");
}
else{
    header("Location:promotions.php");
    }
}
?>