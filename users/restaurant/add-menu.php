<?php include 'add-menu-submit.php'; ?>

<!DOCTYPE html>
<html lang = "en" dir = "ltr">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Menu</title>
    <link rel="stylesheet" href="../../CSS/main.css">
    <script src="https://kit.fontawesome.com/20026fc328.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../../CSS/nav.css">
    <link rel="stylesheet" href="../../CSS/search.css">
    <link rel="stylesheet" href="../../CSS/footer.css">
</head>

<body>

    <!--Start of nav-->
    <div class="topnav" id="myTopnav">
        <a href="../../index.php">Logout</a>
        <a href="restaurant-profile.php">My Profile</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
        <img class = "logo" src="../../images/logo.jpg">
    </div>
    <!--End of nav-->

    <!--Start of getting photos-->
    <div id="content">
        <form action="add-menu-submit.php" method="post" enctype="multipart/form-data">
            <h2 class="error-msg" style="font-size:14px"><?php include_once('../../includes/message.php'); ?></h2>

                <h1 align="center">Add Menu</h1>
                <br><br><br>
                <p><h3>Insert images of your Restaurant Menu seperately.</h3></p>
                <br><br><br>
                <input type="file" name="size" value="1000000">
                <div>
                    <input type="file" name="menu_image">
                </div>
                <br><br>
                <div>
                    <button type="submit" name="upload" value="Upload Image">
                </div>    
        </form>
    </div>
    

</body>
</html>
