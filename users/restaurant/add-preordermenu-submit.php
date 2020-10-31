<?php

include('../../includes/connection.php');

if(isset($_POST['submit'])){
    
    for($i = 0; $i < 30; $i++){
        // Assign input data from form to variables
	    $item_name = $_POST['item_name'];
        $item_price = $_POST['item_price'];
    
        $result = mysql_query("INSERT INTO `preorder_menu` (item_name, item_price) VALUES ('$_POST[item_name]', '$_POST[item_price]' ");
        if (mysqli_query($connection,$registrationQuery) == TRUE) {
            //echo "inside TRUE";
            $message = base64_encode(urlencode("Registration Successful"));
            header('Location:../../includes/login.php?msg=' . $message);
            exit();

        } else {
            $message = base64_encode(urlencode("SQL Error while Registering"));
            header('Location:customerReg.php?msg=' . $message);
            exit();
        }
    }   
} 

mysqli_close($connection);
?>

