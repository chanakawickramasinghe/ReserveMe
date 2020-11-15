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
            <a href="admin-home.php"><img class = "logo" src="../../images/logo.png"></a>
            <a class="navtab" href="../../index.php">Logout</a>
        </div>
        <!--End of nav-->

        <!-- Admin Sidebar Dashboard -->
        
        <div class="sidebar">
            </br></br>
            <a href="admin-home.php">Home</a>
            <a href="manage-users.php">Manage Users</a>
            <a href="complaints.php">Complaints</a>
            <a href="messages.php">Messages</a>
            <a href="promotions.php" class="active">Promotions</a>
            <a href="log.php">Application Log</a>
            <hr>
            <a href="coadmins.php">Manage Co-Admins</a>
        </div>

        <div class="content-div">
            <br><br>        
            <h1>Ongoing Promotions</h1>

            <div class="promo-btn-bar">
                <button type="button" class="btn-promo" onclick="window.location.href='admin-add-promo.php'">Add Promotion</button>
                <button type="button" class="btn-promo" onclick="window.location.href='admin-past-promos.php'">View Past Promotions</button>
            </div>

            <table class="promo" id="myTable" border="1">
                <tr>
                    <th>Promo Image</th>
                    <th>User ID</th>
                    <th>Company Name</th>
                    <th>Posted Date & Time</th>
                    <th>End Date & Time</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td><img class="img-promo" src="../../images/promos/1.jpg"></td>
                    <td>4</td>
                    <td>Pizza Hut Colombo</td>
                    <td>2020-10-15 22:03:02</td>
                    <td>2020-10-22 22:03:02</td>
                    <td><button type="button" class="btn-promo-remove">Remove</button></td>                
                </tr>
                <tr>
                    <td><img class="img-promo" src="../../images/promos/2.jpg"></td>
                    <td>9</td>
                    <td>Burger King Gampaha</td>
                    <td>2020-10-20 09:00:00</td>
                    <td>2020-10-22 09:00:00</td>
                    <td><button type="button" class="btn-promo-remove">Remove</button></td>                
                </tr>
                <tr>
                    <td><img class="img-promo" src="../../images/promos/3.jpg"></td>
                    <td>10</td>
                    <td>KFC Colombo</td>
                    <td>2020-11-01 00:00:00</td>
                    <td>2020-11-08 00:00:00</td>
                    <td><button type="button" class="btn-promo-remove">Remove</button></td>                
                </tr>
            </table>
        </div>





    </body>
</html>