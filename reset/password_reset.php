<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
  <title>Change Password</title>
  <link rel="stylesheet" href="../CSS/forgot-password.css"/>
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
    $alert='';
    require '../includes/connection.php';
    $token=$_GET['token'];
    if(isset($_POST['reset'])){
        $password=md5($_POST["password"]);
        $re_password=md5($_POST["re_password"]);
        if($password===$re_password){
            $ret_query="SELECT email FROM tokens WHERE token='$token'";
            
            $ret_result=mysqli_query($connection,$ret_query);
            if(mysqli_num_rows($ret_result)>0){
                $ret_array=mysqli_fetch_assoc($ret_result);
                $email=$ret_array['email'];
                $update_query="UPDATE customer SET password='$password' WHERE email='$email' ";
                $update_result=mysqli_query($connection,$update_query);
                
                if(mysqli_affected_rows($connection)>0){
                    
                    $alert="<div class='sent'>Password Reseted sucessfully.</div>";
                    $delete_query="DELETE FROM tokens WHERE token='$token'";
                    $delete_result=mysqli_query($connection,$delete_query);
                    header( "Location:../includes/login.php");
                }
                else{
                    
                    $alert="<div class='error'>Failed to reset the password.Please try again.</div>";

                }

            }else{
                $alert="<div class='error'>Access Denided!Token has used before.</div>";
            }
        }
        else{
            $alert="<div class='error'>Passwords do not match!</div>";
        }
    }
?>
<body>
<div class="topnav">
    <a href="../index.php"><img class = "logo" src="../images/logo.png"></a>
    <a class="navtab" href="../users/user-type.php">Register</a>
    <a class="navtab" href="../includes/login.php">Login</a>
		<a class="navtab" href="../includes/contact.php">Contact</a>
		<a class="navtab" href="../includes/about.php">About</a>
		<a class="navtab" href="javascript:void(0);" id="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a>    
  </div>
    <div class="reset-password">

        <img src="../images/form_icons/change-password.png">
        <h1>Reset Password</h1>
        <p>Enter New Password to Continue..</p>    
        <?php echo $alert;?>
        
        <form method="POST">            
            <div class="inputBox">
                <input class="input-feild-password" type="password" name="password" placeholder="Enter Password" required="">
            </div>
            <div class="inputBox">
                <input class="input-feild-password" type="password" name="re_password" placeholder="Re-enter Password" required="">
            </div>
            <input class="orange-btn" type="submit" name="reset" value="Reset">
            <input class="btn-change-normal" type="button" name="cancel" onclick="window.location.href='../includes/login.php'" value="Cancel">
        </form> 
    </div>  
</body>

 <!--Include footer.php-->
 <div class="footer-space"><?php include "../includes/footer.php" ?></div>
    
    <!--script for onClickNav() for the navigation menu-->
    <script src="../js/onClickNav.js"></script>
</html>