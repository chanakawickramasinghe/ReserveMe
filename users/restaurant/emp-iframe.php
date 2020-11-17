<?php include('../../includes/session.php') ?>
<?php include('../../includes/connection.php') ?>

<html>  
<head>
    <title>Hall Registration</title> 
    <link href="../../images/logo.png" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link the style sheets -->   > 
    <link href="../../CSS/add-hall.css" rel="stylesheet" type="text/css" > 
    <link href="../../CSS/res-manage.css" rel="stylesheet" type="text/css" >
    <script crossorigin="anonymous" src="https://kit.fontawesome.com/70a642cd7c.js"></script>
 
</head>
<body>
    <?php

        checkSession();
        $resId = $_SESSION["resID"];
        $hall_search = "SELECT * FROM employee WHERE res_id = '$resId'";

        $emp_query = mysqli_query($connection,$hall_search);
        $num_emp = mysqli_num_rows($emp_query);

        if ($num_emp == 0){
            echo "
            <h1>Manage Employee</h1>
            
            <h3>You have no employee Added. Please Add an Employee</h3>
            <div class=\"emp-add-form\">
            <form  method=\"post\" action=\"add-emp-submit.php\">
                <table class=\"tab-add-emp\">
                <tr>
                    <th>Employee Name</th>
                    <td><input type=\"text\" name=\"emp_name\" placeholder=\"Enter Name\"></td>
                </tr>
                <tr>
                    <th>Employee Email</th>
                    <td><input type=\"email\" name=\"emp_email\" placeholder=\"Enter Email\"></td>
                </tr>
                <tr>
                    <th>Contact No.</th>
                    <td><input type=\"text\" name=\"contact_no\" placeholder=\"Contact No.\" pattern='^\+?\d{0,13}'></td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td><input type=\"password\" name=\"password\" placeholder=\"Password\" pattern='^\+?\d{0,13}'></td>
                </tr>
        
                </table>
                <br>
                <button class=\"btn-emp-edit\" type=\"submit\" name=\"btn-add-emp\">Add Employee</button>
                <button class=\"btn-emp-edit\" type=\"reset\" name=\"btn-clear\">Clear</button>
            </form>
            </div>
            
  
            
            
            ";
        }
        else{
            echo "
            <h1>Manage Employee</h1>
            <h3>You have added an Employee and you can edit details</h3>";
            
            while($row = mysqli_fetch_assoc($emp_query)){

            echo"
            <table class=\"emp-table\" id=\"myTable\" border=\"1\">
            <tr>
                <th>Employee Name</th>
                <td>".$row['emp_name']."</td>
            </tr>
            <tr>
                <th>Employee Email</th>
                <td>".$row['emp_email']."</td>
            </tr>
            <tr>
                <th>Contact No.</th>
                <td>".$row['emp_mobile']."</td>
            </tr>
            </table>";
            
            echo"
            <center>
            <div class=\"btn-center\">
                <button class=\"btn-emp-edit\" type=\"button\">Edit Details</button>
            </div>
            </center>";
            
        }
    }

    ?>

    </body>
</html>