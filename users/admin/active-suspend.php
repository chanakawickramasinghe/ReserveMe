<?php

include('../../includes/connection.php');

$id = $_POST['user_id'];

if(isset($_POST['btn-activate-cus-account'])){


    $update_sql = "UPDATE customer SET active_status = '1' WHERE user_id = '13' ";
    
    if (mysqli_query($connection,$update_sql) === TRUE) {
        $message = base64_encode(urlencode("Updated Successful"));
        header('Location:./coadmins.php?msg=' . $message);
        exit();
    } 
    
    else {
         $message = base64_encode(urlencode("SQL Error"));
         header('Location:./coadmins.php?msg=' . $message);
         exit();
    }
}

?>
