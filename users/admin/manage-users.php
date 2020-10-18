<?php include('../../includes/session.php') ?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ReserveMe - Admin</title>
        <link rel="stylesheet" href="../../CSS/main.css">
        <script src="https://kit.fontawesome.com/20026fc328.js" crossorigin="anonymous"></script>
	    <link rel="stylesheet" href="../../CSS/nav.css">
        <!-- <link rel="stylesheet" href="../../CSS/footer.css"> -->
        <link href="../../images/logo.png" rel="shortcut icon"/>
        <link rel="stylesheet" href="../../CSS/admin-dashboard.css"/>
    </head>
    <body>

        <!--Start of nav-->
        <div class="topnav" id="myTopnav">
            <a href="../../index.php">Logout</a>
            <a href="customer-profile.php">My Profile</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
            <img class = "logo" src="../../images/logo.png">
        </div>
        <!--End of nav-->

        <!-- Admin Sidebar Dashboard -->
        
        <div class="sidebar">
            </br></br>
            <a href="admin-home.php">Home</a>
            <a href="#users" class="active">Manage Users</a>
            <a href="#complaints">Complaints</a>
            <a href="#messages">Messages</a>
            <a href="#promotions">Promotions</a>
            <a href="#log">Application Log</a>
            <hr>
            <a href="#admins">Manage Co-Admins</a>

        </div>
        <div class="content-div">
            <br><br>        
            <h2>Users of the system</h2></h2>

            <div class="row-33">
                <p>Hello 1</p>
            </div>
            <div class="row-33">
                <p>Hello 1</p>
            </div>
            <div class="row-33">
                <p>Hello 1</p>
            </div>
        </div>


      
    <!--script for onClickNav() for the navigation menu-->
    <script src="../../js/onClickNav.js"></script>
    
    </body>
</html>