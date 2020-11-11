<?php include('../../includes/session.php') ?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ReserveMe - Admin</title>
        <!-- <link rel="stylesheet" href="../../CSS/main.css"> -->
        <script src="https://kit.fontawesome.com/20026fc328.js" crossorigin="anonymous"></script>
	    <link rel="stylesheet" href="../../CSS/nav.css">
        <!-- <link rel="stylesheet" href="../../CSS/footer.css"> -->
        <link href="../../images/logo.png" rel="shortcut icon"/>
        <link rel="stylesheet" href="../../CSS/admin-dashboard.css"/>
    </head>
    <body>

        <!--Start of nav-->
        <div class="topnav" id="myTopnav">
            <a href="../../index.php"><img class = "logo" src="../../images/logo.png"></a>
            <a class="navtab" href="../../index.php">Logout</a>
		    <a class="navtab" href="customer-profile.php">My Profile</a>
		    
        </div>
        <!--End of nav-->

        <!-- Admin Sidebar Dashboard -->
        
        <div class="sidebar">
            </br></br>
            <a class="active" href="#home">Home</a>
            <a href="manage-users.php">Manage Users</a>
            <a href="complaints.php">Complaints</a>
            <a href="messages.php">Messages</a>
            <a href="promotions.php">Promotions</a>
            <a href="log.php">Application Log</a>
            <hr>
            <a href="coadmins.php">Manage Co-Admins</a>

        </div>
        <div class="content-div">
            <br><br>  
            <?php
                checkSession();
                echo "
                    <h1>Welcome ".$_SESSION["name"]."!</h1>";    
            ?>  
            
            <br><br>
            <div class="admin-home">
                <?php
                
                echo"
                <p>Admin Name : ".$_SESSION["name"]."</p>
                <p>Admin Email : ".$_SESSION["email"]."</p>
                <p>Admin Type : ".$_SESSION["type"]."</p>
                <p>Login Date and Time : ".$_SESSION["last_login"]."</p>";
                ?>
            </div>
             
        </div>


      
    <!--script for onClickNav() for the navigation menu-->
    <script src="../../js/onClickNav.js"></script>
    
    </body>
</html>