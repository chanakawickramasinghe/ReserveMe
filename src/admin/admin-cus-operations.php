<?php include('../../public/includes/session.php') ?>
<?php include('../../config/connection.php');


$cus_id = $_POST['user_id'];
echo $cus_id;

if(isset($_POST['btn-activate-cus-account'])){


    $sql = "UPDATE customer SET active_status='1' WHERE user_id='$cus_id'";

    if (mysqli_query($connection,$sql) == TRUE) {
        $message = base64_encode(urlencode("Account Activated"));
        header('Location:./admin-view-customer.php?msg=' . $message);
        echo "Success";
        exit();
    } 
    
    else {
         $message = base64_encode(urlencode("Failed to Activate"));
         header('Location:./admin-view-customer.php?msg=' . $message);
         exit();
    }
}

if(isset($_POST['btn-suspend-cus-account'])){


    $sql = "UPDATE customer SET active_status='0' WHERE user_id='$cus_id'";

    if (mysqli_query($connection,$sql) == TRUE) {
        $message = base64_encode(urlencode("Account Suspended"));
        header('Location:./admin-view-customer.php?msg=' . $message);
        echo "Success";
        exit();
    } 
    
    else {
         $message = base64_encode(urlencode("Failed to Suspend"));
         header('Location:./admin-view-customer.php?msg=' . $message);
         exit();
    }
}


 mysqli_close($connection);

?>