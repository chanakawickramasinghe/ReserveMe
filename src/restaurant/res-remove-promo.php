<?php include('res-session.php'); ?>
<?php include('../../config/connection.php'); 
include('../../public/includes/message.php');?>

<?php

//get date to check
date_default_timezone_set('Asia/Colombo');
$today_date = date("Y-m-d H:i:s");

if(isset($_GET['id'])){
$sql = "UPDATE promotions SET end_date = '$today_date' WHERE promo_id = ".$_GET['id'];
mysqli_query($connection, $sql);

$result = mysqli_query($connection,$sql);

if($result){
    header("Location:res-promo.php");
}
else{
    header("Location:res-promo.php");
    }
}
?>