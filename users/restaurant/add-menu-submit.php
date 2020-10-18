<?php
include('../../includes/connection.php');
include('../../includes/message.php');
$msg = "";
if(isset($_POST['upload'])){
    //the path to store the uploaded image
    $targetDir="menu/" .basename($_FILES['menu_image']['name']);

    //get all the submitted data from form
    $image = $_FILES['menu_image']['name'];

    $sql = "INSERT INTO menu (menu_image) VALUES ('$image')";
    mysqli_query($db,$sql);//store the data to the database table

    if (move_upload_file($_FILES['Menu_image']['tmp_name'], $target)){
        $msg = "Image uploaded successfully.";
    }else{
        $msg = "There was an issue when uploading the image.";
    }
}
mysqli_close($connection); 
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
    