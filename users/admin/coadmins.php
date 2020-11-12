<?php include('../../includes/session.php') ?>
<?php include('../../includes/connection.php') ?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ReserveMe - Admin</title>
        <script src="https://kit.fontawesome.com/20026fc328.js" crossorigin="anonymous"></script>
	    <link rel="stylesheet" href="../../CSS/nav.css">
        <link href="../../images/logo.png" rel="shortcut icon"/>
        <link rel="stylesheet" href="../../CSS/admin-dashboard.css"/>
    </head>
    <body>

        <!--Start of nav-->
        <div class="topnav" id="myTopnav">
            <a href="../../index.php"><img class = "logo" src="../../images/logo.png"></a>
            <a class="navtab" href="../../index.php">Logout</a>
		    <a class="navtab" href="customer-profile.php">My Profile</a>
		</div>
        <!--End of nav-->

        <!-- Admin Sidebar Dashboard -->
        
        <div class="sidebar">
            </br></br>
            <a href="admin-home.php">Home</a>
            <a href="manage-users.php">Manage Users</a>
            <a href="complaints.php">Complaints</a>
            <a href="messages.php">Messages</a>
            <a href="promotions.php">Promotions</a>
            <a href="log.php">Application Log</a>
            <hr>
            <a class="active" href="coadmins.php">Manage Co-Admins</a>
        </div>
        
        <div class="content-div">
            <br><br>        
            <h1>Co-admins of the System</h1>

            <div class="coadmin-table">

            <table class="coadmin" id="myTable" border="1">
            <tr>
                <th>Admin Name</th>
                <th>Admin Email</th>
                <th>Contact No.</th>
                <th>Admin Type</th>
            </tr>
        
        <?php
        
        $admin_sql = "SELECT * FROM admins";
        
        $userquery = mysqli_query($connection,$admin_sql);
        while($row = mysqli_fetch_assoc($userquery)){
        
            echo "
                <tr>                  
                    <td>".$row['admin_name']."</td>
                    <td>".$row['admin_email']."</td>
                    <td>".$row['contact_no']."</td>
                    <td>".$row['admin_type']."</td>
                    
                </tr>";
                
        } 
        echo "</table>";
        ?>
            </div>
            <div class="vl"></div>
            <div class="coadmin-dashboard">
                <form class="update-box">
                    <table>
                        <tr>
                            <th>Admin Name : </th>
                            <td><input class="input-l" type="text" placeholder="Admin Name" id="admin_name" required></td>
                        </tr>
                        <tr>
                            <th>Admin Email : </th>
                            <td><input class="input-l" type="text" placeholder="Admin Email" id="admin_email" required></td>
                        </tr>
                        <tr>
                            <th>Contact No. : </th>
                            <td><input class="input-m" type="text" placeholder="Contact" id="contact_no" required></td>
                        </tr>
                        <tr>
                            <th>Admin Type : </th>
                            <td><input class="input-m" type="text" placeholder="Type" id="admin_type" readonly="true" required></td>
                        </tr>

                    </table>
                    <button class="btn-coadmins" type="button" name="add-coadmins" onclick="window.location.href='coadmins-add-submit.php'">Add New</button>
                    <button class="btn-coadmins" type="button" name="update-coadmins" onclick="window.location.href='coadmins-update-submit.php'">Update</button>
                    <button class="btn-coadmins" type="button" name="delete-coadmins" onclick="window.location.href='coadmins-delete-submit.php'">Delete</button>
                </form>
            </div>
        </div>
        

    </body>
</html>