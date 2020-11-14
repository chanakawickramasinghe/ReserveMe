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
            <a class="navtab" href="admin-home.php">Logout</a>
            <a class="navtab" href="admin-home.php">Home</a>
		</div>
        <!--End of nav-->

        <div class="search-user-container">
            <form name="form-display-selected">
                <!--heading-->
		        <h3>Search From Restaurant Name , Restaurant ID , Employee Name , Employee Email or ID</h3>
		        <!--Input-------->
		        <div class="search-input">
                    <input type="text" id="myInput" onkeyup="myFunctionEmployee()" 
                    placeholder="Enter Restaurant Name or ID , Employee Name ,  Email or ID"/>
                </div>
                <br/>
                
                <h3>Details of Selected Employee</h3>
                
                <div class="update-box">
                    
                    <table>
                        <tr>
                            <th>Employee ID :</th>
                            <td><input class="input-s" type="text" placeholder="ID" id="emp_id" name="id" readonly="true" required></td>
                            <th>Employee Email :</th>
                            <td><input class="input-l" type="text" placeholder="Employee Email" id="emp_email" readonly="true" required></td>
                            <th>Contact No. :</th>
                            <td><input class="input-m" type="text" placeholder="Contact" id="contact_number" readonly="true" required></td>

                        </tr>
                        <tr>
                            <th>Employee Name :</th>
                            <td><input class="input-l" type="text" placeholder="Employee Name" id="emp_name" readonly="true" required></td>
                            <th>Restaurant Name :</th>
                            <td><input class="input-l" type="text" placeholder="Restaurant Name" id="res_name" readonly="true" required></td>
                            <th>Restaurant ID :</th>
                            <td><input class="input-s" type="text" placeholder="ID" id="res_id" readonly="true" required></td>
                            
                        </tr>
                    </table>
      
                </div>
                
            </form>
        </div>
        <br/>
        
        
        <div>
        
        <!-- Adding the table with customer details -->
        
        <table class="user" id="myTable" border="1">
            <tr>
                <th>Employee ID</th>
                <th>Employee Name</th>
                <th>Employee Email</th>
                <th>Contact Number</th>
                <th>Restaurant ID</th>
                <th>Restaurant Name</th>
            </tr>
        
        <?php
        
        $employee_sql = "SELECT * FROM employee";
        
        $userquery = mysqli_query($connection,$employee_sql);
        while($row = mysqli_fetch_assoc($userquery)){
        
            $res_id = $row['res_id'];

            echo "
                <tr>                  
                    <td>".$row['emp_id']."</td>
                    <td>".$row['emp_name']."</td>
                    <td>".$row['emp_email']."</td>
                    <td>".$row['emp_mobile']."</td>
                    <td>".$row['res_id']."</td>";

                    $res_name_sql = "SELECT res_name FROM restaurant WHERE res_id = $res_id";

                    $userquery1 = mysqli_query($connection,$res_name_sql);
                    while($row = mysqli_fetch_assoc($userquery1)){

                        echo"
                        <td>".$row['res_name']."</td>
                        
                        </tr>";
                    }       
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
                document.getElementById("emp_id").value = this.cells[0].innerHTML;
                document.getElementById("emp_name").value = this.cells[1].innerHTML;
                document.getElementById("contact_number").value = this.cells[3].innerHTML;
                document.getElementById("res_id").value = this.cells[4].innerHTML;
                document.getElementById("res_name").value = this.cells[5].innerHTML;
                document.getElementById("emp_email").value = this.cells[2].innerHTML;
                                
            };
        }

</script>
        
                  
       

    </body>
</html>
