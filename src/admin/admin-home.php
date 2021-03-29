<?php include('../../public/includes/session.php') ?>
<?php include('../../config/connection.php') ?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ReserveMe - Admin</title>
        <link href="../../public/images/logo.png" rel="shortcut icon"/>
        <script src="https://kit.fontawesome.com/20026fc328.js" crossorigin="anonymous"></script>
	    <!--css style sheets-->
        <link rel="stylesheet" href="../../public/CSS/admin-nav.css">
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
        
        $admin_sql = "SELECT * FROM admins";
        
        $userquery = mysqli_query($connection,$admin_sql);
        while($row = mysqli_fetch_assoc($userquery)){

        $name = $row['admin_name'];
        $email = $row['admin_email'];
        $cNo = $row['contact_no'];

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

        <img class="img-admin" src="../../public/images/us/admin.png">
                
            </div>
            <div class = "admin-home">
                <!-- <button class="btn-change" type="button" onclick="window.location.href='admin-change-password.php'">Change Password</button> -->

                <button type="button" class="collapsible">Edit Details</button>
                <div class="content-collapse">
                    
                    <form method="POST" action="admin-edit-details-submit.php">
                        <h3>Change your details below</h3>
                        <h2 class="error-msg"><?php include_once('../../public/includes/message.php'); ?></h2>
                            <div class="form-change">
                                <table class="tbl-admin-home">
                                    <tr>
                                        <th>Admin Name : </th>
                                        <td><input type="text" name="name" placeholder="Admin Name" id="name" value="<?php echo $name; ?>" required></p></td>
                                    </tr>
                                    <tr>
                                        <th>Admin Email : </th>
                                        <td><input type="email" name="email" placeholder="Admin Email" id="email" value="<?php echo $email; ?>" required></td>
                                    </tr>
                                    <tr>
                                        <th>Contact No : </th>
                                        <td><input type="tel" name="contact" placeholder="Contact No." id="c_no" value="<?php echo $cNo; ?>" required></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><center><br><button type="submit" class="btn-change-m" name="edit_details">Save Details</button>
                                    </tr>
                                    <tr>
                                        <td colspan = "2"><br><hr></td>
                                    </tr>
                                </table>  
                            </div>
                    </form>  
                                    
                </div>
                
                <br/>
                <button type="button" class="collapsible">Change password</button>
                <div class="content-collapse">
                    
                    <form method="POST" action="admin-change-password-submit.php">
                        <h3>Are you sure want to change your password?</h3>
                        <h2 class="error-msg"><?php include_once('../../public/includes/message.php'); ?></h2>
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
                                        <td colspan="2"><center><br><button type="submit" class="btn-change-m" name="change-pword">Change Password</button>
                                        <button type="reset" class="btn-change-s">Clear</button></center></td>
                                    </tr>
                                </table>
                                
                            </div>
                    </form>                    
                </div>
            </div>

            <!-- removed footer -->
            <!-- <span><?php //include('../../public/includes/footer.php'); ?></span> -->
             
        </div> 
        

    <!--script for onClickNav() for the navigation menu-->
    <script src="../../public/js/onClickNav.js"></script>
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
    <!-- script to check passwords -->
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

<!-- script to get values from the table to input feilds -->
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
                
            };
        }

</script>
    
    </body>
</html>