<?php include('../../includes/connection.php') ?>
<?php include('../../includes/session.php') ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emploee-Home</title>
    <link rel="stylesheet" href="../../CSS/main.css">
    <script src="https://kit.fontawesome.com/20026fc328.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../../CSS/nav.css">
    <link rel="stylesheet" href="../../CSS/search.css">
    <link rel="stylesheet" href="../../CSS/footer.css">
    <link rel="stylesheet" href="../../CSS/style.css">
    <link rel="stylesheet" href="../../CSS/res_reg.css">
    <link rel="stylesheet" href="../../CSS/customer_reg.css">



</head>

<body style="padding:0px">
   <!--Start of nav-->
    <div class="topnav" id="myTopnav">
        <a href="../../index.php">Logout</a>
        <a href="customer-profile.php">My Profile</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
        </a>
        <img style="margin-right:1000px"class = "logo" src="../../images/logo.png">
    </div>
    <!--End of nav-->

    <!--Start of options-->
    <header class="header">
        <div class="search">
        <img class = "image" src="../../images/employee.png" width="125" height="125">
        <h1 style= "color:white;"><c><b>Employee Home<b><c></h1>
        <br><br><br>
            <form>
                
                <div ><c>
                    <a href="#" class="search-button ">Pre - Order Menu</a>
                    <a href="#" class="search-button ">Customer Queries</a>
                    <a href="#" class="search-button ">Reports</a>
                    <a href="#" class="search-button ">Manage Reservation</a>
                    <a href="#" class="search-button ">Reception Hall</a>
                </c></div>

            </form>            
    </div>
    </header>
    <?php include('../../includes/footer.php'); ?>
    </body>
</html>
    
</body>
</html>
    
