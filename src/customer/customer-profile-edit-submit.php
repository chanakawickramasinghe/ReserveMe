<?php

include('../../config/connection.php');

$id= $_POST['EditID'];
$newName = $_POST['EditName'];
$newFirstName = $_POST['EditFirstName'];
$newLastName = $_POST['EditLastName'];
$newEmail = $_POST['EditEmail'];
$newPassword = md5($_POST['EditPassword']);
$newPassword2 = md5($_POST['EditPassword2']);
$newContact = $_POST['EditContact'];
$newDOB = $_POST['EditDOB'];
$fullname = $newFirstName." ".$newLastName;

     if ($newPassword != $newPassword2){
        $message = base64_encode(urlencode("Passwords Do Not Match"));
        header('Location:customer-profile-edit.php?msg=' . $message);
        exit();
    }
    else{
        $EditQuery= "UPDATE customer SET user_name = '$fullname', first_name ='$newFirstName', last_name ='$newLastName', email ='$newEmail', password = '$newPassword', contact_no = '$newContact', dob ='$newDOB' WHERE user_id = '$id' ";
        
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