<?php include('admin-session.php') ?>
<?php include('../../config/connection.php') ?>

<?php
    $cus_id = "";
     
?>

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
            <form name="form-display-selected">
                <!--heading-->
                <br/><br/><br/>
		        <h3>Search From Name , Email or ID</h3>
		        <!--Input-------->
		        <div class="search-input">
                    <input type="text" id="myInput" onkeyup="myFunctionCustomer()" 
                    placeholder="Enter Name , Email or ID"/>
                </div>
                <br/>

                <h3>Details of Selected Customer</h3>
                
                <div class="update-box">
                    <form method="POST" action="admin-view-customer-activity.php">
                    <table>
                        <tr>
                            <th>Customer ID :</th>
                            <td><input class="input-s" type="text" placeholder="ID" id="cus_id" name="user_id" readonly="true" required></td>
                            <th>Customer Email :</th>
                            <td><input class="input-l" type="text" placeholder="Customer Email" id="email" name="cus_email" readonly="true" required></td>
                            <th>Contact No. :</th>
                            <td><input class="input-m" type="text" placeholder="Contact" id="contact_number" readonly="true" name="contact_no" required></td>

                        </tr>
                        <tr>
                            <th>Customer Name :</th>
                            <td><input width="50px" class="input-l" type="text" placeholder="Customer Name" id="cus_name" name="cus_name" readonly="true" required></td>
                            <th>Date of Birth :</th>
                            <td><input class="input-m" type="text" placeholder="yyyy-mm-dd" id="dob" readonly="true" name="cus_dob" required></td>
                            <th>Active Status :</th>
                            <td><input class="input-s" type="text" id="active_status" placeholder="Status" readonly="true" name="cus_status" required></td>
                        </tr>
                        <tr>
                            <th colspan="5"></th>
                            <td><button class="btn-change-s" type="reset">Clear</button></td>
                        </tr>
                    </table>
                    </form>
                    <p class="button-box">
                    <div class="form-15">
                        <form method="POST" name="view" action="admin-view-customer-activity.php">
                            <br/>
                            <input type="hidden" placeholder="ID" id="test_cus_id" name="user_id" required>
                            <input type="submit" class="btn-change-m" name="send" value="View Activity">
                        </form>
                    </div>
                    <div class="form-15">
                        <form method="POST" action="admin-send-email.php">
                            <br/>
                            <input type="hidden" placeholder="ID" id="test_cus_id2" name="user_id" readonly="true" required>
                            <input type="submit" class="btn-change-m" name="send-email" value="Send Email">
                        </form>
                    </div>
                    <div class="form-40">
                        <form method="POST" action="admin-cus-operations.php">
                            <br>
                            <input type="hidden" placeholder="ID" id="test_cus_id3" name="user_id" readonly="true" required>
                            <input type="submit" class="btn-red" value="Activate Account" onClick='return confirmSubmit()' name="btn-activate-cus-account">
                            <input type="submit" class="btn-red" value="Suspend Account" onClick='return confirmSubmit()' name="btn-suspend-cus-account">
                            <h4><font color="red"><?php include_once('../../public/includes/message.php'); ?></font></h4>
                        </form>
                    
                    </div> 
                         
                    </p>      

                </div>
                
            </form>
        </div>
        <br/>


        
        <div>
        
        <!-- Adding the table with customer details -->
        <table class="user" id="myTable" border="1">
            <tr>
                <th>Customer ID</th>
                <th>Customer Name</th>
                <th>Customer Email</th>
                <th>Contact No.</th>
                <th>DoB</th>
                <th>Status</th>
            </tr>
        
        <?php
        
        $customers_sql = "SELECT * FROM customer";
        
        $userquery = mysqli_query($connection,$customers_sql);
        while($row = mysqli_fetch_assoc($userquery)){
        
            echo "
                <tr>                  
                    <td>".$row['user_id']."</td>
                    <td>".$row['user_name']."</td>
                    <td>".$row['email']."</td>
                    <td>".$row['contact_no']."</td>
                    <td>".$row['dob']."</td>
                    <td>".$row['active_status']."</td>
                </tr>";
                
        } 
        echo "</table>";
        ?>
        
        
        </div>

<script>
    var table = document.getElementById('myTable');
                
        for(var i = 1; i < table.rows.length; i++)
        {
            table.rows[i].onclick = function()
            {
                document.getElementById("cus_name").value = this.cells[1].innerHTML;
                document.getElementById("cus_id").value = this.cells[0].innerHTML;
                document.getElementById("email").value = this.cells[2].innerHTML;
                document.getElementById("dob").value = this.cells[4].innerHTML;
                document.getElementById("contact_number").value = this.cells[3].innerHTML;
                document.getElementById("active_status").value = this.cells[5].innerHTML;

                document.getElementById("test_cus_id").value = this.cells[0].innerHTML;
                document.getElementById("test_cus_id2").value = this.cells[0].innerHTML;
                document.getElementById("test_cus_id3").value = this.cells[0].innerHTML;
            };
        }

</script>

<!-- CONFIRM Box -->
<script LANGUAGE="JavaScript">
function confirmSubmit()
{
var agree=confirm("Are you sure you wish to continue?");
    if (agree)
        return true ;
    else
        return false ;
    }
</script>



<!--script for onClickNav() for the navigation menu-->
<script src="../../public/js/onClickNav.js"></script>

</body>
</html>
