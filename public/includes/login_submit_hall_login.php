<?php

include('../../config/connection.php');
include('session.php');

if(isset($_POST['submit'])){
	
    //Assign data from login form to variables
	$email = $_POST['email'];
	$password = md5($_POST['password']);
    
    //Select User from database
    $userQueryCustomer = "SELECT * FROM customer WHERE email ='$email' and password='$password'";


    $userResult1=mysqli_query($connection, $userQueryCustomer);


    //print_r($userResult);
    
    //User Exists
    if (mysqli_num_rows($userResult1) == 1) {
        $userRow = mysqli_fetch_array($userResult1);
        
        checkSession();  //create sessions
        $_SESSION["name"] = $userRow['user_name'];
        $_SESSION["userID"] = $userRow['user_id'];
        $_SESSION["userType"] = 'Customer';
        $active_status= $userRow['active_status'];
        $_SESSION["email"] = $email;
        $hall_id=$_GET['hall_id'];

        if($active_status == 1){
            $log_customer_sql = "INSERT INTO log (user_id, user_type, date_time, activity) 
            VALUES ('".$_SESSION["userID"]."','".$_SESSION["userType"]."',NOW(),'Login Successfully')";

            $execute_querry = mysqli_query($connection, $log_customer_sql);

            header( "Location:../../src/customer/hall_view/logged_hall_view.php?hall_id=".$hall_id);
        }
        else{
            header("Location:../../src/customer/activate-account.php");
        }      
    }
}

mysqli_close($connection);
     
?>