<?php include('../../includes/connection.php') ?>
<?php include('../../includes/session.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link the style sheet -->
    <title>Pre-Order Menu</title>

</head>
<body>

<?php
        checkSession();
        
        $userID = $_SESSION["emp_id"]; //have to add session id
        $sql = "SELECT * FROM employee WHERE emp_id='$userID'";

        $resID= $_SESSION["res_id"]; //Get the Restaurent Name
        $sql2 = "SELECT * FROM restaurant WHERE res_id='$resID'";

        $resquery = mysqli_query($connection,$sql2);
        $row2 = mysqli_fetch_assoc($resquery);
        
        $userquery = mysqli_query($connection,$sql);
        $row = mysqli_fetch_assoc($userquery);
        echo"<h1 class=div-c>Welcome ".$row['emp_name']." , Employee of ".$row2['res_name']."</h1>";

            echo "
            <table class=\"user\">
                </br>
                <tr>                  
                <th>Name</th><td>".$row['emp_name']."</td>
                </tr>
                <tr>
                <th>Email</th><td>".$row['emp_email']."</td>
                </tr>
                <tr>
                <th>Contact No</th><td>".$row['emp_mobile']."</td>
                </tr>
                </table>";
    
       
        ?>
        </br>
    
</body>
</html>