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
        <link rel="stylesheet" href="../../public/CSS/footer.css">
    </head>
    <body>

        <!--Start of nav-->
        <?php include('../../public/includes/admin-nav.php'); ?>
        <!--End of nav-->

        <!-- Admin Sidebar Dashboard -->
        
        <div class="sidebar">

            <a href="admin-home.php">Home</a>
            <a href="manage-users.php">Manage Users</a>
            <a href="messages.php">Messages</a>
            <a href="promotions.php" class="active">Promotions</a>
            <a href="log.php">Application Log</a>
            <!-- <hr>
            <a href="coadmins.php">Manage Co-Admins</a> -->
        </div>

        <div class="content-div">   
            <h1><font color="black">Ongoing</font> Promotions</h1>

            <div class="promo-btn-bar">
                <button type="button" class="btn-promo" onclick="window.location.href='admin-past-promos.php'">View Past Promotions</button>
            </div>


        <?php

            //get date to check
            date_default_timezone_set('Asia/Colombo');
            $today_date = date("Y-m-d H:i:s");

            $promos = "SELECT * FROM promotions WHERE end_date>'$today_date'"; //check with date

            $promo_query = mysqli_query($connection,$promos);
            $num_promos = mysqli_num_rows($promo_query);

            if ($num_promos == 0){ //if there are no current promotions
                echo"<p>No Past Promotions to Display</p>";
            }

            else { //to see current promos
                echo "
                <table class=\"promo\" id=\"myTable\" border=\"1\">
                <tr>
                    <th>Promo ID</th>
                    <th>Promo Image</th>
                    <th>Post Date & Time</th>
                    <th>End Date & Time</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr> ";

                while($row = mysqli_fetch_assoc($promo_query)){
                echo"
                <tr> 
                    <td>".$row['promo_id']."</td> 
                    <td><img class=\"img-promo\" src= \"../../public/images/promos/{$row['image']}\"></td>                     
                    <td>".$row['start_date']."</td>
                    <td>".$row['end_date']."</td>
                    <td>".$row['text']."</td>
                    <td><a class=\"btn-promo-remove\" href =remove-promo.php?id='".$row['promo_id']."' > Remove </a> </td>

                </tr>";
                }
                echo"
                </table> ";
            }
        ?>
        <?php //include('../../public/includes/footer.php'); ?>
        </div>



    <!--script for onClickNav() for the navigation menu-->
    <script src="../../public/js/onClickNav.js"></script>

    </body>
</html>