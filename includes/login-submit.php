<?php

include('connection.php');
// include('includes/session.php');

if(isset($_POST['submit'])){
	
    //Assign data from login form to variables
	$email = $_POST['email'];
	$password = sha1($_POST['password']);
    
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
          /*  checkSession();  
            $_SESSION["name"] = $userRow['name'];
            $_SESSION["userID"] = $userRow['userID'];
            $_SESSION["usertype"] = $userRow['usertype'];
        
            $usertype= $userRow['usertype'];
            //echo $usertype;

            if($usertype == 'a' ){
                header( "Location:admin-dashboard.php" );
            }
            elseif ($usertype == 'c'){
                header( "Location:customer-dashboard.php" );
            }
            elseif ($usertype='v'){
                header( "Location:vendor-dashboard.php" );
            }*/
    }
    else if(mysqli_num_rows($userResult2) == 1){        
        // $userRow = mysqli_fetch_array($userResult1);
            //print_r($userRow);
            header( "Location:../users/restaurant-home.php" );
    } else {
        $message = base64_encode(urlencode("Invalid Email or Password"));
        header('Location:login.php?msg=' . $message);
        exit();
    }
    
}

mysqli_close($connection);
    
    
?>