<?php
include('../../includes/connection.php');

if(isset($_POST['submit'])){
    //Assign data from the registartion form to variables
    $name = $_POST['res_name'];
    $email = $_POST['res_email'];
    $address = $_POST['res_address'];
    $location = $_POST['res_location'];
    $tele = $_POST['res_tel'];
    $menu = $_POST['res_menue'];
    $password = sha1($_POST['res_password']);
    $preorder = $_POST['preorder_available'];
    $dish = $_POST['dish_name'];
    $price = $_POST['dish_price'];
    
    //Check if email already exists
    $selsctmail = "SELECT * FROM resaturant WHERE email ='$res_email' and password='$res_password'";
    $allmailquery= mysqli_query($connection, $selectmail);
    $num = mysqli_num_rows($allmailquery);
    //print_r($userResult);
    
    if($num > 0){
        $message = base64_encode(urlencode("Email already exists"));
        header('Location:register.php?msg=' . $message);
        exit();
    } 

    //Insert to Database
    else {
        $registrationQuery = "INSERT INTO restaurant (res_name, res_email, res_address, res_location, res_tel, res_password, preorder_available) VALUES ('$name', '$email', '$address', '$location', '$tele', '$password', '$preorder)";
    
            if (mysqli_Query($conection,$preorder) == '0'){
                //If preorder isn't available we take the photos
                $registrationQuery = "INSERT INTO restaurant (res_menu) VALUE ('$menu')"; 
            }else{
                //If preorder is available the employee has to manually enter the menue to the system
                $registrationQuery = "INSERT INTO preorder_menu ( dish_name, dish_price) VALUES ('$dish', '$price')";
            }

        if (mysqli_query($connection,$registrationQuery) === TRUE) {
            $message = base64_encode(urlencode("Registration Successful"));
            header('Location:login.php?msg=' . $message);
            exit();
        } else {
            $message = base64_encode(urlencode("SQL Error while Registering"));
            header('Location:vendor-product-add.php?msg=' . $message);
            exit();
        }
    }

}

mysqli_close($connection); ?>