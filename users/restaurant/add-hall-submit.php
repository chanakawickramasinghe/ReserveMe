<?php include('../../includes/session.php'); ?>
<?php include('../../includes/connection.php'); 
include('../../includes/message.php');?>

<?php

    $hall_id = $_POST['hall_id'];

    $target = "../../images/halls/".basename($_FILES['main_image']['name']);
    $target1 = "../../images/halls/".basename($_FILES['image1']['name']);
    $target2 = "../../images/halls/".basename($_FILES['image2']['name']);

    $hallname = $_POST['hall_name'];
    $address = $_POST['address'];
    $contact = $_POST['contact_no'];
    $address= $_POST['address'];
    $capacity = $_POST['capacity'];
    $description = $_POST['description'];
    $advance = $_POST['advance'];

    $image = $_FILES['main_image']['name'];
    $image1 = $_FILES['image1']['name'];
    $image2 = $_FILES['image2']['name'];

    checkSession();
    $resId = $_SESSION["resID"];

if(isset($_POST['btn-add-hall'])){

            $add_hall_sql = "INSERT INTO reception_hall (res_id, hall_name, 
            contact_no, main_image, image1, image2, address, capacity, description, advance_fee) 
            VALUES ('$resId','$hallname','$contact','$image','$image1','$image2','$address','$capacity','$description','$advance')";
            
            if (mysqli_query($connection,$add_hall_sql) == TRUE) {

                // mkdir("../../images/halls/{$hall_id}");
                if (move_uploaded_file($_FILES['main_image']['tmp_name'], $target)) {
                    if (move_uploaded_file($_FILES['image1']['tmp_name'], $target1)) {
                        if (move_uploaded_file($_FILES['image2']['tmp_name'], $target2)) {
                            $msg = "Image uploaded successfully";
                            header( "Location:hall-details.php");
                        }
                        else {
                            $msg = "Failed to upload image 2";
                            header( "Location:hall-details.php");
                        }
                    }
                    else{
                        $msg = "Failed to upload image 1";
                        header( "Location:hall-details.php");
                    }    
                }else{
                    $msg = "Failed to upload image";
                    header( "Location:hall-details.php");
                }
            } 
            
            else {
                 $message = base64_encode(urlencode("SQL Error while Registering"));
                 header('Location:hall-details.php?msg=' . $message);
				 exit();
            }
} 


if(isset($_POST['update'])){
        
        $sql = "UPDATE reception_hall SET hall_name='$hallname', contact_no='$contact', address='$address',
        capacity='$capacity', description='$description', advance_fee='$advance'
        WHERE hall_id='$hall_id'";
        if (mysqli_query($connection,$sql) == TRUE) {
            header( "Location:hall-details.php");
            exit();
            }  else {
                echo "SQL Syntex error";
            }

}


if(isset($_POST['delete'])){
    
    $img_search = "SELECT main_image, image1, image2 FROM reception_hall WHERE hall_id='$hall_id'";
    $img_search_query = mysqli_query($connection,$img_search);
    $row = mysqli_fetch_assoc($img_search_query);


    $sql = "DELETE FROM reception_hall WHERE hall_id='$hall_id'";
    if (mysqli_query($connection,$sql) == TRUE) {
        header( "Location:hall-details.php");
        unlink("../../images/halls/{$row['main_image']}");
        unlink("../../images/halls/{$row['image1']}");
        unlink("../../images/halls/{$row['image2']}");
        exit();
        }  else {
            echo "SQL Syntex error";
        }

}
?>
