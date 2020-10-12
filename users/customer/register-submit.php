<?php

include('../../includes/connection.php');

if(isset($_POST['submit'])){
	
    // Assign input data from form to variables
	$name = $_POST['name'];
	$email = $_POST['email'];
    $password = sha1($_POST['password']);
	$password2 = sha1($_POST['password2']);
    $contact = $_POST['contact'];
   
        //Check if email already exists
        $selectmail= "SELECT * FROM customer WHERE email ='$email' " ;
        $allmailquery = mysqli_query($connection, $selectmail ) ;  
        $num = mysqli_num_rows($allmailquery);

        $selectmail2="SELECT * FROM restaurant WHERE email='$email'";
        $allmailquery2 = mysqli_query($connection, $selectmail2 ) ;  
        $num2 = mysqli_num_rows($allmailquery2);
        
        if($num > 0 || $num2 > 0){
        $message = base64_encode(urlencode("Email already exists"));
        header('Location:customerReg.php?msg=' . $message);
        exit();
        }
        
        //Insert to Database
        else {
            $registrationQuery = "INSERT INTO customer (user_name,email,password,contact_no) VALUES ('$name', '$email', '$password','$contact')";
            
            if (mysqli_query($connection,$registrationQuery) === TRUE) {
                $message = base64_encode(urlencode("Registration Successful"));
                header('Location:../../includes/login.php?msg=' . $message);
				exit();
            } 
            
            else {
                $message = base64_encode(urlencode("SQL Error while Registering"));
                header('Location:customerReg.php?msg=' . $message);
				exit();
            }
        }

}


mysqli_close($connection);
   


?>