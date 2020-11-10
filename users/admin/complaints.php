<?php include('../../includes/session.php') ?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ReserveMe - Admin</title>
	    <link rel="stylesheet" href="../../CSS/nav.css">
        <link href="../../images/logo.png" rel="shortcut icon"/>
        <link rel="stylesheet" href="../../CSS/admin-dashboard.css"/>
    </head>
    <body>

        <!--Start of nav-->
        <div class="topnav" id="myTopnav">
            <a href="../../index.php"><img class = "logo" src="../../images/logo.png"></a>
            <a class="navtab" href="../../index.php">Logout</a>
            <a class="navtab" href="customer-profile.php">My Profile</a>
            <a class="navtab" href="admin-home.php">Home</a>
		    <!--<a href="javascript:void(0);" class="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a> -->     
        </div>
        <!--End of nav-->

        <!-- Admin Sidebar Dashboard -->
        
        <div class="sidebar">
            </br></br>
            <a href="admin-home.php">Home</a>
            <a href="manage-users.php">Manage Users</a>
            <a href="complaints.php"  class="active">Complaints</a>
            <a href="#messages">Messages</a>
            <a href="#promotions">Promotions</a>
            <a href="#log">Application Log</a>
            <hr>
            <a href="#admins">Manage Co-Admins</a>





    </body>
</html>
