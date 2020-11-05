<?php include('../../includes/connection.php') ?>
<?php include('../../includes/session.php') ?>

<html>
    <head>
        <title>Employee Profile</title>
        <link rel="stylesheet" href="../../CSS/style.css">
        <link rel="stylesheet" href="../../CSS/nav.css">
        <link rel="stylesheet" href="../../CSS/main.css">
        <link rel="stylesheet" href="../../CSS/footer.css">
        <link href="../../images/logo.png" rel="shortcut icon"/> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script crossorigin="anonymous" src="https://kit.fontawesome.com/70a642cd7c.js"></script>

    </head>
    <body>        
                
        <!-- Adding the table with current user details -->
        <?php
        checkSession();
        // echo " ";
        
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
            <table style=\"background:#3d61c5c7\" border=1 class=\"user\">
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
        <!-- edit details button -->
        <!-- <div class="btn-header">
            <form>
                <div class="form-box">
                    <button name="edit" class="btn" type="button" onclick="window.location.href='customer-profile-edit.php'">Edit Details</button>
                    <button name="deactivate" class="btn" type="button" onclick="window.location.href='customer-confirm-deactivate.php'">Deactivate Account</button>
                </div>
            </form>
        </div> -->
       
    <!--script for onClickNav() for the navigation menu-->
    <script src="../../js/onClickNav.js"></script>
    </body>
</html> 