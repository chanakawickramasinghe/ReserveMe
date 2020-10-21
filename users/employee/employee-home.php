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

<body>
    <!--Start of nav-->
    <div class="topnav" id="myTopnav">
        <a href="../../index.php">Logout</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>       
        <img class="logo" style="margin-right:1080px" src="../../images/logo.png">
        
    </div>
    <!--End of nav-->

<h1 style= "color:white" align="center"><b>Employee Home<b></h1>
        <br><br><br>
   
         <!-- Adding the table with current user details -->
         <?php
        checkSession();
        echo "<table border=1 class=\"user\">";
        
        $userID = $_SESSION["userID"]; //have to add session id
        $sql = "SELECT * FROM employee WHERE emp_id='$userID'";
        
        $userquery = mysqli_query($connection,$sql);
        while($row = mysqli_fetch_assoc($userquery)){
        echo"</br></br><h1 class=div-c>Welcome " .$row['emp_name']."</h1>";

            echo "
                </br>
                
                <tr>                  
                <th>Name</th><td>".$row['emp_name']."</td>
                </tr>
                <tr>
                <th>Email</th><td>".$row['emp_email']."</td>
                </tr>
                <tr>
                <th>Contact No</th><td>".$row['emp_mobile']."</td>
                </tr>";
        } 
        echo "</table>";
        ?>
        </br>
        <!-- edit details button -->
       
        <div class="employee-nav">
            <form>

               
                    <a href="#" class="search-button pulsate">confirm Table Reservation</a><br>
                    <a href="#" class="search-button pulsate">Confirm Pre- Order</a><br>
                    <a href="../employee/employee-add.php" class="search-button pulsate">Notification</a>
                    <br>
                    <a href="#" class="search-button pulsate">Reception Hall</a>
               
            </form>            
    </div>
    <?php include('../../includes/footer.php'); ?>
    </body>
</html>
    
</body>
</html>
