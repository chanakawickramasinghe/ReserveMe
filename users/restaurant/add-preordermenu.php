<DOCTYPE html>
<html lang = "en" dir = "ltr">

<head>
    <title>Preorder-menu</title>
    <meta name="viewport" content="width=device-width", initial-scale="1.0" charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../../CSS/customer_Reg.css">   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/nav.css" rel="stylesheet" type="text/css"/>
    <link href="../../css/footer.css" rel="stylesheet" type="text/css"/>
    <link href="../../images/logo.png" rel="shortcut icon"/> 
    <script crossorigin="anonymous" src="https://kit.fontawesome.com/70a642cd7c.js"></script>
</head>

<body class="login-body">

<!--Start of nav-->
    <div class="topnav" id="myTopnav">
        <img class = "logo" src="../../images/logo.png">
        <a href="users/user-type.php">Register</a>
        <a href="includes/login.php">Login</a>
        <a href="#contact">Contact</a>
        <a href="#aboutus">About</a>
        <a href="javascript:void(0);" class="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a>       
    </div>
<!--End of nav-->
<br><br><br><br><br>
    <div class="tab" >
        <div class="login-box" style="height:450px;padding:10px 30px">
            <form name="formRestSignup" action="add-preordermenu.php" method="post" enctype="multipart/form-data">
                <h2 class="error-msg" style="font-size:14px"><?php include_once('../../includes/message.php'); ?></h2>
                <br>
                <h1 align="center">Pre - Order Menu</h1>
                <h4 align="center">Details regarding the Menu available to place Pre-Orders</h4>
                <br>
                <p><h3>Item Name<h3></p>
                <input type="text" class="type-feild"   name="item_name" placeholder="Item Name" required>
                <p><h3>Item Price<h3></p>
                <input type="text"  class="type-feild" name="item_price" placeholder="Price in LKR" required>
                <br>
                <input type="submit" name="submit" style="margin-left:220px;margin-top:-25px" class="search-btn hover" value="Submit" required>
                <br><br><br>
                <input type="submit" name="submit" style="margin-left:220px;margin-top:-25px" class="search-btn hover" value="Complete" required>
            </form>
        </div>
    <div>
</body>

</html>
