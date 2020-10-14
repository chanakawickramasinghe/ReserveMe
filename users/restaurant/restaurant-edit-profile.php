<?php include('../../includes/connection.php') ?>
<?php include('../../includes/session.php') ?> 

<html>
    <head>
        <title>Restaurant Home</title>
        <link rel="stylesheet" href="../../CSS/style.css">
        <link rel="stylesheet" href="../../CSS/nav.css">
        <link rel="stylesheet" href="../../CSS/main.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

    </head>
    <body>
        <!--Start of nav-->
        <div class="topnav" id="myTopnav">
            <a href="#logout">Logout</a>
            <a href="customer-profile.php">My Profile</a>
            <a href="#contact">Contact</a>
            <a href="#about">About</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
            <img class = "logo" src="../../images/test.jpg">
        </div>
        <!--End of nav-->
                
        <!-- Adding the table with current user details -->
        <?php
        echo "<table border=1 class=\"user\">";
    
        $res_id = "111"; 
        //have to add session id
        echo"<h1 class = div-c> ".$res_id."</h1>";
        $sql = "SELECT * FROM restaurant WHERE res_id='$res_id'";
        $userquery = mysqli_query($connection,$sql);
            while($row = mysqli_fetch_assoc($userquery)){

                echo "<tr>
                        <th> Res ID </th><td>".$row['res_id']." </td>
                    </tr>
                    <tr>                  
                        <th> Name </th><td>".$row['res_name']." </td>
                    </tr>
                    <tr>
                        <th> Email </th><td>".$row['res_add']." </td>
                    </tr>
                    <tr>
                        <th> Contact No </th><td>".$row['res_tel']."</td>
                    </tr>";
            } 

        //    $sql = "SELECT * FROM restaurant_category WHERE res_id='$res_id'";
        //     $userquery = mysqli_query($connection,$sql);
        //         while($row = mysqli_fetch_assoc($userquery)){
    
        //             //should include the db connecting row
        //             echo "<tr>
        //             <th> Restaurant Category </th><td>".$row['']." </td> 
        //             </tr>";
        //         }    
        
        echo "</table>";
        ?>
        </br>
        <!-- edit details button -->
        <div class="btn-header">
            <form>
                <div class="form-box">
                    <button name="edit" class="btn" type="button" onclick="window.location.href='restaurant-profile-edit.php'">Edit Details</button>
                    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                    <button name="deactivate" class="btn" type="button">Deactivate Account</button>
                </div>
            </form>
        </div>
    </body>
</html> 