<?php include('../../includes/session.php'); ?>
<?php include('../../includes/connection.php'); 
include('../../includes/message.php');?>

<?php

    $target = "../../images/halls/".basename($_FILES['main_image']['name']);
    $target1 = "../../images/halls/".basename($_FILES['image1']['name']);
    $target2 = "../../images/halls/".basename($_FILES['image2']['name']);

    $hallname = $_POST['hall_name'];
    $address = $_POST['address'];
    $contact = $_POST['contact_no'];
    $address= $_POST['address'];
    $capacity = $_POST['capacity'];
    $description = $_POST['description'];
    $advance = $_POST['advance'];

    $image = $_FILES['main_image']['name'];
    $image1 = $_FILES['image1']['name'];
    $image2 = $_FILES['image2']['name'];

    checkSession();
    $resId = $_SESSION["resID"];

if(isset($_POST['btn-add-hall'])){

            $add_hall_sql = "INSERT INTO reception_hall (res_id, hall_name, 
            contact_no, main_image, image1, image2, address, capacity, description, advance_fee) 
            VALUES ('$resId','$hallname','$contact','$image','$image1','$image2','$address','$capacity','$description','$advance')";
            
            if (mysqli_query($connection,$add_hall_sql) == TRUE) {
                if (move_uploaded_file($_FILES['main_image']['tmp_name'], $target)) {
                    if (move_uploaded_file($_FILES['image1']['tmp_name'], $target1)) {
                        if (move_uploaded_file($_FILES['image2']['tmp_name'], $target2)) {
                            $msg = "Image uploaded successfully";
                            header( "Location:hall-details.php");
                        }
                    }    
                }else{
                    $msg = "Failed to upload image";
                }
            } 
            
            else {
                 $message = base64_encode(urlencode("SQL Error while Registering"));
                 header('Location:hall-details.php?msg=' . $message);
				 exit();
            }
} 


mysqli_close($connection);
   


?>