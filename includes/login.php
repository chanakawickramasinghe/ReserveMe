<?php include('connection.php') ?>
<?php include('session.php') ?>

<!DOCTYPE html>
<html>
    
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="../CSS/customer_reg.css"> 
    <link href="../css/nav.css" rel="stylesheet" type="text/css"/>
    <link href="../css/footer.css" rel="stylesheet" type="text/css"/>
    <link href="images/logo.png" rel="shortcut icon"/> 
    <script crossorigin="anonymous" src="https://kit.fontawesome.com/70a642cd7c.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body class="login-body">
    <!--Start of nav-->
    <div class="topnav" id="myTopnav">
        <img class = "logo" src="../images/logo.png">
        <a href="users/user-type.php">Register</a>
        <a href="includes/login.php">Login</a>
        <a href="#contact">Contact</a>
        <a href="#aboutus">About</a>
        <a href="javascript:void(0);" class="icon" onclick="onClickNav()">
            <i class="fa fa-bars"></i>
        </a>       
    </div>
    <!--End of nav-->

    <div class="row-100">  
    
        <div class="login-box" style="width:350px">
        <br>
        <br>      
        
        <img src="../images/profile.png" style="margin-top:70px" class="avatar">
        <h3 class="error-msg"><?php include_once('message.php'); ?></h3> 

            <h1 align="center">Login Here</h1>
                <form action="login-submit.php" method="post">
                <div>    
                <p><b>E-mail</b></p>
                    <input type="text" name="email" class="type-feild"  style="width:200px" placeholder="Enter E-mail" required>
                    <p><b>Password</b></p>
                    <input type="password" name="password" class="type-feild" style="width:200px" placeholder="Enter Password" required>
                   
                </div>
                <br>
                   <p align="center"> <input type="submit" name="submit" class="search-btn hover" value="Login"> </p>
                </br>
                    <p> <a href="../reset/email_verify.php">Forget Password? Click Here!</a></p>
                </form>  

        </div>
    </div> 
   
   <!--Include footer.php-->
   <div><?php include "footer.php" ?></div>
    
    <!--script for onClickNav() for the navigation menu-->
    <script src="../js/onClickNav.js"></script>
</body>
  
</html>