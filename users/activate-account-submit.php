<?php include('../includes/connection.php') ?>
<?php include('../includes/session.php') ?>


<?php
    checkSession();
    

    if($_SESSION["userType"] == 'Customer'){
        
        $userID = $_SESSION["userID"];
        $active = "UPDATE customer SET active_status=1 WHERE user_id = $userID";
             
        if(mysqli_query($connection , $active) === TRUE) {
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

    if($_SESSION["userType"] == 'Restaurant'){

        $userID = $_SESSION["resID"];
        $active = "UPDATE restaurant SET active_status=1 WHERE res_id = $userID";
             
        if(mysqli_query($connection , $active) === TRUE) {
            $message = base64_encode(urlencode("Account Activated"));
            header('Location:restaurant/restaurant-home.php?msg=' . $message);
            exit();
            }
        else{
            $message = base64_encode(urlencode("Activation Failed"));
            header('Location:../includes/login.php?msg=' . $message);
			exit();
        }
    }


       
        

?> 