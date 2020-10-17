<?php

include('../../includes/connection.php');

if(isset($_POST['submit'])){
	
    // Assign input data from form to variables
	$name = $_POST['name'];
	$email = $_POST['email'];
    $password = md5($_POST['password']);
	$password2 = md5($_POST['password2']);
    $contact = $_POST['contact'];
    $dob = $_POST['dob'];
    $pnumber = $_POST['pnumber'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    
    
    //echo "test 1";
        //Check if email already exists in both tables
        $selectmail= "SELECT * FROM customer WHERE email ='$email' " ;
        $allmailquery = mysqli_query($connection, $selectmail ) ;  
        $num = mysqli_num_rows($allmailquery);

        $selectmail2="SELECT * FROM restaurant WHERE res_email='$email'";
        $allmailquery2 = mysqli_query($connection, $selectmail2 ) ;  
        $num2 = mysqli_num_rows($allmailquery2);
        
        if($num > 0 || $num2 > 0){
        $message = base64_encode(urlencode("Email already exists"));
        header('Location:customerReg.php?msg=' . $message);
        exit();
        }
        
        //Insert to Database
        else {

            //echo "testing 123";
            $registrationQuery = "INSERT INTO customer (user_id,user_name,email,password,contact_no,dob,postal_number,street,city,active_status) 
            VALUES (NULL,'$name', '$email', '$password','$contact', '$dob', '$pnumber','$street','$city',1)";
            // $registrationQuery = "INSERT INTO customer (user_name, email, password, contact_no, no) VALUES ('$name', '$email', '$password', '$contact', '$no')";
            if (mysqli_query($connection,$registrationQuery) == TRUE) {
                //echo "inside TRUE";
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