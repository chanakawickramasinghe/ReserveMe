<?php
include('../../includes/connection.php');
include('../../includes/message.php');
?>

<!-- Database update for insert a new menu -->
<?php
$msg = "";

if(isset($_POST['submit'])){
    $item_cat = $_POST['item_cat'];
    $item_name = $_POST['item_name'];
    $item_price = $_POST['price'];

    $sql_add_menu="INSERT INTO menu(item_cat,item_name,item_price) VALUES ('$item_cat','$item_name','$item_price')";

    if($results=$connection->query($sql_add_menu)){
        // $message = base64_encode(urlencode("Menu updated successfully"));
        header('Location:add-menu.php');
        // header('Location:add-menu.php?msg=' . $message);

        exit();
    }

}
// mysqli_close($connection); 
?>

<!-- Database update for set menu for preorders -->
<?php

    if(isset($_POST['pre_update'])){
        $allow_preorder = $_POST['allow_preorder'];
        $item_name= $_POST['item_name'];

        if($allow_preorder==1){
            $sql_add_menu1="UPDATE menu SET allow_preorder=0 WHERE item_name='$item_name'"; 

        if($results1=$connection->query($sql_add_menu1)){
        header('Location:add-menu.php');
        exit();
        }      

        }

        if($allow_preorder==0){
            $sql_add_menu2="UPDATE menu SET allow_preorder=1 WHERE item_name='$item_name'";    
            if($results2=$connection->query($sql_add_menu2)){
                header('Location:add-menu.php');
                exit();
                }  
        }
    }
?>

<!-- Database update for menu details changes -->
<?php

    if(isset($_POST['update'])){
        $item_cat = $_POST['item_cat'];
        $item_name = $_POST['item_name'];
        $price= $_POST['price'];
        $item_id= $_POST['item_id'];

        $sql = "UPDATE menu SET item_cat='$item_cat', item_name='$item_name', item_price='$price' where item_id='$item_id'";
        if($results=$connection->query($sql)){
            header('Location:add-menu.php');
            exit();
            }  else {
                echo "SQL Syntex error";
            }

    }
?>

<!-- Database update for delete the menu -->
<?php

if(isset($_POST['remove'])){
    // echo $_GET['id']; 
    $item_id= $_POST['item_id'];
    
$remove_sql = "DELETE FROM menu WHERE item_id ='$item_id'";
mysqli_query($connection, $remove_sql);

$result = mysqli_query($connection,$remove_sql);

if($result){
    header("Location:add-menu.php");
}
else{
    echo "SQL syntex Error";
    }
}

?>


    <!--  $allowType = array('jpg','png','jpeg');
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
    if(!empty(array_filter($_FILES['files']['name']))){
    foreach($_FILES['files']['name'] as $key=>$val){
        //file upload path
        $fileName = basename($_FILES['files']['name'][$key]);
        $targetFilePath = $targetDir . $fileName;
        //cheeck whether ile type is valid
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
        if(in_array($fileType,$allowTypes)){
        //upload file to server
        if(move_upload_file($_FILES["files"]["menu_image"][$key], $targetFilePath)){
        //image db insert query
        $insertValueSQL .= "('".$fileName."', NOW()),";
        }else{
        $errorUpload .=$_FILES['files']['name'][$key].', ';
        }
        }else{
            $errorUploadType .=$_FILES['files']['name'][$key].', ';
        }
        }
        if(!empty($insertValuesSQL)){
        $insertValuesSQL= trim($insertValuesSQL,',')
        //assignning menu_image name to db
        $image = $_POST['menu_image']
        $registrationQuery = "INSERT INTO menu (menu_image) VALUES ('image')";
    }  -->

    <!-- // //the path to store the uploaded image
    // $targetDir="menu/" .basename($_FILES['menu_image']['name']);

    // //get all the submitted data from form
    // $image = $_FILES['menu_image']['name'];

    // $sql = "INSERT INTO menu (menu_image) VALUES ('$image')";
    // mysqli_query($db,$sql);//store the data to the database table

    // if (move_upload_file($_FILES['Menu_image']['tmp_name'], $target)){
    //     $msg = "Image uploaded successfully.";
    // }else{
    //     $msg = "There was an issue when uploading the image.";
    // } -->

