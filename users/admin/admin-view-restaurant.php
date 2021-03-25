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
        <a class="navtab" href="../../index.php">Logout</a>
            <a class="navtab" href="admin-home.php">Home</a>
            <a class="navtab" href="manage-users.php">Manage Users</a>
            <a class="navtab" href="javascript:void(0);" id="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a>
        </div>
        <!--End of nav-->

        <div class="search-user-container">
            <form name="form-display-selected">
                <br/><br/><br/>

                <h3>Details of the Restaurant</h3>
                
                <div class="update-box">
                    
                <?php
        
                $restaurant_sql = "SELECT * FROM restaurant";
        
                $res_query= mysqli_query($connection,$restaurant_sql);
                $row = mysqli_fetch_assoc($res_query);
        
                echo "
                    <img class=\"img-promo\" src= \"../../images/restaurant/{$row['res_image']}\">                 
                    ".$row['res_name']."
                    <td>".$row['res_email']."</td>
                    <td>".$row['res_add_line1']."</td>
                    <td>".$row['city']."</td>
                    <td>".$row['res_location']."</td>
                    <td>".$row['res_tel']."</td>
                    <td>".$row['preorder_available']."</td>
                    <td>".$row['res_rate']."</td>
                    <td>".$row['opening_hour']."</td>
                    <td>".$row['closing-hour']."</td>"; 

        ?>
                    <p class="button-box">
                    <button class="btn-blue-l" type="button" name="btn-view-reservations" onclick="viewActivityRes()">View Reservations</button>
                    </p>

                </div>
                
            </form>
        </div>
        <br/>
                  
       <!--script for onClickNav() for the navigation menu-->
    <script src="../../js/onClickNav.js"></script>


    </body>
</html>
