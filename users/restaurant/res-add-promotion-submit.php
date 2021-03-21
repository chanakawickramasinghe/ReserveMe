<?php

include('../../includes/connection.php');

$target = "../../images/promos/".basename($_FILES['promo_image']['name']);
$image = $_FILES['promo_image']['name'];

$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$desc = $_POST['desc'];

if(isset($_POST['res-add-promo-submit'])){

    $add_promo_sql = "INSERT INTO promotions (start_date, end_date, text, image) 
    VALUES ('$start_date','$end_date','$desc','$image')";
            
    if (mysqli_query($connection,$add_promo_sql) == TRUE) {
        if (move_uploaded_file($_FILES['promo_image']['tmp_name'], $target)) {
            header( "Location:res-promo.php");
        }
        else{
            //need to show error message
        }
    } 
            
    else {
        // $message = base64_encode(urlencode("SQL Error while Registering"));
        // header('Location:hall-details.php?msg=' . $message);        
        header( "res-ad-promotions.php"); //have to add error
		exit();
    }
}

?>