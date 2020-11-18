<?php include('../../includes/session.php') ?>
<?php include('../../includes/connection.php') ?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ReserveMe - Admin</title>
	    <link rel="stylesheet" href="../../CSS/nav.css">
        <link href="../../images/logo.png" rel="shortcut icon"/>
        <link rel="stylesheet" href="../../CSS/admin-dashboard.css"/>
        <script src="../../js/manage-user-search.js"></script>
    </head>
    <body>

        <!--Start of nav-->
        <div class="topnav" id="myTopnav">
        <a href="../../index.php"><img class = "logo" src="../../images/logo.png"></a>
            <a class="navtab" href="admin-home.php">Logout</a>
            <a class="navtab" href="admin-home.php">Home</a>
            <a class="navtab" href="manage-users.php">Manage Users</a>
		    <a class="navtab" href="javascript:void(0);" id="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a>
        </div>
        <!--End of nav-->

        <div class="search-user-container">
            <form name="form-display-selected">
                <!--heading-->
		        <h3>Search From Date</h3>
		        <!--Input-------->
		        <div class="search-input-activity">
                    <input type="date" id="date-activity"/>
                    <button type="button" class="search-btn">Search</button>
                </div>
                <br/>   
            </form>
        </div>
            <h2>Activity of User</h2>
        <div>
        <table class="user" id="myTable" border="1">
            <tr>
                <th>Date</th>
                <th>Time</th>
                <th>Activity</th>
                <th>Status</th>
            </tr>
            <tr>
                <td>2020-11-03</td>
                <td>08:15:26</td>
                <td>Made a Hall Reservation in Hilton Hotel Colombo</td>
                <td>Successful</td>
            <tr>
                <td>2020-10-29</td>
                <td>13:56:20</td>
                <td>Cancel Table Reservation in Cinnamon Grand</td>
                <td>Successful</td>
            </tr>
            <tr>
                <td>2020-10-25</td>
                <td>08:00:50</td>
                <td>Made a Table Reservation in Hilton Hotel Colombo</td>
                <td>Successful</td>
            </tr>
            <tr>
                <td>2020-10-24</td>
                <td>17:15:36</td>
                <td>Made a Table Reservation in Cinnamon Grand</td>
                <td>Successful</td>
            </tr>
            <tr>
                <td>2020-10-15</td>
                <td>18:00:03</td>
                <td>Created Account</td>
                <td>Successful</td>
            </tr>
        </table>
        </div>

            



        </div>

    </body>
</html>