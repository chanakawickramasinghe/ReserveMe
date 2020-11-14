<?php

include('connection.php');
include('session.php');

if(isset($_POST['submit'])){
	
    //Assign data from login form to variables
	$email = $_POST['email'];
	$password = md5($_POST['password']);
    
    //Select User from database
    $userQueryCustomer = "SELECT * FROM customer WHERE email ='$email' and password='$password'";
    $userQueryRes="SELECT * FROM restaurant WHERE res_email='$email' and res_password='$password'";
    $userQueryAdmin="SELECT * FROM admins WHERE admin_email='$email' and admin_password='$password'";
    $userQueryEmployee="SELECT * FROM employee WHERE emp_email='$email' and emp_password='$password'";

    $userResult1=mysqli_query($connection, $userQueryCustomer);
    $userResult2=mysqli_query($connection, $userQueryRes);
    $userResult3=mysqli_query($connection, $userQueryAdmin);
    $userResult4=mysqli_query($connection, $userQueryEmployee);

    //print_r($userResult);
    
    //User Exists
    if (mysqli_num_rows($userResult1) == 1) {
        $userRow = mysqli_fetch_array($userResult1);
        
        checkSession();  //create sessions
        $_SESSION["name"] = $userRow['user_name'];
        $_SESSION["userID"] = $userRow['user_id'];
        $_SESSION["userType"] = 'Customer';
        $active_status= $userRow['active_status'];

        if($active_status == 1){
            $log_customer_sql = "INSERT INTO log (user_id, user_type, date_time) 
            VALUES ('".$_SESSION["userID"]."','".$_SESSION["userType"]."',NOW())";

            $execute_querry = mysqli_query($connection, $log_customer_sql);

            header( "Location:../users/customer/customer-home.php" );
        }
        else{
            header("Location:../users/activate-account.php");
        }      
    }
    
    //Restaurant Login
    else if(mysqli_num_rows($userResult2) == 1){ 

        $userRow = mysqli_fetch_array($userResult2);
        checkSession();  //create sessions
        $_SESSION["name"] = $userRow['res_name'];
        $_SESSION["resID"] = $userRow['res_id'];
        $_SESSION["userType"] = 'Restaurant';
        $active_status= $userRow['active_status'];

        if($active_status == 1){
            $log_res_sql = "INSERT INTO log (user_id, user_type, date_time) 
            VALUES ('".$_SESSION["resID"]."','".$_SESSION["userType"]."',NOW())";

            $execute_querry = mysqli_query($connection, $log_res_sql);

            header( "Location:../users/restaurant/restaurant-home.php" );
        }
        else{
            header("Location:../users/activate-account.php");
        }    
    }
    
    // Admin login
    else if(mysqli_num_rows($userResult3) == 1){

        $userRow = mysqli_fetch_array($userResult3);
        checkSession();  //create sessions
        $_SESSION["name"] = $userRow['admin_name'];
        $_SESSION["type"] = $userRow['admin_type'];
        $_SESSION["email"] = $email;
        // $_SESSION["last_login"] = SELECT NOW();

        // $log_admin_sql = "INSERT INTO log (user_id, user_type, date_time) 
        // VALUES ('".$_SESSION["emp_id"]."','".$_SESSION["type"]."',NOW())";

        // $execute_querry = mysqli_query($connection, $log_admin_sql);

        header( "Location:../users/admin/admin-home.php");

    }

    // Employee login
    else if(mysqli_num_rows($userResult4) == 1){

        $userRow = mysqli_fetch_array($userResult4);
        checkSession();  //create sessions
        $_SESSION["emp_name"] = $userRow['emp_name'];
        $_SESSION["emp_id"] = $userRow['emp_id'];
        $_SESSION["res_id"] = $userRow['res_id'];
        $_SESSION["userType"] = 'Employee';

            $log_emp_sql = "INSERT INTO log (user_id, user_type, date_time) 
            VALUES ('".$_SESSION["emp_id"]."','".$_SESSION["userType"]."',NOW())";

            $execute_querry = mysqli_query($connection, $log_emp_sql);

            header( "Location:../users/employee/employee-home.php"); 
    }
    else {
        $message = base64_encode(urlencode("Invalid Email or Password"));
        header('Location:login.php?msg=' . $message);
        exit();
    }
    
}

mysqli_close($connection);
     
?>