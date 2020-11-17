<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
  <title>Reset</title>
  <link rel="stylesheet" href="../CSS/email_verify.css"/>
  <link rel="icon" type="image/png" href="../images/logo.png" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../CSS/nav.css" rel="stylesheet" type="text/css"/>
<link href="../CSS/footer.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<!--FontAwesome-------->
	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  
</head>
<?php
    require '../includes/connection.php';
    $alert='';
    if(isset($_POST['send'])){
        $email=$_POST['email'];
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

<body>
  <!--Start of nav-->
  <div class="topnav">
        <a href="../index.php"><img class = "logo" src="../images/logo.png"></a>
		<a class="navtab" href="../users/user-type.php">Register</a>
		<a class="navtab" href="contact.php">Contact</a>
		<a class="navtab" href="about.php">About</a>
		<a class="navtab" href="javascript:void(0);" id="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a>    
    </div>
    <!--End of nav-->
  <div class="reset">
    <a href="../includes/login.php" class="previous round">&#8249;</a>
    <h3>Reset Password</h3>        
    <form class="" action="" method="post">
    <p class="message">Enter your registered email address so that we will send you an email to reset your password.</p>
    <?php echo $alert;?>    
        <div class="inputBox">
          <input type="email" name="email" required="">
          <label>Email</label>
        </div>        
             
          <input type="submit" name="send" value="Send">
          <input type="reset" name="" value="Clear">          
         
      </form>
    
  </div>
  
 <!--Include footer.php-->
 <div class="footer-space"><?php include "../includes/footer.php" ?></div>
    
    <!--script for onClickNav() for the navigation menu-->
    <script src="../js/onClickNav.js"></script>

</body>
</html>
