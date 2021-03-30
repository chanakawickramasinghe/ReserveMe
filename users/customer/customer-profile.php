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
			<img class = "logo" src="../../images/logo.png">
			<a class="navtab" href="../../index.php">Logout</a>
			<a class="navtab active" href="customer-profile.php">Profile</a>
			<a class="navtab" href="reservation_details.php">Reservations</a>
			<a class="navtab" href="../../includes/logged_contact.php">Contact</a>
			<a class="navtab" href="../../includes/logged_about.php">About</a>
			<a class="navtab" href="javascript:void(0);" id="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a>
		</div>
		<!--End of nav-->
        
                
        <!-- Adding the table with current user details -->
        <?php
        checkSession();
        echo "<table class=\"user-new\">";
        
        $userID = $_SESSION["userID"]; //session id
        $sql = "SELECT * FROM customer WHERE user_id='$userID'";
        
        $userquery = mysqli_query($connection,$sql);
        while($row = mysqli_fetch_assoc($userquery)){
        echo"</br></br><h1 class=div-c>Welcome <font color=\"orange\">" .$row['user_name']."</font></h1>";

            echo "
                </br>
                <tr>
                <th>Customer ID</th><td>".$row['user_id']."</td>
                </tr>
                <tr>                  
                <th>Customer Name</th><td>".$row['first_name']."</td>
                </tr>
                <tr>                  
                <th>Customer Name</th><td>".$row['last_name']."</td>
                </tr>
                <tr>                  
                <th>Customer Name</th><td>".$row['user_name']."</td>
                </tr>
                <tr>
                <th>Customer Email</th><td>".$row['email']."</td>
                </tr>
                <tr>
                <th>Contact No</th><td>".$row['contact_no']."</td>
                </tr>
                <tr>
                <th>Date of Birth</th><td>".$row['dob']."</td>
                </tr>
                ";
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
