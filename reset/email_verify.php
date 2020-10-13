<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
  <title>Reset</title>
  <style>
body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background: url(../images/bg.jpg);
  background-repeat: no-repeat;
  background-size: cover;

}

.reset{
    position: absolute;
    top: 5%;
    left: 50%;
    transform: translate(-50%,50%);
    width: 40%;
    padding: 45px;
    background: rgba(0,0,0,.8);
    box-sizing: border-box;
    box-shadow: 0 15px 25px rgba(0,0,0,.5);
    border-radius: 10px;
}

.reset h3
{
    margin: 0 0 30px;
    padding: 0;
    color: #fff;
    text-align: center;

}

.reset .inputBox
{
    position: relative;
}

.reset .inputBox input
{
    width: 100%;
    padding: 12px 0;
    font-size: 16px;
    color: #fff;
    letter-spacing: 1px;
    margin-bottom: 16px;
    border: none;
    border-bottom: 1px solid #fff;
    outline: none;
    background: transparent;
}

.reset .inputBox label
{
   position: absolute;
   top: 0;
   left: 0;  
   padding: 15px 0;
   font-size: 18px; 
   color: #fff;
   pointer-events: none;
   transition: .5s;

}
.reset .inputBox input:focus ~ label,
.reset .inputBox input:valid ~ label 
{
    top: -20px;
    left: 0;
    color: #03a9f4;
    font-size: 14px;

} 

.reset input[type="submit" i]
{
    margin-top: 8px;  
    margin-left: 22%;
    margin-bottom: 2px;
    background: transparent;
    border: none;
    outline: none;
    color: #fff;
    background: #03a9f4;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
    display: inline-block;
    font-size: 16px;
}

.reset input[type="reset" i]
{
    margin-top: 8px;  
    margin-left: 15%;
    margin-bottom: 2px;
    background: transparent;
    border: none;
    outline: none;
    color: #fff;
    background: #03a9f4;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
    display: inline-block;
    font-size: 16px;
}
.reset input[type="reset" i]:hover
{
    background-color: #3e8e41;
    color: white;
}
.reset input[type="submit" i]:hover
{
    background-color: #3e8e41;
    color: white;
}
.anchor{
  display: block;
  position: relative;
  top: 0px;
  margin-bottom: 15px;
    
}
.message{
    color: white;
}
p{
    color: white;
}
a {
  position: relative;
  top: -15px; 
  left: -35px; 
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
  
}

a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  font-size: 18px;
  color: white;
}


.round {
  border-radius: 50%;
}
</style>  
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
            $from='vegemartucsc@gmail.com';
            $subject="Password reset token";
            $message='We have got your request to reset your password.<br>';
            $message.='Please follow the url and reset your password.The link will only be valid for one time use only.<br>';
            $message.='http://localhost/ReserveMe/reset/password_reset.php?token='.$token;
            $header="From: {$from}\r\nContent-Type: text/html;";

            $send_result=mail($to,$subject,$message,$header);
            if($send_result)
            echo "<script>alert('Reset Link is sent to the email');
                  window.location = '../login.php';
                  </script>";             
            else
                $alert="<div class='failed'>Failed to send the mail!</div>";
        }
        else 
        $alert="<p class='error'>The entered email is not a registerd email address!Please try with a valid email address.</p>";
    }

?>

<body>
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
          <input type="reset" name="" value="Reset">          
         
      </form>
    
  </div>

</body>
</html>
