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

        <script crossorigin="anonymous" src="https://kit.fontawesome.com/70a642cd7c.js"></script>
    </head>
    <body>

        <!--Start of nav-->
        <div class="topnav" id="myTopnav">
        <a href="admin-home.php"><img class = "logo" src="../../images/logo.png"></a>
        <a class="navtab" href="../../public/includes/logout.php">Logout</a>
            <a class="navtab" href="admin-home.php">Home</a>
            <a class="navtab" href="manage-users.php">Manage Users</a>
            <a class="navtab" href="javascript:void(0);" id="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a>
        </div>
        <!--End of nav-->

        <div class="search-user-container">
            <form name="form-display-selected">
                <br/><br/><br/><br/><br/>

                <h3>Details of the Restaurant</h3>
                
                <div class="update-box">
                    
                <?php
        
                $restaurant_sql = "SELECT * FROM restaurant";
        
                $res_query= mysqli_query($connection,$restaurant_sql);
                $row = mysqli_fetch_assoc($res_query);
                
                $preorder_available = $row['preorder_available'];
                echo "
                    <br/>
                    <table class=\"admin-res-tbl\">
                        <tr>
                            <td rowspan=\"4\"><img class=\"img-admin-res-tbl\" src= \"../../public/images/restaurant/{$row['res_image']}\"></td>
                            <td><i class=\"fas fa-utensils\"> &nbsp;&nbsp;" .$row['res_name']."</i></td>
                            <td><i class=\"fas fa-at\"> &nbsp;&nbsp; ".$row['res_email']."</i></td>
                        </tr>
                        <tr>
                            <td><i class=\"fas fa-map-marker-alt\"> &nbsp;&nbsp; ".$row['res_add_line1'].", ".$row['city']."</i></td>
                            <td><i class=\"fas fa-map-marker-alt\"> &nbsp;&nbsp; <a href=".$row['res_location'].">Click here for Location</a></i></td>
                        </tr>
                        <tr>
                            <td><i class=\"fas fa-phone\"> &nbsp;&nbsp; ".$row['res_tel']."</i></td>
                            <td><i class=\"fas fa-star-half-alt\"> &nbsp;&nbsp; ".$row['res_rate']."</i></td>
                        </tr>
                        <tr>
                            <td><i class=\"fas fa-clock\"> &nbsp;&nbsp; ".$row['opening_hour']." - ".$row['closing-hour']."</i></td>
                            <td>"; 
                            if($preorder_available == 1){
                                echo "<i class=\"fas fa-utensils\"> &nbsp;&nbsp; Preorder Available </i></p>";
                            }else{
                                echo "<i class=\"fas fa-utensils\"> &nbsp;&nbsp; Preorder Unavailable </i></p>";
                            }
                            echo "</td>
                        </tr>
                    </table>";

                ?>
                    <p class="button-box">
                    <br/><br/>
                    <button class="btn-admin-res-view" type="button" name="btn-view-reservations" onClick="window.location='admin-view-res-reservations.php';">View Table Reservations</button>
                    <!-- <button class="btn-admin-res-view" type="button" name="btn-view-reservations" onClick="window.location='admin-view-pre-reservations.php';">View Pre-order Reservations</button> -->
                    <button class="btn-admin-res-view" type="button" name="btn-view-reservations" onClick="window.location='admin-view-hall-reservations.php';">View Hall Reservations</button>
                    </p>

                </div>
                
            </form>
        </div>
        <br/>
                  
       <!--script for onClickNav() for the navigation menu-->
    <script src="../../public/js/onClickNav.js"></script>


    </body>
</html>
