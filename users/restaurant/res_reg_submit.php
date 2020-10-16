<?php
include('../../includes/connection.php');
include('../../includes/message.php');



$target_dir = "../../images/restaurant/"; //C:\xampp\htdocs\ReserveMe\images\restaurant
$target_file = $target_dir . basename($_FILES["res_image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, image is already exists.";
    $uploadOk = 0;
}
// if everything is ok, try to upload file
else {
    if (move_uploaded_file($_FILES["res_image"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["res_image"]["name"]). " has been uploaded.";
    } 
    else {
        $message = base64_encode(urlencode("Sorry, there was an error uploading your file."));
        header('Location:test.php?msg=' . $message);
        exit();
    }
}

// Updating DB
if(isset($_POST['submit'])){

$imageName = $_FILES["res_image"]["name"]; 
$imageData = $_FILES["res_image"]["tmp_name"];
$imageType = $_FILES["res_image"]["type"];

    //Assign data from the registartion form to variables
    $name = $_POST['res_name'];
    $email = $_POST['res_email'];
    $tel = $_POST['res_tel'];
    $password = md5($_POST['res_password']);
    $password2 = md5($_POST['password2']);
    $pnumber = $_POST['pnumber'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $location = $_POST['res_location'];    
        
    //Check if email already exists
        $selectmail= "SELECT * FROM customer WHERE email ='$email' " ;
        $allmailquery = mysqli_query($connection, $selectmail ) ;  
        $num = mysqli_num_rows($allmailquery);

        $selectmail2="SELECT * FROM restaurant WHERE res_email='$email'";
        $allmailquery2 = mysqli_query($connection, $selectmail2 ) ;  
        $num2 = mysqli_num_rows($allmailquery2);
        
    if($num > 0 || $num2 > 0){
        $message = base64_encode(urlencode("Email already exists"));
        header('Location:res_reg.php?msg=' . $message);
        exit();
    }

    //Insert to Database
    else {
        $registrationQuery = "INSERT INTO restaurant (res_name, res_email, res_add_line1, res_add_line2, city, res_location, res_tel, res_password, res_image) 
        VALUES ('$name', '$email','$pnumber','$street','$city','$location','$tel','$password','$imageName')";
        
        if (mysqli_query($connection,$registrationQuery) === TRUE) {
            $message = base64_encode(urlencode("Registration Successful"));
            header('Location:../../includes/login.php?msg=' . $message);
            exit();
        } else {
            $message = base64_encode(urlencode("SQL Error while Registering"));
            header('Location:res_reg.php?msg2=' . $message);
            exit();
        }
    }

}


 mysqli_close($connection); 

?>