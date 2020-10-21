<?php

include('../../includes/connection.php');
include('../../includes/session.php');

    if(isset($_POST['submit'])){
	
    // Assign input data from form to variables
    $name = $_POST['name'];
    $email= $_POST['email'];
    $contact = $_POST['contact'];
    $password = md5($_POST['password']);
	$password2 = md5($_POST['password2']);
    
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


        
        if($num > 0 || $num2 > 0 || $num3 >0){
        $message = base64_encode(urlencode("Email already exists"));
        header('Location:customerReg.php?msg=' . $message);
        exit();
        }
        
        //Insert to Database
        else {

            checkSession(); 
            $res_id=$_SESSION['resID'];
            $registrationQuery = "INSERT INTO employee (emp_id, res_id, emp_name, emp_email, emp_mobile, emp_password) VALUES (NULL,$res_id,'$name','$email','$contact','$password')";
            if (mysqli_query($connection,$registrationQuery) == TRUE) {
                //echo "inside TRUE";
                $message = base64_encode(urlencode("Registration Successful"));
                header('Location:../restaurant/restaurant-home.php?msg=' . $message);
				exit();
            } 
            
            else {
                // echo "Inside FALSE";
                $message = base64_encode(urlencode("SQL Error while Registering"));
                header('Location:employee-add.php?msg=' . $message);
				exit();
            }
        }
    }
mysqli_close($connection);
?>