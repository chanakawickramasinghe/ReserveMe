<?php include('../../includes/session.php') ?>
<?php

include('../../includes/connection.php');

    $cus_id = $_POST['user_id'];
    // $name = $_POST['name'];
    // $email = $_POST['email'];
    // $contact = $_POST['contact'];
    // $type = $_POST['type'];
    // $password = md5($_POST['password']);

if(isset($_POST['submit'])){

    // $_SESSION["cur_cus_id"] = $cus_id;
    header('Location:./admin-view-customer-activity.php?id='.$cus_id);
}

// if(isset($_POST['delete'])){


//         $delete_sql = "DELETE FROM admins WHERE admin_email = '$email'";
        
//         if (mysqli_query($connection,$delete_sql) == TRUE) {
//             $message = base64_encode(urlencode("Deleted Successful"));
//             header('Location:./coadmins.php?msg=' . $message);
//             exit();
//         } 
        
//         else {
//              $message = base64_encode(urlencode("SQL Error"));
//              header('Location:./coadmins.php?msg=' . $message);
//              exit();
//         }
// }

// if(isset($_POST['update'])){

//     $update_sql = "UPDATE admins 
//     SET admin_name = '$name', admin_email ='$email', contact_no = '$contact', admin_type ='$type'
//     WHERE admin_email = '$email' ";
    
//     if (mysqli_query($connection,$update_sql) == TRUE) {
//         $message = base64_encode(urlencode("Updated Successful"));
//         header('Location:./coadmins.php?msg=' . $message);
//         exit();
//     } 
    
//     else {
//          $message = base64_encode(urlencode("SQL Error"));
//          header('Location:./coadmins.php?msg=' . $message);
//          exit();
//     }
// }

 mysqli_close($connection);

?>