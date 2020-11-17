<?php include('../../includes/session.php'); ?>
<?php include('../../includes/connection.php'); 
include('../../includes/message.php');?>

<?php

    $name = $_POST['emp_name'];
    $email = $_POST['emp_email'];
    $contact = $_POST['contact_no'];
    $password = md5($_POST['password']);

    checkSession();
    $resId = $_SESSION["resID"];

if(isset($_POST['btn-add-emp'])){


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
    $num4 = mysqli_num_rows($allmailquery4);

        if($num > 0 || $num2 > 0 || $num3 >0 || $num4 >0){
            $message = base64_encode(urlencode("Email already exists"));
            header('Location:emp-iframe.php?msg=' . $message);
            exit();
        }

        else {
            $add_emp_sql = "INSERT INTO employee (emp_name, emp_email, emp_mobile, emp_password, res_id) 
            VALUES ('$name','$email','$contact','$password','$resId')";
            
            if (mysqli_query($connection,$add_emp_sql) == TRUE) {
                $message = base64_encode(urlencode("Added Successful"));
                header('Location:./emp-iframe.php?msg=' . $message);
				exit();
            } 
            
            else {
                 $message = base64_encode(urlencode("SQL Error while Registering"));
                 header('Location:./emp-iframe.php?msg=' . $message);
				 exit();
            }
        }
}


mysqli_close($connection);
   


?>