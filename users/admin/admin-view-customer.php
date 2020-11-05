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
            <a href="../../index.php">Logout</a>
            <a href="customer-profile.php">My Profile</a>
            <img class="logo" src="../../images/logo.png">
        </div>
        <!--End of nav-->

        <div class="search-user-container">
            <form>
                <!--heading-->
		        <h3>Search From Name , Email or ID</h3>
		        <!--Input-------->
		        <div class="search-input">
                    <input type="text" id="myInput" onkeyup="myFunctionCustomer()" 
                    placeholder="Enter Name , Email or ID"/>
                </div>
                <br/>

                <h3>Details of Selected Customer</h3>
                
                <div class="">
                    <p>Customer ID : <input type="text" placeholder="Customer Name" id="cus_name"></p>
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
                    <td><a href=\"mailto:".$row['email']."\">".$row['email']."</a></td>
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
                //  document.getElementById("lname").value = this.cells[1].innerHTML;
                //  document.getElementById("age").value = this.cells[2].innerHTML;
            };
        }

</script>
        
                  
       

    </body>
</html>