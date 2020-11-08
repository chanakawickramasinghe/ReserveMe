<!DOCTYPE html>
<html>
    <head>
        <title> User Type selection</title>
        <link rel="icon" type="image/png" href="../images/logo.png" />
        <link href="../css/login.css" rel="stylesheet" type="text/css"/>
        <link href="../css/nav.css" rel="stylesheet" type="text/css"/>
    <link href="../css/footer.css" rel="stylesheet" type="text/css"/>
    <!--web-icon-->
    <link href="../images/logo.png" rel="shortcut icon"/>
    <script crossorigin="anonymous" src="https://kit.fontawesome.com/70a642cd7c.js"></script>
     </head>
    <body class="login-body">
     <div class="row-100">  
     <!--Start of nav-->
    <div class="topnav" id="myTopnav">
        <a href="../index.php"><img class = "logo" src="../images/logo.png"></a>
        <a class="navtab" href="../includes/login.php">Login</a>
        <a class="navtab" href="../includes/contact.php">Contact</a>
		<a class="navtab" href="../includes/about.php">About</a>
		<!--<a href="javascript:void(0);" class="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a> -->     
    </div>
    <!--End of nav-->
        <!-- <h3 class="error-msg"><?php include('includes/message.php'); ?></h3> -->

    <!-- <img src="images/logins.png" class="avatar"> -->
            <h1 align="center" style="margin-top:50px">Sign Up As</h1>
            <h2 align="center" style="color:white"> Select user Type here </h2>
            <br>
           <div style="">
           <a href="restaurant/res_reg.php"><img style="border-radius:10px;width:300px;height:430px;margin-left: 30%" src="../images/RestaurantSignUp.png"></a>
           <a href="customer/customerReg.php">  <img style="border-radius:10px;width:300px;height:430px " src="../images/UserSignUp.png"></a>
</div>


    </div> 
    <!--Include footer.php-->
   <div><?php include "../includes/footer.php" ?></div>
    
    <!--script for onClickNav() for the navigation menu-->
    <script src="../js/onClickNav.js"></script>
</body>
</html>
