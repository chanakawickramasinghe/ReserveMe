<?php include('../../includes/connection.php') ?>

<?php

if(isset($_GET['id'])){
    
$remove_sql = "DELETE FROM menu WHERE promo_id = ".$_GET['id'];
mysqli_query($connection, $remove_sql);

$result = mysqli_query($connection,$remove_sql);

if($result){
    header("Location:add-menu.php");
}
else{
    header("Location:add-menu.php");
    }
}
?>