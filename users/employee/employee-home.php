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
  	<link rel="stylesheet" href="../../CSS/nav.css">   
    <link rel="stylesheet" href="../../CSS/footer.css">

</head>

<body style="padding:0px">
   <!--Start of nav-->
    <div class="topnav" id="myTopnav">
        <a href="../../index.php">Logout</a>
        <a href="../admin/contact.php">Contact</a>
        <a href="../../includes/about.php">About</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
        </a>
        <img style="margin-right:800px"class = "logo" src="../../images/logo.png">
    </div>
    <!--End of nav-->

    <!--Start of options-->

    
    
<table style="width:100%;border:0px solid black;height:100%"  >
  <tr><td style="width:15%;">
    <?php 
     checkSession();
     $userID = $_SESSION["res_id"]; //have to add session id
     $sql = "SELECT res_image FROM restaurant WHERE res_id='$userID'";
      $userquery = mysqli_query($connection,$sql);
      $row = mysqli_fetch_assoc($userquery);
      echo
      " <img class = \"image\" src=\"../../images/restaurant/".$row['res_image']."\" alt=\"Restaurent logo\">";
      ?>

      <div class="topnav"  >
         
  <a style="float:left" href="employee-profile.php" target="iframe_a" >Employee Profile</a>
  <a style="float:left" href="pre-order-menu.php" target="iframe_a">Pre - Order Menu</a>
  <a style="float:left" href="customer-queries.php" target="iframe_a">Customer Queries</a>
  <a style="float:left" href="reports.php" target="iframe_a">Reports</a>
  <a style="float:left" href="manage-reservation.php" target="iframe_a">Manage Reservation</a>
  <a style="float:left" href="reception-hall.php" target="iframe_a">Reception Hall</a>
      </div>
  </td style="width:85%">
  <td><iframe src="employee-profile.php" frameborder="0px" name="iframe_a"scrolling="yes" style="width:100% ; height:100%;background-color:">
                                        </iframe> </td>                 
  </tr>    
  
  <tr><td colspan=2>
  <?php include('../../includes/footer.php'); ?>
  </td></tr>
  </table>                



    
</body>
</html>
    
</body>
</html>
    
