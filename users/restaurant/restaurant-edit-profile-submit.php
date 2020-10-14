<?php

include('../../includes/connection.php');

$id= $_POST['res_id'];
$newName = $_POST['res_name'];
$newAddress1 = $_POST['pnumber'];
$newAddress2 = $_POST['street'];
$newAddress3 = $_POST['city'];
$newContact = $_POST['res_tel'];
$newPassword = sha1($_POST['res_password']);
$newPassword2 = sha1($_POST['res_password2']);
$newContact = $_POST['res_tel'];
$newFloor = $_POST['res_floor'];
$newMenu = $POST['res_menu'];
$newPreorder = $POST['preorder_available'];


     if($newPassword != $newPassword2){
        $message = base64_encode(urlencode("Passwords Do Not Match"));
        header('Location:restaurant-profile-edit.php?msg=' . $message);
        exit();
    }
    else{
        $EditQuery= "UPDATE restaurant SET res_name = '$newName', pnumber ='$newAddress1', street ='$newAddress2', city ='$newAddress3', res_password = '$newPassword', res_tel = '$newContact' WHERE res_id = '$id' ";

        if (mysqli_query($connection,$EditQuery) === TRUE) {
                $message = base64_encode(urlencode("Successfully Edited!"));
				header('Location:restaurant-profile.php?msg=' . $message);
				exit();
            } 
            
            else {
                $message = base64_encode(urlencode("Update Failed"));
				header('Location:restaurant-profile-edit.php?msg=' . $message);
				exit();
            }
    }

mysqli_close($connection);
      
?>