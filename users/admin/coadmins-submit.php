<?php

include('../../includes/connection.php');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $type = $_POST['type'];
    $password = md5($_POST['password']);

if(isset($_POST['add'])){

    // $selectmail= "SELECT * FROM customer WHERE email ='$email' " ;
    // $allmailquery = mysqli_query($connection, $selectmail ) ;  
    // $num = mysqli_num_rows($allmailquery);

    // $selectmail2="SELECT * FROM restaurant WHERE res_email='$email'";
    // $allmailquery2 = mysqli_query($connection, $selectmail2 ) ;  
    // $num2 = mysqli_num_rows($allmailquery2);

    // $selectmail3="SELECT * FROM  employee WHERE emp_email='$email'";
    // $allmailquery3 = mysqli_query($connection, $selectmail3 ) ;  
    // $num3 = mysqli_num_rows($allmailquery3);

    // $selectmail4="SELECT * FROM  admins WHERE admin_email='$email'";
    // $allmailquery4 = mysqli_query($connection, $selectmail4 ) ;  
    // $num4 = mysqli_num_rows($allmailquery4);

    //     if($num > 0 || $num2 > 0 || $num3 >0 || $num4 >0){
    //         echo '<script type="text/javascript"> alert("Email Already Exists")</script>';
    //         echo"blaaaaaaaaaaaaaa";
    //         header('Location:./coadmins.php');
    //         exit();
    //     }

        // else {
            $add_sql = "INSERT INTO admins (admin_name, admin_password, admin_email, contact_no, admin_type) 
            VALUES ('$name','$password','$email','$contact','$type')";
            
            if (mysqli_query($connection,$add_sql) == TRUE) {
                $message = base64_encode(urlencode("Added Successful"));
                header('Location:./coadmins.php?msg=' . $message);
				exit();
            } 
            
            else {
                 $message = base64_encode(urlencode("SQL Error while Registering"));
                 header('Location:./coadmins.php?msg=' . $message);
				 exit();
            }
        //}
}

if(isset($_POST['delete'])){


        $delete_sql = "DELETE FROM admins WHERE admin_email = '$email'";
        
        if (mysqli_query($connection,$delete_sql) == TRUE) {
            $message = base64_encode(urlencode("Deleted Successful"));
            header('Location:./coadmins.php?msg=' . $message);
            exit();
        } 
        
        else {
             $message = base64_encode(urlencode("SQL Error"));
             header('Location:./coadmins.php?msg=' . $message);
             exit();
        }
}

if(isset($_POST['update'])){

    $update_sql = "UPDATE admins 
    SET admin_name = '$name', admin_email ='$email', contact_no = '$contact', admin_type ='$type'
    WHERE admin_email = '$email' ";
    
    if (mysqli_query($connection,$update_sql) == TRUE) {
        $message = base64_encode(urlencode("Updated Successful"));
        header('Location:./coadmins.php?msg=' . $message);
        exit();
    } 
    
    else {
         $message = base64_encode(urlencode("SQL Error"));
         header('Location:./coadmins.php?msg=' . $message);
         exit();
    }
}

mysqli_close($connection);

?>