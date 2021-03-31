<?php include('../../includes/connection.php') ?>
<?php include('../../includes/session.php') ?>


<?php
    checkSession();

    if($_SESSION["userType"] == 'Customer'){
        
        $userID = $_SESSION["userID"];
        $active = "UPDATE customer SET active_status=1 WHERE user_id = $userID";
             
        if(mysqli_query($connection , $active) === TRUE) {
            $log_customer_sql = "INSERT INTO log (user_id, user_type, date_time, activity) 
            VALUES ('".$_SESSION["userID"]."','".$_SESSION["userType"]."',NOW(),'Login Successfully')";

            $execute_querry = mysqli_query($connection, $log_customer_sql);

            $message = base64_encode(urlencode("Account Activated. Please Login!"));
            header('Location:../../includes/login.php?msg=' . $message);
            exit();
            }
        else{
            $message = base64_encode(urlencode("Activation Failed"));
            header('Location:../../includes/login.php?msg=' . $message);
			exit();
        }
    }     

?> 