<?php include('../../public/includes/session.php') ?>
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
                <br/><br/><br/>
		        <h3>Search From Date</h3>
		        <!--Input-------->
		        <div class="search-input-activity">
                    <input type="date" id="date-activity"/>
                    <button type="button" class="search-btn">Search</button>
                </div>
                <br/>   
            </form>
        </div>
            <h2>Table <font color="orange">Reservations</font></h2>
        <div>
        <table class="user" id="myTable" border="1">
            <tr>
                <th>Reservation ID</th>
                <th>Customer ID</th>
                <th>Customer Name</th>
                <th>Table ID</th>
                <th>Reservation Date</th>
                <th>Reservation Time</th>
                <th>No. of Guests</th>
            </tr>
            <?php
                $sql = "SELECT reservation.* , customer.user_name FROM reservation INNER JOIN customer
                ON reservation.cus_id = customer.user_id";
        
                $sql_query = mysqli_query($connection,$sql);
                while($row = mysqli_fetch_assoc($sql_query)){
                
                    echo "
                        <tr>                  
                            <td>".$row['reservation_id']."</td>
                            <td>".$row['cus_id']."</td>
                            <td>".$row['user_name']."</td>
                            <td>".$row['table_id']."</td>
                            <td>".$row['date']."</td>
                            <td>".$row['time']."</td>
                            <td>".$row['no_of_guests']."</td>
                        </tr>";
                        
                } 
                echo "</table>";
                ?>
        </table>
        </div>
        </div>

    </body>
</html>