<?php
include('../../includes/connection.php');

include('../../includes/message.php');



$target_dir = "../../images/Restaurant_Dp/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, image is already exists.";
    $uploadOk = 0;
}
// if everything is ok, try to upload file
else {
    if (move_uploaded_file($_FILES["fileToUpload"]["temp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } 
    else {
        $message = base64_encode(urlencode("Sorry, there was an error uploading your file."));
        header('Location:vendor-product-add.php?msg=' . $message);
        exit();
    }
}

if(isset($_POST['submit'])){

$imageName = $_FILES["fileToUpload"]["name"];
$imageData = $_FILES["fileToUpload"]["tmp_name"];
$imageType = $_FILES["fileToUpload"]["type"];

    //Assign data from the registartion form to variables
    $name = $_POST['res_name'];
    $email = $_POST['res_email'];
    $tel = $_POST['res_tel'];
    $password = $_POST['res_password'];
    $pnumber = $_POST['pnumber'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $location = $_POST['res_location'];    
    // $preorder = $_POST['preorder'];
    // $res_type = $_POST['res_type'];
    // $dish = $_POST['dish_name'];
    // $price = $_POST['dish_price'];
    // $menu = $_POST['res_menue'];
    
    //Check if email already exists
    $selectmail = "SELECT * FROM restaurant WHERE res_email ='$email'";
    $allmailquery= mysqli_query($connection, $selectmail);
    $num = mysqli_num_rows($allmailquery);
    //print_r($userResult);
    
    if($num > 0){
        $message = base64_encode(urlencode("Email already exists"));
        header('Location:res_reg.php?msg=' . $message);
        exit();
    } 

    //Insert to Database
    else {
        $registrationQuery = "INSERT INTO restaurant (res_name, res_email, res_tel, res_password, pnumber, street, city, res_location, res_dp)\
         VALUES ('$name', '$email','$tel','$password','$pnumber', '$street','$city','$location','$imagename')";
        
           /* if (mysqli_Query($conection,$preorder) == '0'){
                //If preorder isn't available we take the photos
                $registrationQuery = "INSERT INTO restaurant (res_menu) VALUE ('$menu')"; 
            }else{
                //If preorder is available the employee has to manually enter the menue to the system
                //$i = $dish
                //for($i = 0; $i <=30; $i++){
                    $registrationQuery = "INSERT INTO preorder_menu ( dish_name, dish_price) VALUES ('$dish', '$price')";
                //}    
            }*/
        
        if (mysqli_query($connection,$registrationQuery) === TRUE) {
            $message = base64_encode(urlencode("Registration Successful"));
            header('Location:../../includes/login.php?msg=' . $message);
            exit();
        } else {
            $message = base64_encode(urlencode("SQL Error while Registering"));
            header('Location:res_reg.php?msg=' . $message);
            exit();
        }
    }

}


 mysqli_close($connection); 

?>