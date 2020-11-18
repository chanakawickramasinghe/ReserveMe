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
            <a class="navtab" href="admin-home.php">Home</a>
            <a class="navtab" href="manage-users.php">Manage Users</a>
            <a class="navtab" href="javascript:void(0);" id="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a>
        </div>
        <!--End of nav-->

        <div class="search-user-container">
            <form name="form-display-selected">
                <!--heading-->
		        <h3>Search From Restaurant Name , Email , City or ID</h3>
		        <!--Input-------->
		        <div class="search-input">
                    <input type="text" id="myInput" onkeyup="myFunctionRestaurant()" 
                    placeholder="Enter Restaurant Name , Email , City or ID"/>
                </div>
                <br/>

                <h3>Details of Selected Restaurant</h3>
                
                <div class="update-box">
                    
                    <table>
                        <tr>
                            <th>Restaurant ID :</th>
                            <td><input class="input-s" type="text" placeholder="ID" id="res_id" name="id" readonly="true" required></td>
                            <th>Restaurant Email :</th>
                            <td><input class="input-l" type="text" placeholder="Restaurant Email" id="email" readonly="true" required></td>
                            <th>Contact No. :</th>
                            <td><input class="input-m" type="text" placeholder="Contact" id="contact_number" readonly="true" required></td>

                        </tr>
                        <tr>
                            <th>Restaurant Name :</th>
                            <td><input width="50px" class="input-l" type="text" placeholder="Restaurant Name" id="res_name" readonly="true" required></td>
                            <th>Location Link:</th>
                            <td><input class="input-l" type="text" placeholder="Location" id="location" readonly="true" required></td>
                            <th>Rating :</th>
                            <td><input class="input-s" type="text" id="ratings" placeholder="Rating" readonly="true" required></td>

                        </tr>
                        <tr>
                            <th>Address Line 1 :</th>
                            <td><input class="input-l" type="text" placeholder="Address Line 1" id="a1" readonly="true" required></td>
                            <th>Address Line 2</Address> :</th>
                            <td><input class="input-l" type="text" placeholder="Address Line 2" id="a2" readonly="true" required></td>
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
                    <button class="btn-red" type="button" name="btn-suspend-account" onclick="suspendFunctionRes()">Suspend Account</button>
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
                <th>Restaurant ID</th>
                <th>Restaurant Name</th>
                <th>Restaurant Email</th>
                <th>Contact No.</th>
                <!-- <th>Location Link</th> -->
                <th>Address Line 1</th>
                <th>Address Line 2</th>
                <th>City</th>
                <th>Ranking</th>
                <th>Status</th>
            </tr>
        
        <?php
        
        $restaurants_sql = "SELECT * FROM restaurant";
        
        $userquery = mysqli_query($connection,$restaurants_sql);
        while($row = mysqli_fetch_assoc($userquery)){
        
            echo "
                <tr>                  
                    <td>".$row['res_id']."</td>
                    <td>".$row['res_name']."</td>
                    <td>".$row['res_email']."</td>
                    <td>".$row['res_tel']."</td>
                    <td>".$row['res_add_line1']."</td>
                    <td>".$row['res_add_line2']."</td>
                    <td>".$row['city']."</td>
                    <td>".$row['res_rate']."</td>
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
                document.getElementById("res_name").value = this.cells[1].innerHTML;
                document.getElementById("res_id").value = this.cells[0].innerHTML;
                document.getElementById("email").value = this.cells[2].innerHTML;
                document.getElementById("location").value = this.cells[4].innerHTML;
                document.getElementById("contact_number").value = this.cells[3].innerHTML;
                document.getElementById("ratings").value = this.cells[8].innerHTML;
                document.getElementById("a1").value = this.cells[5].innerHTML;
                document.getElementById("a2").value = this.cells[6].innerHTML;
                document.getElementById("city").value = this.cells[7].innerHTML;
                document.getElementById("active_status").value = this.cells[9].innerHTML;
                
            };
        }

</script>
        
                  
       <!--script for onClickNav() for the navigation menu-->
    <script src="../../js/onClickNav.js"></script>


    </body>
</html>
