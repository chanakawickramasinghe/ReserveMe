<?php include('../../includes/connection.php') ?>
<?php include('../../includes/session.php') ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emploee-Home</title>  
    <link href="../../images/logo.png" rel="shortcut icon"/> 
    <script src="https://kit.fontawesome.com/20026fc328.js" crossorigin="anonymous"></script>
    <!-- Link the style sheets -->
  	<link rel="stylesheet" href="../../CSS/nav.css">   
    <link rel="stylesheet" href="../../CSS/footer.css">
    <link rel="stylesheet" href="../../CSS/employee.css">



</head>

<body style="padding:0px">
   <!--Start of nav-->
    <div class="topnav" id="myTopnav">
        <a href="../../index.php"><img class = "logo" src="../../images/logo.png"></a>
        <a class="navtab" href="../../index.php.php">Logout</a>
		    <a class="navtab" href="../../includes/contact.php">Contact</a>
		    <a class="navtab" href="../../includes/about.php">About</a>
		    <!--<a href="javascript:void(0);" class="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a> -->     
    </div>
    <!--End of nav-->

    <!--Start of options-->

    
    
<table style="height:100%;width:100%"  >
  <tr >
  <td style="width:20%">
  
    <?php 
     checkSession();
     $userID = $_SESSION["res_id"]; //have to add session id
     $sql = "SELECT res_image FROM restaurant WHERE res_id='$userID'";
      $userquery = mysqli_query($connection,$sql);
      $row = mysqli_fetch_assoc($userquery);
      echo
      " <img class = \"resimage\" src=\"../../images/restaurant/".$row['res_image']."\"  alt=\"Restaurent logo\">";
      ?>

    <div class="sidebar"> 
      <span><a href="employee-profile.php" target="iframe_a" class="active">Employee Profile</a></span>      
      <a href="pre-order-menu.php" target="iframe_a">Pre - Order Menu</a>
      <a href="customer-queries.php" target="iframe_a">Customer Queries</a>
      <a href="reports.php" target="iframe_a">Reports</a>
      <a href="manage-reservation.php" target="iframe_a">Manage Reservation</a>
      <a href="reception-hall.php" target="iframe_a">Reception Hall</a>
</div>

  </td>

  <td style="width:80%">
  <iframe src="employee-profile.php" frameborder="0px" name="iframe_a" scrolling="yes" style="width:100% ; height:100%;background-color:"></iframe> 
  </td>  

  </tr>    
  
  
  
  
  
  
  
  <tr><td colspan=2>
  <?php include('../../includes/footer.php'); ?>
  </td></tr>
  </table>                



    
</body>
</html>
    
</body>
</html>
    
