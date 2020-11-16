<?php include('../../includes/session.php') ?>
<?php include('../../includes/connection.php') ?>
 
<?php 
    checkSession();
if (isset($_POST['btn-add-promo'])){
    $target = "../../images/promos/".basename($_FILES['promo_image']['name']);

    $image = $_FILES['promo_image']['name'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $user_id = $_SESSION["id"];

    $promo_sql= "INSERT INTO promotions (start_date, end_date, user_id, company_name, image)
    VALUES ('$start_date','$end_date','$user_id', 'ReserveMe','$image')";

    mysqli_query($connection,$promo_sql);

    if (move_uploaded_file($_FILES['promo_image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
        header( "Location:promotions.php");
        
    }else{
        $msg = "Failed to upload image";
    }

}



?>