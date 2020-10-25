<?php include('../../includes/connection.php') ?>
<?php include('../../includes/session.php') ?>

<html>
    <head>
        <title>My Profile</title>
        <link rel="stylesheet" href="../../CSS/style.css">
        <link rel="stylesheet" href="../../CSS/nav.css">
        <link rel="stylesheet" href="../../CSS/main.css">
        <link rel="stylesheet" href="../../CSS/footer.css">
        <link href="../../images/logo.png" rel="shortcut icon"/> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script crossorigin="anonymous" src="https://kit.fontawesome.com/70a642cd7c.js"></script>

    </head>
    <body>
        <!--Start of nav-->
        <div class="topnav" id="myTopnav">
            <a href="../../includes/logout.php">Logout</a>
            <a href="customer-profile.php">My Profile</a>
            <a href="#contact">Contact</a>
            <a href="#about">About</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
            <img class = "logo" src="../../images/logo.png">
        </div>
    <!--End of nav-->
        
                
        <!-- Adding the table with current user details -->
        <?php
        checkSession();
        echo "<table border=1 class=\"user\">";
        
        $userID = $_SESSION["userID"]; //have to add session id
        $sql = "SELECT * FROM customer WHERE user_id='$userID'";
        
        $userquery = mysqli_query($connection,$sql);
        while($row = mysqli_fetch_assoc($userquery)){
        echo"</br></br><h1 class=div-c>Welcome " .$row['user_name']."</h1>";

            echo "
                </br>
                <tr>
                <th>Cus ID</th><td>".$row['user_id']."</td>
                </tr>
                <tr>                  
                <th>Name</th><td>".$row['user_name']."</td>
                </tr>
                <tr>
                <th>Email</th><td>".$row['email']."</td>
                </tr>
                <tr>
                <th>Contact No</th><td>".$row['contact_no']."</td>
                </tr>
                <tr>
                <th>DOB</th><td>".$row['dob']."</td>
                </tr>
                <tr>
                <th>Postal Number</th><td>".$row['postal_number']."</td>
                </tr>
                <tr>
                <th>Street</th><td>".$row['street']."</td>
                </tr>
                <tr>
                <th>City</th><td>".$row['city']."</td>
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
                    <button name="deactivate" class="btn" type="button" onclick="window.location.href='customer-confirm-deactivate.php'">Deactivate Account</button>
                </div>
            </form>
        </div>
        <!--Include footer.php-->
   <div><?php include "../../includes/footer.php" ?></div>
    
    <!--script for onClickNav() for the navigation menu-->
    <script src="../../js/onClickNav.js"></script>
    </body>
</html> 