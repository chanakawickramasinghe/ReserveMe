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
		    <a class="navtab" href="javascript:void(0);" id="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a>
		</div>
        <!--End of nav-->

        <div class="search-user-container">
                <br/><br/><br/>
                <center>
                <h3>Details of Employee</h3>
                
                <div class="update-box">

                <img src = "../../public/images/restaurant/emp.jpg" class="img-admin-emp-view" alt="emp image">
                    
                <?php
        
                $emp_sql = "SELECT * FROM employee";

                $emp_query= mysqli_query($connection,$emp_sql);
                $row = mysqli_fetch_assoc($emp_query);

                echo "
                    <table>
                        <tr>
                            <th>Employee Name : </th>
                            <td>".$row['emp_name']."</td>
                        </tr>
                        <tr>
                            <th>Employee Email : </th>
                            <td>".$row['emp_email']."</td>
                        </tr>
                        <tr>
                            <th>Contact Number : </th>
                            <td>".$row['emp_mobile']."</td>
                        </tr>
                        <tr>
                            <th>Employee Nic : </th>
                            <td>".$row['emp_nic']."</td>
                        </tr>
                    </table>";
                ?>
      
                </div>
                
                </center>
        </div>
        <br/>
                    
       <!--script for onClickNav() for the navigation menu-->
    <script src="../../public/js/onClickNav.js"></script>

    </body>
</html>
