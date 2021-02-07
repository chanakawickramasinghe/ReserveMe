<?php include('../../includes/connection.php') ?>
<?php include('../../includes/session.php') ?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emploee-Home</title>  
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
        <a href="../../index.php"><img class = "logo" src="../../images/logo.png"></a>
        <a  href=""><img style="weight:50px;height:50px;float:right" src="../../images/form_icons/user.png" alt=""></a>
        <a class="navtab" href="../../index.php">Logout</a>
		    <a class="navtab" href="../../includes/contact.php">Contact</a>
		    <a class="navtab" href="../../includes/about.php">About</a>
        
    </div>
    <!--End of nav-->
   
  <div class="sidenavbar">
    <?php 
     checkSession();
     $userID = $_SESSION["res_id"]; //have to add session id
     $sql = "SELECT res_image FROM restaurant WHERE res_id='$userID'";
      $userquery = mysqli_query($connection,$sql);
      $row = mysqli_fetch_assoc($userquery);
      echo
      " <img class = \"resimage\" src=\"../../images/restaurant/".$row['res_image']."\"  alt=\"Restaurent logo\">";
      ?>
    <br><br><br><br>
    <div class="sidebar"> 
      <span><a href="employee-profile.php" target="iframe_a" >Employee Home</a></span>      
      <a href="pre-order-menu.php" target="iframe_a">Pre - Order Menu</a>
      <a href="queries.php" target="iframe_a">Queries</a>
      <a href="table-reservation.php" target="iframe_a">Manage Reservation</a>
      <a href="reception-hall.php" target="iframe_a">Reception Hall</a>
    </div>

  </div>

  <iframe src="employee-profile.php" frameborder="0px" name="iframe_a" scrolling="yes" style="width:80% ; height:80vh;float:right"></iframe> 

  <table width="100%"><tr><td>
  <?php include('../../includes/footer.php'); ?>
  </td></tr></table>

    
</body>
</html>
    
</body>
</html>
    
