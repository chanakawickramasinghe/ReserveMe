<?php include('../../includes/session.php') ?>
<?php include('../../includes/connection.php') ?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ReserveMe - Admin</title>
	    <link rel="stylesheet" href="../../CSS/admin-nav.css">
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
            <a class="navtab" href="admin-view-customer.php">View Customers</a>
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
            <?php
    $cus_id = $_GET['id'];
    echo $cus_id;
?>
        <div>

        <table class="user" id="myTable" border="1">
            <tr>
                <th>Date</th>
                <th>Time</th>
                <th>Activity</th>
                <th>Reservation Type</th>
                <th>Reservation Id</th>
                <th>No. of Guests</th>
                <th>Reservation Date</th>
                <th>Reservation Time</th>
            </tr>
        
        <?php
        
        $activity_sql = "SELECT cus_activity.act_date, cus_activity.act_time, cus_activity.activity, cus_activity.reservation_type, cus_activity.reservation_id,
        reservation.no_of_guests, reservation.date, reservation.time
        FROM cus_activity INNER JOIN reservation ON cus_activity.reservation_id=reservation.reservation_id;";

        $activity_query = mysqli_query($connection,$activity_sql);
        while($row = mysqli_fetch_assoc($activity_query)){
        
            echo "
                <tr>                  
                    <td>".$row['act_date']."</td>
                    <td>".$row['act_time']."</td>
                    <td>".$row['activity']."</td>
                    <td>".$row['reservation_type']."</td>
                    <td>".$row['reservation_id']."</td>
                    <td>".$row['no_of_guests']."</td>
                    <td>".$row['date']."</td>
                    <td>".$row['time']."</td>
                </tr>";
                
        } 
        echo "</table>";
        ?>

        </table>
        </div>
        </div>

    </body>
</html>