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
<link href="../CSS/main.css"  rel="stylesheet" type="text/css">
<link href="../CSS/nav.css" rel="stylesheet" type="text/css"/>
<link href="../CSS/footer.css" rel="stylesheet" type="text/css"/>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<!--FontAwesome-------->
	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

</head>

<body>
	<!--Start of nav-->
    <div class="topnav">
        <a href="../index.php"><img class = "logo" src="../images/logo.png"></a>
		<a class="navtab" href="../users/customer/customerReg.php">Register</a>
        <a class="navtab active" href="login.php">Login</a>
		<a class="navtab" href="contact.php">Contact</a>
		<a class="navtab" href="about.php">About</a>
        <a class="navtab" href="javascript:void(0);" id="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a>   
    </div>
    <!--End of nav-->	
    
    <div class="loginbg">
        <div class="login-side">
        <img src="../images/logo.png" alt="logo" class="sidelogo">
        <p class="side-para">ReserveMe helps you reserve tables and pre-order meals at restaurants in your life.<p>
        </div>

        <div class="wrap-login100" style="display:inline-block">            
            <!-- form to get data -->
            <form action="login-submit.php" method="post">
                <center><img src="../images/form_icons/vector-users.png" alt="usericon" class="userIcon">
                <h1 style="display: inline-block;color:green">Login</h1></center>
                <p class="error-msg"><?php include_once('message.php'); ?></p>

                    <div class="wrap-input100 validate-input" style="padding-top: 20px;" data-validate="Username is required">                    
                        <input class="input100" type="email" name="email" placeholder="Type your Email" required>
                        <span class="focus-input100"></span>
                    </div><br>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password" placeholder="Type your password" required>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="text-right" style="color:blue; padding-top:8px; padding-bottom: 15px">
                        <a href="../reset/email_verify.php" style="color:blue"> Forgot password! </a>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" name="submit"> Login </button>
                        </div>
                    </div>

                    <br>
                    <div class="txt1 text-center">
                        for create a new account <a href="../users/customer/customerReg.php" class="txt2"> Click here! </a>
                    </div>
            </form>            
        </div>
         <!--Include footer.php-->
        <div><?php include "footer.php" ?></div>
    </div>
    
    <!--script for onClickNav() for the navigation menu-->
    <script src="../js/onClickNav.js"></script>

</body>
</html>
