
<?php
    require '../../includes/connection.php';
    $alert='';
    $msg=$_POST['reply'];
    $email=$_POST['cus_email'];

    if(isset($_POST['submit'])){
        //echo "hello $email";
        $query="SELECT email FROM customer WHERE email='$email'";
        $result=mysqli_query($connection,$query);
        if(mysqli_num_rows($result)>0){
            $token=uniqid(md5(time()));
            $query="INSERT INTO tokens (email,token) VALUES ('$email','$token')";
            $insert_result=mysqli_query($connection,$query);
            
            //send token to the email
            $to=$email;
            $from='info.reserve.lk@gmail.com';
            $subject="Password reset token";
            $message='We have got your request to reset your password.<br>';
            $message.='Please follow the url and reset your password.The link will only be valid for one time use only.<br>';
            $message.='http://localhost/ReserveMe/reset/password_reset.php?token='.$token;
            $header="From: {$from}\r\nContent-Type: text/html;";

            $send_result=mail($to,$subject,$message,$header);
            if($send_result)
            echo "<script>alert('Reset Link is sent to the email');
                  window.location = '../includes/login.php';
                  </script>";             
            else
                $alert="<div class='failed'>Failed to send the mail!</div>";
        }
        else 
        $alert="<p class='error'>The entered email is not a registerd email address!Please try with a valid email address.</p>";
    }

?>