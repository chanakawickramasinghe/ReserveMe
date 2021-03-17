<?php include('../../includes/connection.php') ?>
<?php include('../../includes/session.php') ?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Home</title>  
    <link href="../../images/logo.png" rel="shortcut icon"/> 
    <!-- Link the style sheets -->
    <link rel="stylesheet" href="../../CSS/employee.css">
    <link rel="stylesheet" href="../../CSS/main.css">
    <link rel="stylesheet" href="../../CSS/nav.css">   
    <link rel="stylesheet" href="../../CSS/footer.css">

</head>

<body>
    <!--Start of nav-->
   <div class="topnav">
      <a href="restaurant-home.php"><img class = "logo" src="../../images/logo.png"></a>
      <a href="#restaurant-profile.php"><img class="profile-icon" src="../../images/form_icons/user.png" alt="profile"></a>
      <a class="navtab" href="../../index.php">Logout</a>
      <a class="navtab" href="javascript:void(0);" id="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a>
        
    </div>
    <!--End of nav-->
   
    <!-- Start of side bar -->
    <div class="sidebar"> 
      <a href="restaurant-home.php" class="active">Home</a> 
      <a href="add-preordermenu.php">Pre - Order Menu</a>    
      <a href="add-menu.php">Update the Menu</a>
      <a href="res-promo.php">Promotions</a>
      <a href="res-floor-plan.php">Floor Plan</a> 
      <a href="res-reservation.php">Reservations</a>
      <a href="../customer/res_view/review/index.html?res_id=4">View Reviews</a>   
      <a href="res-contactus.php">Help Desk</a>
      <br>
      <hr>
      <a href="emp-iframe.php">Manage Employee</a>
      <a href="hall-details.php">Reception Hall</a>
    </div>
    <!-- End of side bar -->

    <div class="content">
    <div style="margin:20px">      
       
        <center><h2><span style="color:black">Reserve</span><span style="color:orange">Me</span></h2></center>
        <center><h5> Reide Avenue, Colombo 07</h5></center>
        <br><br> 
        <center><img src="../../images/topaz.jpg" width="600" hight="584"></center>
          

    <?php include('../../includes/footer.php'); ?>
  </div>  
</body>

</html>
