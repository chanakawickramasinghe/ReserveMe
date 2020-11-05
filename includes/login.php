<?php include('connection.php') ?>
<?php include('session.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Login </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../CSS/login.css"> 
<link rel="icon" type="image/png" href="../images/logo.png" />
<link href="../CSS/main.css" rel="stylesheet" type="text/css"/>
	<link href="../CSS/nav.css" rel="stylesheet" type="text/css"/>
	<link href="../CSS/footer.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<!--FontAwesome-------->
	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

</head>
<body class="login-body">
	<!--Start of nav-->
    <div class="topnav" id="myTopnav">
        <img class="logo" src="../images/logo.png"> 
        
        <a href="../users/user-type.php">Register</a>
        <a href="users/admin/contact.php">Contact</a>
        <a href="about.php">About</a>
        <a href="javascript:void(0);" class="icon" onclick="onClickNav()">
            <i class="fa fa-bars"></i>
        </a>       
    </div>
    <!--End of nav-->
	<b>
    
<div class="limiter">
<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
<div class="wrap-login100 ">
<img src="../images/profile.png" class="avatar">

<form class="login100-form validate-form" action="login-submit.php" method="post">

<span class="login100-form-title p-b-49"> Login </span>
<h3 class="error-msg"><?php include_once('message.php'); ?></h3> 

<div class="wrap-input100 validate-input" style="padding-top: 20px;" data-validate="Username is reauired">
    <span class="label-input100"> Username </span>
    <input class="input100" type="email" name="email" placeholder="Type your username" required>
    <span class="focus-input100" data-symbol="&#xf206;"></span>
</div><br>
<div class="wrap-input100 validate-input" data-validate="Password is required">
    <span class="label-input100">Password</span>
    <input class="input100" type="password" name="password" placeholder="Type your password" required>
    <span class="focus-input100" data-symbol="&#xf190;"></span>
</div>
<div class="text-right" style="padding-top: 8px;padding-bottom: 31px;">
    <a href="../reset/email_verify.php"> Forgot password..! </a>
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
<div class="txt1" style="text-align: center;float: center;padding-bottom:17px">
    Or Sign Up Using....<a href="../users/user-type.php" class="txt2"> Sign Up </a>
</div>


</form>
</div>
</div>
</div>

 <!--Include footer.php-->
 <div><?php include "footer.php" ?></div>
    
    <!--script for onClickNav() for the navigation menu-->
    <script src="../js/onClickNav.js"></script>

</body>
</html>
