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
            $registrationQuery = "INSERT INTO customer(user_name, email, password, contact_no, dob, pnumber, street, city, rankings) VALUES ('$name','$email','$password','$contact','$dob','$no','$street','$city',null)";
            
            if (mysqli_query($connection,$registrationQuery) === TRUE) {
                //$message = base64_encode(urlencode("Registration Successful"));
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