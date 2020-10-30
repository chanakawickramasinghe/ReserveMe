<?php include('../../includes/connection.php') ?>
<?php include('../../includes/session.php') ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emploee-Home</title>  
    <script src="https://kit.fontawesome.com/20026fc328.js" crossorigin="anonymous"></script>
  	<link rel="stylesheet" href="../../CSS/nav.css">   
    <link rel="stylesheet" href="../../CSS/footer.css">
    

    <!-- <style>
table {
  border-spacing: 5px;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style> -->


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
  
        
        <img class = "image" src="../../images/employee.png" width="125" height="125" alt="Restaurent logo">
        <h1 style= "color:white;"><c><b>Employee Home<b><c></h1>
        <br><br><br>
      <div class="topnav" >
         
  <a href="employee-profile.php" target="iframe_a" >Employee Profile</a>
  <a href="pre-order-menu.php" target="iframe_a">Pre - Order Menu</a>
  <a href="customer-queries.php" target="iframe_a">Customer Queries</a>
  <a href="reports.php" target="iframe_a">Reports</a>
  <a href="manage-reservation.php" target="iframe_a">Manage Reservation</a>
  <a href="reception-hall.php" target="iframe_a">Reception Hall</a>
      </div>
  </td style="width:85%">
  <td><iframe src="employee-profile.php" frameborder="1px" name="iframe_a"scrolling="yes" style="width:100% ; height:100%">
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
    
