<?php

include('../../includes/connection.php');

$id= $_POST['EditID'];
$newName = $_POST['EditName'];
$newEmail = $_POST['EditEmail'];
$newPassword = md5($_POST['EditPassword']);
$newPassword2 = md5($_POST['EditPassword2']);
$newContact = $_POST['EditContact'];
$newPNo = $_POST['EditPostalNumber'];
$newStreet = $_POST['EditStreet'];
$newCity = $_POST['EditCity'];

     if ($newPassword != $newPassword2){
        $message = base64_encode(urlencode("Passwords Do Not Match"));
        header('Location:customer-profile-edit.php?msg=' . $message);
        exit();
    }
    else{
        $EditQuery= "UPDATE customer SET user_name = '$newName', email ='$newEmail', password = '$newPassword', contact_no = '$newContact', postal_number = '$newPNo', street = '$newStreet', city = '$newCity' WHERE user_id = '$id' ";
        
        if (mysqli_query($connection,$EditQuery) === TRUE) {
                $_SESSION["name"] = $newName;
                $message = base64_encode(urlencode("Successfully Edited!"));
				header('Location:customer-profile.php?msg=' . $message);
				exit();
            } 
            
            else {
                $message = base64_encode(urlencode("Update Failed"));
				header('Location:customer-profile-edit.php?msg=' . $message);
				exit();
            }
    }



mysqli_close($connection);
    
    
?>