<?php include('../../includes/connection.php') ?>
<?php include('../../includes/session.php') ?>


<?php
    checkSession();
    $userID = $_SESSION["userID"];
       
        $deactive = "UPDATE customer SET active_status=0 WHERE user_id = $userID";
             
        if(mysqli_query($connection , $deactive) === TRUE) {
            $message = base64_encode(urlencode("Account Deactivated"));
            header('Location:../../index.php?msg=' . $message);
            exit();
            }
            else{
                $message = base64_encode(urlencode("Deactivation Failed"));
                header('Location:customer-profile.php?msg=' . $message);
				exit();
            }

?>