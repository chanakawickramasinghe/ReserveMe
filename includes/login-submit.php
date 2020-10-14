<?php

include('connection.php');
include('session.php');

if(isset($_POST['submit'])){
	
    //Assign data from login form to variables
	$email = $_POST['email'];
	$password = md5($_POST['password']);
    
    //Select User from database
    $userQueryCustomer = "SELECT * FROM customer WHERE email ='$email' and password='$password'";
    $userQueryRes="SELECT * FROM restaurant WHERE email='$email' and password='$password'";
    $userResult1= mysqli_query($connection, $userQueryCustomer);
    $userResult2=mysqli_query($connection, $userQueryRes);
    //print_r($userResult);
    
    //User Exists
    if (mysqli_num_rows($userResult1) == 1) {
            // $userRow = mysqli_fetch_array($userResult1);
            //print_r($userRow);
            header( "Location:../users/customer/customer-home.php" );
            
            //Creating Session
            checkSession();  
            $_SESSION["name"] = $userRow['user_name'];
            $_SESSION["userID"] = $userRow['user_id'];
            $_SESSION["active_status"] = $userRow['active_status'];
        
            $active_status= $userRow['active_status'];
            
            }
    
    else if(mysqli_num_rows($userResult2) == 1){        
        // $userRow = mysqli_fetch_array($userResult1);
            //print_r($userRow);
            header( "Location:../users/restaurant/restaurant-home.php" );
    } else {
        $message = base64_encode(urlencode("Invalid Email or Password"));
        header('Location:login.php?msg=' . $message);
        exit();
    }
    
}

mysqli_close($connection);
    
    
?>