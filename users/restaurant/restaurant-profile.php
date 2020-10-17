<?php include('../../includes/connection.php') ?>
<?php include('../../includes/session.php') ?>

<html>
    <head>
        <title>My Profile</title>
        <link rel="stylesheet" href="../../CSS/footer.css">
        <link rel="stylesheet" href="../../CSS/style.css">
        <link rel="stylesheet" href="../../CSS/nav.css">
        <link rel="stylesheet" href="../../CSS/main.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../../images/logo.png" rel="shortcut icon"/> 
        <script src="https://kit.fontawesome.com/20026fc328.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <!--Start of nav-->
        <div class="topnav" id="myTopnav">
            <a href="#logout">Logout</a>
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
    
        $res_id = $_SESSION["res_id"]; //have to add session id
        echo"</br></br><h1 class=div-c>Welcome " .$_SESSION["res_name"]."</h1>";
        $sql = "SELECT * FROM restaurant WHERE resid='$res_id'";
        $userquery = mysqli_query($connection,$sql);
        while($row = mysqli_fetch_assoc($userquery)){

            echo "
                </br>
                <tr>
                <th>Res ID</th><td>".$row['res_id']."</td>
                </tr>
                <tr>                  
                <th>Name</th><td>".$row['res_name']."</td>
                </tr>
                <tr>
                <th>Email</th><td>".$row['res_email']."</td>
                </tr>
                <tr>
                <th>Contact No</th><td>".$row['res_tel']."</td>
                </tr>
                <tr>
                <th>Address</th><td>".$row['res_add_line1']."</td><br><td>".$row['res_add_line2']."</td><br><td>".$row['res_add_line3']."</td>
                </tr>
                <tr>
                <th>Location</th><td>".$row['res_location']."</td>
                </tr>
                <tr>
                <th>Floor Plan</th><td>".$row['res_floor']."</td>
                </tr>
                <tr>
                <th>Menu</th><td>".$row['res_menu']."</td>
                </tr>
                <tr>
                <th>Preorder Availability</th><td>".$row['preorder_available']."</td>
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
                    <button name="edit" class="btn" type="button" onclick="window.location.href='restaurant-profile-edit.php'">Edit Profile</button>
                    <button name="deactivate" class="btn" type="button">Deactivate Account</button>
                </div>
            </form>
        </div>
         <!--Include footer.php-->
   <div><?php include "../../includes/footer.php" ?></div>
    
    <!--script for onClickNav() for the navigation menu-->
    <script src="../../js/onClickNav.js"></script>
    </body>
</html>
 