<?php include('../includes/connection.php') ?>
<?php include('../includes/session.php') ?>


<?php
    checkSession();
    $userID = $_SESSION["userID"];

    if($_SESSION["userType"] == 'customer'){

        $deactive = "UPDATE customer SET active_status=1 WHERE user_id = $userID";
             
        if(mysqli_query($connection , $deactive) === TRUE) {
            $message = base64_encode(urlencode("Account Activated"));
            header('Location:customer/customer-home.php?msg=' . $message);
            exit();
            }
        else{
            $message = base64_encode(urlencode("Activation Failed"));
            header('Location:../includes/login.php?msg=' . $message);
			exit();
        }
    }
       
        

?>