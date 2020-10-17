<?php
include('../../includes/connection.php');
include('../../includes/message.php');

if(isset($_POST['submit'])){
    //file upload configuration
    $targetDir="upload/";
    $allowType = array('jpg','png','jpeg');

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
            $registrationQuery = "INSERT INTO menu (menu_image) VALUES ('name')";
        } 

    }

    mysqli_close($connection); 
?>
