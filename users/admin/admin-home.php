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

        <div class="topnav" id="myTopnav">
            <a href="admin-home.php"><img class = "logo" src="../../images/logo.png"></a>
            <a class="navtab" href="../../index.php">Logout</a>
		    <a class="navtab" href="javascript:void(0);" id="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a>
        </div>

        <!--End of nav-->

        <!-- Admin Sidebar Dashboard -->
        
        <div class="sidebar">
            <a class="active" href="#home">Home</a>
            <a href="manage-users.php">Manage Users</a>
            <a href="messages.php">Messages</a>
            <a href="promotions.php">Promotions</a>
            <a href="log.php">Application Log</a>
            <!-- <hr>
            <a href="coadmins.php">Manage Co-Admins</a> -->

        </div>
        <div class="content-div"> 
            <?php
                checkSession();
                echo "
                    <h1><font color=\"black\">Welcome</font> ".$_SESSION["name"]."!</h1>";    
            ?>  
            <br/>
            
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
                <!-- <button class="btn-change" type="button" onclick="window.location.href='admin-change-password.php'">Change Password</button> -->
            
                <button type="button" class="collapsible">Change password</button>

                <div class="content-collapse">
                    
                    <form method="POST" action="admin-change-password-submit.php">
                        <h3>Are you sure want to change your password?</h3>
                        <h2 class="error-msg"><?php include_once('../../includes/message.php'); ?></h2>
                            <div class="form-change">
                                <table>
                                    <tr>
                                        <th>Current Password : </th>
                                        <td><input type="password" name="cur_pword" placeholder="Current Password" required></p></td>
                                    </tr>
                                    <tr>
                                        <th>New Password : </th>
                                        <td><input type="password" name="new_pword1" placeholder="New Password" id="pword1" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required></td>
                                    </tr>
                                    <tr>
                                        <th>Confirm Password : </th>
                                        <td><input type="password" name="new_pword2" placeholder="Re-Enter Password" id="pword2" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" onkeyup='check()' required></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><P align="center" id='message' ></P></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><center><button type="submit" class="btn-change-blue" name="change-pword">Change Password</button>
                                        <button type="reset" class="btn-change-normal">Clear</button></center></td>
                                    </tr>
                                </table>
                                
                            </div>
                    </form>                    
                </div>
            </div>

            <span><?php include('../../includes/footer.php'); ?></span>
             
        </div> 
        

    <!--script for onClickNav() for the navigation menu-->
    <script src="../../js/onClickNav.js"></script>
    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
            });
        }
    </script>

    <script>
        var check = function() {
            if (document.getElementById('pword1').value == document.getElementById('pword2').value){
                    document.getElementById('message').style.color = 'green';
                    document.getElementById('message').innerHTML = 'Passwords are matching';
            } 
            else{
                document.getElementById('message').style.color = 'red';
                document.getElementById('message').innerHTML = 'Passwords does not match';
            }
        }
    </script>
    
    </body>
</html>