<?php include('../../includes/session.php') ?>
<?php include('../../includes/connection.php') ?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ReserveMe - Admin</title>
        <link href="../../images/logo.png" rel="shortcut icon"/>
        <script src="https://kit.fontawesome.com/20026fc328.js" crossorigin="anonymous"></script>
	    <!--css style sheets-->
        <link rel="stylesheet" href="../../CSS/admin-nav.css">
        <link rel="stylesheet" href="../../CSS/admin-dashboard.css"/>
        <link rel="stylesheet" href="../../CSS/footer.css">
    </head>
    <body>

        <!--Start of nav-->
        <span>
        <div class="topnav" id="myTopnav">
            <a href="admin-home.php"><img class = "logo" src="../../images/logo.png"></a>
            <a class="navtab" href="../../index.php">Logout</a>
		    <a class="navtab" href="javascript:void(0);" id="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a>
        </div>
        </span>
        
        <!--End of nav-->

        <!-- Admin Sidebar Dashboard -->
        
        <div class="sidebar">
            <a class="active" href="#home">Home</a>
            <a href="manage-users.php">Manage Users</a>
            <a href="messages.php">Messages</a>
            <a href="promotions.php">Promotions</a>
            <a href="log.php">Application Log</a>
            <hr>
            <a href="coadmins.php">Manage Co-Admins</a>

        </div>
        <div class="content-div"> 
            <?php
                checkSession();
                echo "
                    <h1><font color=\"black\">Welcome</font> ".$_SESSION["name"]."!</h1>";    
            ?>  
            
            
            <div class="admin-home">
            <?php
                echo "<table border=1 class=\"detail-admin\">";
        
        $email = $_SESSION["email"]; 
        $admin_sql = "SELECT * FROM admins WHERE admin_email='$email'";
        
        $userquery = mysqli_query($connection,$admin_sql);
        while($row = mysqli_fetch_assoc($userquery)){

            echo "
                <tr>
                    <th>Admin ID  </th>
                    <td>".$row['admin_id']."</td>
                </tr>
                <tr>
                    <th>Admin Name  </th>
                    <td>".$row['admin_name']."</td>
                </tr>
                <tr>
                    <th>Admin Email  </th>
                    <td>".$row['admin_email']."</td>
                </tr>
                <tr>
                    <th>Contact No.  </th>
                    <td>".$row['contact_no']."</td>
                </tr>
                <tr>
                    <th>Admin Type  </th>
                    <td>".$row['admin_type']."</td>
                </tr>";
        } 
        echo "</table>";
        ?>

        <img class="img-admin" src="../../images/us/admin.png">
                
            </div>
            <div class = "admin-home">
                <button class="btn-change" type="button" onclick="window.location.href='admin-change-password.php'">Change Paasword</button>
            </div>

            <!-- adding container to input data -->
            <!-- <div class="flex-container">
                <div>Total Users</div>
                <div>Upcoming Reservations</div>
                <div>Past Reservations</div>  
            </div>             -->

            <div class="stats">
                
            </div>
             
        </div>

        <!-- <br>
        <span><?php //include('../../includes/footer.php'); ?></span> -->

    <!--script for onClickNav() for the navigation menu-->
    <script src="../../js/onClickNav.js"></script>
    
    </body>
</html>