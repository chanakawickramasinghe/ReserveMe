<?php

include('../../config/connection.php');
include('../../public/includes/session.php');

$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];

$old_pword_sql = "SELECT admin_password FROM admins WHERE admin_id='1'";
$result_old_pword = mysqli_query($connection,$old_pword_sql);

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
$message = base64_encode(urlencode("Email already exists!"));
header('Location:customerReg.php?msg=' . $message);
echo '
        <script>
        window.location.href = "admin-home.php";
        alert("Email Already Exists!");
        </script>'; 
        exit();
}
else{
    
    $update_details= "UPDATE admins SET admin_name='$name', admin_email='$email', contact_no='$contact'";
  
    if (mysqli_query($connection,$update_details) === TRUE) {

        checkSession();
                $_SESSION["name"] = $name;  

        echo '
        <script>
        window.location.href = "admin-home.php";
        alert("Modify Details Successful!");
        </script>';
        exit();
    } 
        
    else {
        echo '
        <script>
        window.location.href = "admin-home.php";
        alert("Modify Details Unsuccessful!");
        </script>';
        exit();
        }
}