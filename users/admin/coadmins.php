<?php include('../../includes/session.php') ?>
<?php include('../../includes/connection.php') ?>

<?php 
    checkSession();
    if ($_SESSION["type"] != "admin"){
        header('Location:./not-admin.php');
    }

?>

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
	    <link rel="stylesheet" href="../../CSS/nav.css">
        <link href="../../images/logo.png" rel="shortcut icon"/>
        <link rel="stylesheet" href="../../CSS/admin-dashboard.css"/>
    </head>
    <body>

        <!--Start of nav-->
        <div class="topnav" id="myTopnav">
            <a href="admin-home.php"><img class = "logo" src="../../images/logo.png"></a>
            <a class="navtab" href="../../index.php">Logout</a>
            <a class="navtab" href="javascript:void(0);" id="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a>
		</div>
        <!--End of nav-->

        <!-- Admin Sidebar Dashboard -->
        
        <div class="sidebar">
            </br></br>
            <a href="admin-home.php">Home</a>
            <a href="manage-users.php">Manage Users</a>
            <a href="messages.php">Messages</a>
            <a href="promotions.php">Promotions</a>
            <a href="log.php">Application Log</a>
            <hr>
            <a class="active" href="coadmins.php">Manage Co-Admins</a>
        </div>
        
        <div class="content-div">
            <br><br>        
            <h1><font color="black">Coadmins of</font> the System</h1>

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
                <form class="update-box" method="POST" action="coadmins-submit.php">
                    <table>
                        <tr>
                            <th>Admin Name : </th>
                            <td><input class="input-l" type="text" placeholder="Admin Name" id="admin_name" name="name" pattern="^[A-Za-z ]+$" required></td>
                        </tr>
                        <tr>
                            <th>Admin Email : </th>
                            <td><input class="input-l" type="email" placeholder="Admin Email" id="admin_email" name="email" required></td>
                        </tr>
                        <tr>
                            <th>Contact No. : </th>
                            <td><input class="input-l" type="text" placeholder="Contact" id="contact_no" name="contact" pattern='^\+?\d{11}' required></td>
                        </tr>
                        <tr>
                            <th>Admin Type : </th>
                            <td><input class="input-m" type="text" placeholder="Type" id="admin_type" name="type"  required></td>
                        </tr>
                        <tr>
                            <th>Password : </th>
                            <td><input class="input-m" type="password" placeholder="Password" id="password" name="password"
                            pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"></td>
                        </tr>

                    </table>
                    <input type="submit" class="btn-coadmins"  name="add" value="Add New">
                    <input type="submit" class="btn-coadmins"  name="update" value="Update">
                    <input type="submit" class="btn-coadmins"  name="delete" value="Delete">
                </form>
            </div>
        </div>
         


<script>
    var table = document.getElementById('myTable');
                
        for(var i = 2; i < table.rows.length; i++)
        {
            table.rows[i].onclick = function()
            {
                document.getElementById("admin_name").value = this.cells[0].innerHTML;
                document.getElementById("admin_email").value = this.cells[1].innerHTML;
                document.getElementById("contact_no").value = this.cells[2].innerHTML;
                document.getElementById("admin_type").value = this.cells[3].innerHTML;
                // document.getElementById("password").value = this.cells[3].innerHTML;
                
            };
        }

</script>

        <!--script for onClickNav() for the navigation menu-->
    <script src="../../js/onClickNav.js"></script>

    </body>
</html>