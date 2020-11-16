<?php include('../../includes/connection.php') ?>
<?php include('../../includes/session.php') ?> 

<html>
    <head>
        <title>Restaurant Home</title>
        <link rel="stylesheet" href="../../CSS/style.css">
        <link rel="stylesheet" href="../../CSS/nav.css">
        <link rel="stylesheet" href="../../CSS/main.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <!--web-icon-->
        <link href="../../images/logo.png" rel="shortcut icon"/>
    </head>
    <body>
        <!--Start of nav-->
        <div class="topnav" id="myTopnav">
            <a href="../../index.php"><img class = "logo" src="../../images/logo.png"></a>
            <a class="navtab" href="../../index.php">Logout</a>
		    <a class="navtab" href="restaurant-profile.php">My Profile</a>
		    <a class="navtab" href="../../includes/contact.php">Contact</a>
		    <a class="navtab" href="../../includes/about.php">About</a>
		    <a class="navtab" href="javascript:void(0);" id="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a>    
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
                <th>Postal Number</th><td>".$row['pnumber']."</td>
                </tr>
                <tr>
                <th>Street</th><td>".$row['street']."</td>
                </tr>
                <tr>
                <th>City</th><td>".$row['city']."</td>
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

        <!--script for onClickNav() for the navigation menu-->
        <script src="../../js/onClickNav.js"></script>
    </body>
</html> 