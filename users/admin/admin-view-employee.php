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
                
                <h3>Details of Employee</h3>
                
                <div class="update-box">
                    
                <?php
        
                $emp_sql = "SELECT * FROM employee";

                $emp_query= mysqli_query($connection,$emp_sql);
                $row = mysqli_fetch_assoc($emp_query);

                echo "
                    ".$row['emp_name']."
                    <td>".$row['emp_email']."</td>
                    <td>".$row['emp_mobile']."</td>"
                ?>
      
                </div>
                
            </form>
        </div>
        <br/>
                    
       <!--script for onClickNav() for the navigation menu-->
    <script src="../../js/onClickNav.js"></script>

    </body>
</html>
