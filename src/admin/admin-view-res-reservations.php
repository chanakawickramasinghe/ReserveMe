<?php include('../../public/includes/session.php') ?>
<?php include('../../config/connection.php') ?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ReserveMe - Admin</title>
	    <link rel="stylesheet" href="../../public/CSS/nav.css">
        <link href="../../public/images/logo.png" rel="shortcut icon"/>
        <link rel="stylesheet" href="../../public/CSS/admin-dashboard.css"/>
        <script src="../../public/js/manage-user-search.js"></script>
    </head>
    <body>

        <!--Start of nav-->
        <div class="topnav" id="myTopnav">
        <a href="admin-home.php"><img class = "logo" src="../../images/logo.png"></a>
            <a class="navtab" href="../../src/customer/index.php">Logout</a>
            <a class="navtab" href="admin-home.php">Home</a>
            <a class="navtab" href="manage-users.php">Manage Users</a>
            <a class="navtab" href="admin-view-restaurant.php">View Restaurant</a>
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
                <th>Reservation ID</th>
                <th>Date</th>
                <th>Time</th>
                <th>Customer ID</th>
                <th>Customer Name</th>
                <th>No. of Guests</th>
                <th>Status</th>
            </tr>
            <tr>
                <td>4</td>
                <td>2020-10-29</td>
                <td>13:56:20</td>
                <td>9</td>
                <td>Ted Mosby</td>
                <td>5</td>
                <td>Placed Reservation</td>
            </tr>
            <tr>
                <td>2</td>
                <td>2020-11-03</td>
                <td>08:15:26</td>
                <td>23</td>
                <td>Holland Price</td>
                <td>3</td>
                <td>Cancelled</td>
            </tr>
            <tr>
                <td>3</td>
                <td>2020-10-25</td>
                <td>08:00:50</td>
                <td>12</td>
                <td>Jeromy Carmel</td>
                <td>2</td>
                <td>Placed Reservation</td>
            </tr>
            <tr>
                <td>2</td>
                <td>2020-10-24</td>
                <td>17:15:36</td>
                <td>23</td>
                <td>Holland Price</td>
                <td>3</td>
                <td>Placed Reservation</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2020-10-15</td>
                <td>18:00:03</td>
                <td>16</td>
                <td>Jacob Lotarace</td>
                <td>2</td>
                <td>Placed Reservation</td>
            </tr>
        </table>
        </div>
        </div>

    </body>
</html>