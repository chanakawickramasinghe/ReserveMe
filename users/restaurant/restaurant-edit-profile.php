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

                </br>
                <tr>
                <th>Res ID</th><td>".$row['res_id']."</td>
                </tr>
                <tr>                  
                <th>Name</th><td>".$row['res_name']."</td>
                </tr>
                <tr>
                <th>Email</th><td>".$row['res_email']."</td>
                </tr>
                <tr>
                <th>ContactNo</th><td>".$row['res_tel']."</td>
                </tr>
                <tr>
                <th>Address Line 01</th><td>".$row['res_add_line1']."</td>
                </tr>
                <tr>
                <th>Address Line 02</th><td>".$row['res_add_line2']."</td>
                </tr>
                <tr>
                <th>City</th><td>".$row['res_add_line3']."</td>
                </tr>
                <tr>
                <th>Location</th><td>".$row['res_location']."</td>
                </tr>
                <tr>
                <th>Floor Plan</th><td>".$row['res_floor']."</td>
                </tr>
                <tr>
                <th>Menu</th><td>".$row['res_menu']."</td>
                </tr>
                <tr>
                <th>Preorder Availability</th><td>".$row['preorder_available']."</td>
                </tr>;
            } 

        //    $sql = "SELECT * FROM restaurant_category WHERE res_id='$res_id'";
        //    $userquery = mysqli_query($connection,$sql);
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
                    <button type="button" name="edit" class="btn" onclick="window.location.href='restaurant-profile-edit.php'">Edit Details</button>
                    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                    <button type="button" name="deactivate" class="btn" >Deactivate Account</button>
                </div>
            </form>
        </div>
    </body>
</html> 