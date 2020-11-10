<?php include('../../includes/session.php') ?>
<?php include('../../includes/connection.php') ?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ReserveMe - Admin</title>
	    <link rel="stylesheet" href="../../CSS/nav.css">
        <link href="../../images/logo.png" rel="shortcut icon"/>
        <link rel="stylesheet" href="../../CSS/admin-dashboard.css"/>
        <script src="../../js/manage-user-search.js"></script>
    </head>
    <body>

        <!--Start of nav-->
        <div class="topnav" id="myTopnav">
        <a href="../../index.php"><img class = "logo" src="../../images/logo.png"></a>
            <a class="navtab" href="../../index.php">Logout</a>
            <a class="navtab" href="customer-profile.php">My Profile</a>
            <a class="navtab" href="admin-home.php">Home</a>
		    <!--<a href="javascript:void(0);" class="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a> -->     
        </div>
        <!--End of nav-->

        <div class="search-user-container">
            <form name="form-display-selected">
                <!--heading-->
		        <h3>Search From Name , Email or ID</h3>
		        <!--Input-------->
		        <div class="search-input">
                    <input type="text" id="myInput" onkeyup="myFunctionCustomer()" 
                    placeholder="Enter Name , Email or ID"/>
                </div>
                <br/>
                
                <h3>Details of Selected Customer</h3>
                
                <div class="update-box">
                    
                    <table>
                        <tr>
                            <th>Customer ID :</th>
                            <td><input class="input-s" type="text" placeholder="ID" id="cus_id" name="id" readonly="true" required></td>
                            <th>Customer Email :</th>
                            <td><input class="input-l" type="text" placeholder="Customer Email" id="email" readonly="true" required></td>
                            <th>Contact No. :</th>
                            <td><input class="input-m" type="text" placeholder="Contact" id="contact_number" readonly="true" required></td>

                        </tr>
                        <tr>
                            <th>Customer Name :</th>
                            <td><input width="50px" class="input-l" type="text" placeholder="Customer Name" id="cus_name" readonly="true" required></td>
                            <th>Date of Birth :</th>
                            <td><input class="input-m" type="text" placeholder="yyyy-mm-dd" id="dob" readonly="true" required></td>
                            <th>Rating :</th>
                            <td><input class="input-s" type="text" id="ratings" placeholder="Rating" readonly="true" required></td>

                        </tr>
                        <tr>
                            <th>Postbox No. :</th>
                            <td><input class="input-m" type="text" placeholder="Postbox" id="postal_number" readonly="true" required></td>
                            <th>Street Name :</th>
                            <td><input class="input-l" type="text" placeholder="Street" id="street" readonly="true" required></td>
                            <th>City :</th>
                            <td><input class="input-m" type="text" placeholder="City" id="city" readonly="true" required></td>

                        </tr>
                        <tr>
                            <th>Active Status :</th>
                            <td><input class="input-s" type="text" id="active_status" placeholder="Status" readonly="true" required></td>
                            <!-- <td></td> -->
                            
                        </tr>
                    </table>

                
                    <p class="button-box">
                    <!-- <button class="btn-red" type="button" name="btn-delete-account">Delete Account</button> -->
                    <button class="btn-red" type="button" name="btn-suspend-account" onclick="suspendFunction()">Suspend Account</button>
                    <button class="btn-blue" type="reset">Clear</button>
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
                <th>Postbox</th>
                <th>Street</th>
                <th>City</th>
                <th>Ranking</th>
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
                    <td>".$row['postal_number']."</td>
                    <td>".$row['street']."</td>
                    <td>".$row['city']."</td>
                    <td>".$row['rankings']."</td>
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
                document.getElementById("street").value = this.cells[6].innerHTML;
                document.getElementById("postal_number").value = this.cells[5].innerHTML;
                document.getElementById("city").value = this.cells[7].innerHTML;
                document.getElementById("active_status").value = this.cells[9].innerHTML;
                document.getElementById("ratings").value = this.cells[8].innerHTML;
            };
        }

</script>
        
                  
       

    </body>
</html>
