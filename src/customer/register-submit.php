<?php

include('../../config/connection.php');

if(isset($_POST['submit'])){
	
    // Assign input data from form to variables
	$name = $_POST['name'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
	$email = $_POST['email'];
    $password = md5($_POST['password']);
	$password2 = md5($_POST['password2']);
    $contact = $_POST['contact'];
    $dob = $_POST['dob'];
    $fullname = $firstname." ".$lastname;
    
        //Check if email already exists in both tables
        $selectmail= "SELECT * FROM customer WHERE email ='$email' " ;
        $allmailquery = mysqli_query($connection, $selectmail ) ;  
        $num = mysqli_num_rows($allmailquery);

        $selectmail2="SELECT * FROM restaurant WHERE res_email='$email'";
        $allmailquery2 = mysqli_query($connection, $selectmail2 ) ;  
        $num2 = mysqli_num_rows($allmailquery2);

        $selectmail3="SELECT * FROM  employee WHERE emp_email='$email'";
        $allmailquery3 = mysqli_query($connection, $selectmail3 ) ;  
        $num3 = mysqli_num_rows($allmailquery3);

        $selectmail4="SELECT * FROM  admins WHERE admin_email='$email'";
        $allmailquery4 = mysqli_query($connection, $selectmail4 ) ;  
        $num3 = mysqli_num_rows($allmailquery4);

        
        if($num > 0 || $num2 > 0 || $num3 >0 || $num4 >0){
        $message = base64_encode(urlencode("Email already exists!"));
        header('Location:customerReg.php?msg=' . $message);
        exit();
        }
        
        // check whether passwords match
        else if($password != $password2){
            $message = base64_encode(urlencode("Passwords do not match!"));
            header('Location:customerReg.php?msg=' . $message);
            exit();
        }
        
        //If no error, then Insert to Database
        else {

            $registrationQuery = "INSERT INTO customer (user_id,user_name,first_name,last_name,email,password,contact_no,dob,active_status) 
            VALUES (NULL,'$fullname', '$firstname', '$lastname', '$email', '$password','$contact', '$dob', 1)";
            
            if (mysqli_query($connection,$registrationQuery) == TRUE) {
                //echo "inside TRUE";
                $message = base64_encode(urlencode("Registration Successful!"));
                header('Location:../../public/includes/login.php?msg=' . $message);
        
				exit();
            } 
            //if there is a sql error
            else {
                 $message = base64_encode(urlencode("Error while Registering!"));
                 header('Location:customerReg.php?msg=' . $message);
				exit();
            }
        }
}

mysqli_close($connection);
   
?>