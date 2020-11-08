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
            <a href="../../index.php">Logout</a>
            <a href="customer-profile.php">My Profile</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
            <img class="logo" src="../../images/logo.png">
        </div>
        <!--End of nav-->

        <!-- Admin Sidebar Dashboard -->
        
        <div class="sidebar">
            </br></br>
            <a href="admin-home.php">Home</a>
            <a href="manage-users.php" class="active">Manage Users</a>
            <a href="complaints.php">Complaints</a>
            <a href="#messages">Messages</a>
            <a href="#promotions">Promotions</a>
            <a href="#log">Application Log</a>
            <hr>
            <a href="#admins">Manage Co-Admins</a>

        </div>
        <div class="content-div">
            <br><br>        
            <h1>Users of the system</h1>

            <!-- 3  buttons -->
            <div class="row-33">
                <button class="btn-users" type="button" name="view-customers" onclick="window.location.href='admin-view-customer.php'">Customers</button>
            </div>
            <div class="row-33">
            <button class="btn-users" type="button" name="view-restaurants" onclick="window.location.href='admin-view-restaurant.php'">Restaurants</button>
            </div>
            <div class="row-33">
            <button class="btn-users" type="button" name="view-employees" onclick="window.location.href='admin-view-employee.php'">Employees</button>
            </div>

            <br/><br><br/><br/><br><br/><br/><br><br/>

            <!--Start of search user-->
	        <div class="search-user-container">
            <form>
                <!--heading-->
		        <h3>Search From Email</h3>
		        <!--Input-------->
		        <div class="search-input">
			        <input placeholder="Example@gmail.com" type="email" />
			        <button class="search-btn" name="search-user" type="submit">Search</button>
                </div>
                
                <br/>
                <p>Email : </p>
                <p>User Type : </p>
                <p>Name : </p>
                <p>User Id :</p>

            </form>
            </div>
        </div>


      
    <!--script for onClickNav() for the navigation menu-->
    <script src="../../js/onClickNav.js"></script>
    
    </body>
</html>