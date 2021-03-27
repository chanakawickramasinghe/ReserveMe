<?php

include('../../config/connection.php');

$cur_pword= md5($_POST['cur_pword']);
$new_pword1 = md5($_POST['new_pword1']);
$new_pword2 = md5($_POST['new_pword2']);

$old_pword_sql = "SELECT admin_password FROM admins WHERE admin_id='1'";
$result_old_pword = mysqli_query($connection,$old_pword_sql);

if (mysqli_num_rows($result_old_pword) == 1) {
    $row = mysqli_fetch_array($result_old_pword);
    $old_pword = $row['admin_password'];
}

     if ($new_pword1 != $new_pword2){
        echo '
        <script>
        window.location.href = "admin-home.php";
        alert("New passwords Do Not Match!");
        </script>'; 
        exit();
    }

    elseif ($old_pword != $cur_pword) {
        echo '
        <script>
        window.location.href = "admin-home.php";
        alert("Current Password is Incorrect!");
        </script>';
        exit();
    }
    else{
        
        $update_pword= "UPDATE admins SET admin_password = '$new_pword1'";
        
        if (mysqli_query($connection,$update_pword) === TRUE) {
            echo '
            <script>
            window.location.href = "admin-home.php";
            alert("Password Changed!");
            </script>';
			exit();
        } 
            
        else {
            echo '
            <script>
            window.location.href = "admin-home.php";
            alert("Password Changed Unsuccessful!");
            </script>';
			exit();
            }
    }

mysqli_close($connection);
    
?>