<?php include('../../includes/connection.php') ?>
<?php include('../../includes/session.php') ?>

<html>
    <head>
        <title>Employee Profile</title>
        <link href="../../images/logo.png" rel="shortcut icon"/> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script crossorigin="anonymous" src="https://kit.fontawesome.com/70a642cd7c.js"></script>
        <!-- Link style Sheets -->
        <link rel="stylesheet" href="../../CSS/nav.css">
        <link rel="stylesheet" href="../../CSS/footer.css">
        <link rel="stylesheet" href="../../CSS/employee.css">

        
    </head>
    <body class="subbody">        
                
        <!-- Adding the table with current user details -->
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
                <h3> About you.....</h3><br>
                Name: ".$row['emp_name']." <br>
                Email: ".$row['emp_email']." <br>
                Contact No: ".$row['emp_mobile']." <br>
                ";
    
       
        ?>
        
        <img src="../../images/deco/restaurant-staff.jpg" alt="feedback" class="revimage"><hr style="width:80%">
        </br>
        
    </body>
</html> 