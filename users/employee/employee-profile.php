<?php include('../../includes/connection.php') ?>
<?php include('../../includes/session.php') ?>
<?php include('emp-session.php') ?>


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
        
    <?php include('navigations.php'); ?>

    <!-- Start of sidbar -->
    <div class="sidebar"> 
      <a href="venues.php">Reservation Status</a><hr>    
      <a href="menu.php">Set Menu</a><hr>
      <a href="queries.php">Queries</a><hr>
      <a href="table-reservation.php">Manage Reservation</a><hr>
    </div>
    <!-- End of sidebar -->

    <!-- Get data from database -->
    <?php
        checkSession();
        $userName = $_SESSION["emp_name"]; //have to add session id
        $userEmail= $_SESSION["emp_email"];
        $user_mobile=$_SESSION["emp_mobile"];

        $resID= $_SESSION["res_id"]; //Get the Restaurent Name
        $sql2 = "SELECT * FROM restaurant WHERE res_id='$resID'";

        $resquery = mysqli_query($connection,$sql2);
        $row2 = mysqli_fetch_assoc($resquery);
    ?>

    
    <div class="content">

        <center><h1 class=div-c>Welcome <span style="color:orange"> <?php echo $userName;?> </span> , Employee of <span style="color:orange"> <?php echo $row2['res_name'];?> </span> </h1></center>

        <br>
        <table class="tab-emp">
        <tr>
            <td>Name : </td>
            <td><?php echo $userName;?></td>
        </tr>
        <tr>
            <td>Email : </td>
            <td><?php echo $userEmail;?></td>
        </tr>
        <tr>
            <td>Contact No :</td>
            <td><?php echo $user_mobile;?></td>
        </tr>        
        </table>
       
        
        <img src="../../images/deco/restaurant-staff.jpg" alt="feedback" class="resimage">

    </div>

    <div class="footer"> <?php include('../../includes/footer.php'); ?> </div>
    </body>
</html> 