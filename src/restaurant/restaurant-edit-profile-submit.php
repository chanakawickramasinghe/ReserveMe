<?php include('../../includes/session.php'); ?>
<?php include('../../includes/connection.php'); 
include('../../includes/message.php');?>

<?php

if(isset($_POST['edit-details'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $location= $_POST['location'];
    $tel = $_POST['tel'];
    $open = $_POST['open'];
    $close = $_POST['close'];

    // $sql ="UPDATE restaurant SET closing'-'hour='$close'";
    $sql = "UPDATE restaurant SET res_name='$name', res_email='$email', res_add_line1='$address', city='$city',
    res_location='$location', res_tel='$tel', opening_hour='$open'";

    if (mysqli_query($connection,$sql) == TRUE) {
        $message = base64_encode(urlencode("Details Changed!"));
        header('Location:restaurant-home.php?msg=' . $message);
        exit();
    } 
    else {
        $message = base64_encode(urlencode("System Error :  Couldn't Change Details!"));
        header('Location:restaurant-edit-profile.php?msg=' . $message);
        exit();
    }
            
} 


if(isset($_POST['change-pword'])){

        $old_pword= MD5($_POST['old-pword']);
        $new_pword1= MD5($_POST['new-pword']);
        $new_pword2= MD5($_POST['confirm-pword']);

        $sqlPword = "SELECT res_password FROM restaurant";
        $sqlPwordQuuery = mysqli_query($connection,$sqlPword);
        $row = mysqli_fetch_assoc($sqlPwordQuuery);

        $db_pword = $row['res_password'];

        if($old_pword != $db_pword) {
            $message = base64_encode(urlencode("Error : Old Password is Incorrect!"));
            header('Location:restaurant-edit-profile.php?msg=' . $message);
		    exit();
        }
        elseif ($new_pword1 != $new_pword2){
            $message = base64_encode(urlencode("Error : Passwords Do Not Match!"));
            header('Location:restaurant-edit-profile.php?msg=' . $message);
		    exit();
        }
        else {
            $sql = "UPDATE restaurant SET res_password='$new_pword1'";
            if (mysqli_query($connection,$sql) == TRUE) {
                $message = base64_encode(urlencode("Password Changed!"));
                header('Location:restaurant-home.php?msg=' . $message);
		        exit();
            } 
            else {
                $message = base64_encode(urlencode("System Error :  Couldn't Change Password!"));
                header('Location:restaurant-home.php?msg=' . $message);
		        exit();
            }
    
        }
       
      
}


if(isset($_POST['change-img'])){

    $target = "../../images/restaurant/".basename($_FILES['image']['name']);
    $image = $_FILES['image']['name'];

    $sql = "UPDATE restaurant SET res_image='$image'";

    if (mysqli_query($connection,$sql) == TRUE) {
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $message = base64_encode(urlencode("Image Uploaded!"));
            header('Location:restaurant-home.php?msg=' . $message);
		    exit();
        }
        else {
            $message = base64_encode(urlencode("Image Not Updated Properly!"));
            header('Location:restaurant-edit-profile.php?msg=' . $message);
		    exit();
        }
        
    }  
    else {
        $message = base64_encode(urlencode("System Error : Couldn't Update Image!"));
        header('Location:restaurant-edit-profile.php?msg=' . $message);
		exit();
    }

}
?>