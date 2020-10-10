<?php

include('../../includes/connection.php');

$id= $_POST['EditID'];
$newName = $_POST['EditName'];
$newAddress = $_POST['EditAddress'];
$newPassword = sha1($_POST['EditPassword']);
$newPassword2 = sha1($_POST['EditPassword2']);
$newContact = $_POST['EditContact'];

     if ($newPassword != $newPassword2){
        $message = base64_encode(urlencode("Passwords Do Not Match"));
        header('Location:customer-profile-edit.php?msg=' . $message);
        exit();
    }
    else{
        $EditQuery= "UPDATE customer SET cusName = '$newName', cusAddress ='$newAddress', cusPassword = '$newPassword', cusContactNo = '$newContact' WHERE cusId = '$id' ";

        if (mysqli_query($connection,$EditQuery) === TRUE) {
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