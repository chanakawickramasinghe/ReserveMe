<?php include('../../includes/connection.php') ?>
<!-- <?php include('../../includes/session.php') ?> -->

<html>
    <head>
        <title>My Profile</title>
        <link rel="stylesheet" href="../../CSS/style.css">
        <link rel="stylesheet" href="../../CSS/nav.css">
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->

    </head>
    <body>
        <nav>
            <label class="logo"><a href="customer-home.php"><img src="../../images/test.jpg" height=800%></a></label>
            <ul>
                <li><a>Table Reservations</a></li>
                <li><a>Hall Reservations</a></li>
                <li><a href="../../index.php">Logout</a></li> 
            </ul>
        </nav>
        
                
        <!-- Adding the table with current user details -->
        <?php
        echo "<table border=1 class=\"user\">";
    
        $userID = "111"; //have to add session id
        echo"<h1 class=div-c>Welcome " .$userID."</h1>";
        $sql = "SELECT * FROM customer WHERE cusId='$userID'";
        $userquery = mysqli_query($connection,$sql);
        while($row = mysqli_fetch_assoc($userquery)){

            echo "<tr>
                <th>Cus ID</th><td>".$row['cusId']."</td>
                  </tr>
                  <tr>                  
                    <th>Name</th><td>".$row['cusName']."</td>
                  </tr>
                  <tr>
                    <th>Email</th><td>".$row['cusAddress']."</td>
                  </tr>
                  <tr>
                    <th>Contact No</th><td>".$row['cusContactNo']."</td>
                  </tr>";
        } 
        echo "</table>";
        ?>
        </br>
        <!-- edit details button -->
        <div class="btn-header">
            <form>
                <div class="form-box">
                    <button name="edit" class="btn" type="button" onclick="window.location.href='customer-profile-edit.php'">Edit Details</button>
                    <button name="deactivate" class="btn" type="button">Deactivate Account</button>
                </div>
            </form>
        </div>
    </body>
</html> 