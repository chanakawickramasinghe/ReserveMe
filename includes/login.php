<?php include('connection.php') ?>
<?php include('session.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Login </title>
<link rel="icon" type="image/png" href="../images/logo.png" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Link the style sheets -->
<link href="../CSS/login.css" rel="stylesheet" type="text/css" >
<link href="../CSS/nav.css" rel="stylesheet" type="text/css"/>
<link href="../CSS/footer.css" rel="stylesheet" type="text/css"/>

<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"> -->
	<!--FontAwesome-------->
	<!-- <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css"> -->

</head>

<body>
	<!--Start of nav-->
    <div class="topnav">
        <a href="../index.php"><img class = "logo" src="../images/logo.png"></a>
		<a class="navtab" href="../users/customer/customerReg.php">Register</a>
		<a class="navtab" href="contact.php">Contact</a>
		<a class="navtab" href="about.php">About</a>
    </div>
    <!--End of nav-->
    <br><br><br><br>	
    

<div class="wrap-login100 ">
<img src="../images/form_icons/user.png" class="avatar">

<form action="login-submit.php" method="post">

    <h1 class="text-center">Login</h1>
    <h3 class="error-msg"><?php include_once('message.php'); ?></h3> 

        <div class="wrap-input100 validate-input" style="padding-top: 20px;" data-validate="Username is reauired">
            
            <img src="../images/form_icons/user.png" alt="user" class="icons"> Username 
           
            <input class="input100" type="email" name="email" placeholder="Type your username" required>
            <span class="focus-input100" data-symbol="&#xf206;"></span>
        </div><br>

        <div class="wrap-input100 validate-input" data-validate="Password is required">
            
            <img src="../images/form_icons/password.png" alt="user" class="icons">Password
            <input class="input100" type="password" name="password" placeholder="Type your password" required>
            <span class="focus-input100" data-symbol="&#xf190;"></span>
        </div>

        <div class="text-right" style="padding-top: 8px;padding-bottom: 31px">
            <a href="../reset/email_verify.php" class ="label-input100" style="color:blue"> Forgot password..! </a>
        </div>

        <div class="container-login100-form-btn">
	        <div class="wrap-login100-form-btn">
		    <div class="login100-form-bgbtn"></div>
                <button class="login100-form-btn" name="submit"> Login </button>
            </div>
        </div>

        <div class="txt1 text-center" style="padding-top: 54px;padding-bottom: 20px;" >
            <span> Or Sign Up Using </span>
        </div>

        <div class="flex-c-m">
            <a href="#" class="login100-social-item bg1">
            <i class="fa fa-facebook"></i>
            </a>
            <a href="#" class="login100-social-item bg2">
            <i class="fa fa-twitter"></i>
            </a>
            <a href="#" class="login100-social-item bg3">
            <i class="fa fa-google"></i>
            </a>
        </div>
<br>

        <div class="txt1 text-center">
            Or Sign Up Using....<a href="../users/user-type.php" class="txt2"> Sign Up </a>
        </div><br>


</form>
</div>



 <!--Include footer.php-->
 <div><?php include "footer.php" ?></div>
    
    <!--script for onClickNav() for the navigation menu-->
    <script src="../js/onClickNav.js"></script>

</body>
</html>
