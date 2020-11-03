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
            <img class="logo" src="../../images/logo.png">
        </div>
        <!--End of nav-->

        <div class="search-user-container">
            <form>
                <!--heading-->
		        <h3>Search From Email or ID</h3>
		        <!--Input-------->
		        <div class="search-input">
			        <input placeholder="Enter Email or ID"/>
			        <button class="search-btn" name="search-user" type="submit">Search</button>
                </div>
            </form>
        </div>

        

    </body>
</html>