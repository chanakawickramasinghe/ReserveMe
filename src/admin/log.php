<?php include('admin-session.php') ?>
<?php include('../../config/connection.php') ?>

<?php
    $name = "";
    $email = "";
    $contact = "";
    $type = "";
    $password = "";    
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ReserveMe - Admin</title>
        <script src="https://kit.fontawesome.com/20026fc328.js" crossorigin="anonymous"></script>
	    <link rel="stylesheet" href="../../public/CSS/admin-nav.css">
        <link href="../../public/images/logo.png" rel="shortcut icon"/>
        <link rel="stylesheet" href="../../public/CSS/admin-dashboard.css"/>
        <script src="../../public/js/manage-user-search.js"></script>
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
            <a href="promotions.php">Promotions</a>
            <a class="active" href="log.php">Application Log</a>
            <!-- <hr>
            <a href="coadmins.php">Manage Co-Admins</a> -->
        </div>

        <div class="content-div">  
            <h1><font color="black">Application</font> Log</h1>
            <div class="search-user-container">
            <form name="form-display-selected">
                <!--heading-->
		        <h3>Search From ID</h3>
		        <!--Input-------->
		        <div class="log-input">
                    <input type="text" id="myInput" onkeyup="myFunctionLog()"
                    placeholder="Enter ID"/>
                </div>
            </div>     
            
                <br/>
            <!-- Adding the table with log details -->
        
        <table class="log" id="myTable" border="1">
            <tr>
                <th>User ID</th>
                <th>User Type</th>
                <th>Date and Time</th>
                <th>Activity</th>
            </tr>
        
        <?php
        
        $log_sql = "SELECT * FROM log";
        
        $userquery = mysqli_query($connection,$log_sql);
        while($row = mysqli_fetch_assoc($userquery)){
        
            echo "
                <tr>                  
                    <td>".$row['user_id']."</td>
                    <td>".$row['user_type']."</td>
                    <td>".$row['date_time']."</td>
                    <td>".$row['activity']."</td>
                    
                </tr>";
                
        } 
        echo "</table>";
        ?>

        </div>

        <!--script for onClickNav() for the navigation menu-->
    <script src="../../public/js/onClickNav.js"></script>
    </body>
</html>