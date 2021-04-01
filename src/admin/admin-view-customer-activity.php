<?php include('admin-session.php') ?>
<?php include('../../config/connection.php') ?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ReserveMe - Admin</title>
	    <link rel="stylesheet" href="../../public/CSS/admin-nav.css">
        <link href="../../public/images/logo.png" rel="shortcut icon"/>
        <link rel="stylesheet" href="../../public/CSS/admin-dashboard.css"/>
        <script src="../../public/js/manage-user-search.js"></script>
    </head>
    <body>

        <!--Start of nav-->
        <div class="topnav" id="myTopnav">
        <a href="admin-home.php"><img class = "logo" src="../../public/images/logo.png"></a>
            <a class="navtab" href="../../public/includes/logout.php">Logout</a>
            <a class="navtab" href="admin-home.php">Home</a>
            <a class="navtab" href="manage-users.php">Manage Users</a>
            <a class="navtab" href="admin-view-customer.php">View Customers</a>
		    <a class="navtab" href="javascript:void(0);" id="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a>
        </div>
        <!--End of nav-->
        <br/><br/><br/><br/>
        <!-- <div class="search-user-container">
            <form name="form-display-selected">
                
		        <h3>Search From Date</h3>
		        <div class="search-input-activity">
                    <input type="date" id="date-activity"/>
                    <button type="button" class="search-btn">Search</button>
                </div>
                <br/>   
            </form>
        </div> -->
            
            <?php
    $cus_id = $_POST['user_id'];
    // echo $cus_id;

    $sql = "SELECT * FROM customer WHERE user_id='$cus_id'";
    $sql_query = mysqli_query($connection,$sql);
    $row = mysqli_fetch_assoc($sql_query);

    $cus_name = $row['user_name'];
   
?>
            <h2>Activity of User : <font color="orange"><?php echo $cus_name; ?> </font>(Id = <font color="orange"> <?php echo $cus_id; ?></font>)</h2>
        <div>

        <table class="user" id="myTable" border="1">
            <tr>
                <th>Date & Time</th>
                <!-- <th>Time</th> -->
                <th>Activity</th>
                <th>Reservation Type</th>
                <th>Reservation Id</th>
                <th>No. of Guests</th>
                <th>Reservation Date</th>
                <th>Reservation Time</th>
            </tr>
        
        <?php
        
        $activity_sql = "SELECT cus_activity.act_date_time, cus_activity.activity, cus_activity.reservation_type, cus_activity.reservation_id,
        reservation.no_of_guests, reservation.date, reservation.time
        FROM cus_activity INNER JOIN reservation ON cus_activity.reservation_id=reservation.reservation_id WHERE cus_activity.cus_id='$cus_id';";

        $activity_query = mysqli_query($connection,$activity_sql);
        while($row = mysqli_fetch_assoc($activity_query)){
        
            echo "
                <tr>                  
                    <td>".$row['act_date_time']."</td>
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