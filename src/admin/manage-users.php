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
        <link rel="stylesheet" href="../../public/CSS/footer.css">
    </head>
    <body>

        <!--Start of nav-->
        <div class="topnav" id="myTopnav">
            <a href="admin-home.php"><img class = "logo" src="../../public/images/logo.png"></a>
            <a class="navtab" href="../../src/customer/index.php">Logout</a>
            <a class="navtab" href="javascript:void(0);" id="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a>
        </div>
        <!--End of nav-->

        <!-- Admin Sidebar Dashboard -->
        
        <div class="sidebar">
            <a href="admin-home.php">Home</a>
            <a href="manage-users.php" class="active">Manage Users</a>
            <a href="messages.php">Messages</a>
            <a href="promotions.php">Promotions</a>
            <a href="log.php">Application Log</a>
            <!-- <hr>
            <a href="coadmins.php">Manage Co-Admins</a> -->

        </div>
        <div class="content-div">   
            <h1><font color="black">Users of</font> the system</h1>

            <!-- 3  buttons -->
            <div class="row-33">
                <button class="btn-users" type="button" name="view-customers" onclick="window.location.href='admin-view-customer.php'">Customers</button>
            </div>
            <div class="row-33">
            <button class="btn-users" type="button" name="view-restaurants" onclick="window.location.href='admin-view-restaurant.php'">Restaurant Manager</button>
            </div>
            <div class="row-33">
            <button class="btn-users" type="button" name="view-employees" onclick="window.location.href='admin-view-employee.php'">Employees</button>
            </div>
            <br><br/><br><br/><br/><br><br/>
            <div class="row-b">
                <div class="b b3">
                    <div class="num"> 
                        <!-- to show total number of registered customers -->
                        <?php 
                            $tot_cus_sql = "SELECT COUNT(user_id) AS TotCus FROM customer";
                            $tot_query = mysqli_query($connection,$tot_cus_sql);
                            $row_count = mysqli_fetch_assoc($tot_query);
                            $tot_cus = $row_count['TotCus'];
                            echo $tot_cus;
                        ?>
                    </div>
                    <div>REGISTERED CUSTOMERS</div>
                </div>
                <div class="b b4">
                    <div class="num">
                        <!-- to show total number of reservations done -->
                        <?php 
                            $tot_res_sql = "SELECT COUNT(reservation_id) AS TotRes FROM reservation";
                            $tot_query = mysqli_query($connection,$tot_res_sql);
                            $row_count = mysqli_fetch_assoc($tot_query);
                            $tot_res = $row_count['TotRes'];
                            echo $tot_res;
                        ?>
                        </div>
                    <div>TOTAL RESERVATIONS</div>
                </div>
                <div class="b b3">
                    <div class="num"><!-- to show total number of promotions -->
                        <?php 
                            $tot_promo_sql = "SELECT COUNT(promo_id) AS TotPromo FROM promotions";
                            $tot_query = mysqli_query($connection,$tot_promo_sql);
                            $row_count = mysqli_fetch_assoc($tot_query);
                            $tot_promo = $row_count['TotPromo'];
                            echo $tot_promo;
                        ?>
                        </div>
                    <div>TOTAL PROMOTIONS</div>
                </div>
                <div class="b b4">
                <div class="num"><!-- to show total number of promotions -->
                        <?php 
                            $tot_msg_sql = "SELECT COUNT(msg_id) AS TotMsg FROM contact_us";
                            $tot_query = mysqli_query($connection,$tot_msg_sql);
                            $row_count = mysqli_fetch_assoc($tot_query);
                            $tot_msg = $row_count['TotMsg'];
                            echo $tot_msg;
                        ?>
                        </div>
                    <div>TOTAL MESSAGES</div>
                </div>
            </div>
            <span><?php include('../../public/includes/footer.php'); ?></span>
            
        </div>

    <!--script for onClickNav() for the navigation menu-->
    <script src="../../public/js/onClickNav.js"></script>
    
    </body>
</html>