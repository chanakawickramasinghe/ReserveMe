<?php include('../../includes/connection.php') ?>
<?php include('../../includes/session.php') ?>

<html>
    <head>
        <title>Employee Profile</title>
        <link href="../../images/logo.png" rel="shortcut icon"/> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <a  href="employee-profile.php"><img style="weight:50px;height:50px;float:right" src="../../images/form_icons/user.png" alt=""></a>
        <a class="navtab" href="../../index.php">Logout</a>
		<a class="navtab" href="../../includes/contact.php">Contact</a>
		<a class="navtab" href="../../includes/about.php">About</a>
        
        </div>
    <!--End of nav-->

    <!-- Start of sidbar -->
    <div class="sidebar"> 
      <span><a href="employee-home.php" >Employee Home</a></span>      
      <a href="pre-order-menu.php">Pre - Order Menu</a>
      <a href="queries.php">Queries</a>
      <a href="table-reservation.php">Manage Reservation</a>
      <a href="reception-hall.php">Reception Hall</a>
    </div>
    <!-- End of nav bar -->
    
    <div class="content">
    <?php
        checkSession();
        
        $userID = $_SESSION["emp_id"]; //have to add session id
        $sql = "SELECT * FROM employee WHERE emp_id='$userID'";

        $resID= $_SESSION["res_id"]; //Get the Restaurent Name
        $sql2 = "SELECT * FROM restaurant WHERE res_id='$resID'";

        $resquery = mysqli_query($connection,$sql2);
        $row2 = mysqli_fetch_assoc($resquery);
        
        $userquery = mysqli_query($connection,$sql);
        $row = mysqli_fetch_assoc($userquery);
        echo"<center><h1 class=div-c>Welcome <span style=\"color:orange\"> ".$row['emp_name']." </span> , Employee of <span style=\"color:orange\"> ".$row2['res_name']." </span> </h1></center>";
        ?>

        <br>
        <table class="tab-emp">
        <tr>
            <td>Name : </td>
            <td><?php echo $row['emp_name'];?></td>
        </tr>
        <tr>
            <td>Email : </td>
            <td><?php echo $row['emp_email'];?></td>
        </tr>
        <tr>
            <td>Contact No :</td>
            <td><?php echo $row['emp_mobile'];?></td>
        </tr>        
        </table>
       
        
        <img src="../../images/deco/restaurant-staff.jpg" alt="feedback" class="resimage">

    </div>
    </body>
</html> 