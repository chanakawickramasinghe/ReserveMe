<?php include('res-session.php'); ?>
<?php include('../../config/connection.php'); 
include('../../public/includes/message.php');?>

<html>
    <head>
        <title>Restaurant Home</title>
        <link rel="stylesheet" href="../../public/CSS/style.css">
        <link rel="stylesheet" href="../../public/CSS/nav.css">
        <link rel="stylesheet" href="../../public/CSS/main.css">
        <link rel="stylesheet" href="../../public/CSS/restaurant.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <!--web-icon-->
        <link href="../../public/images/logo.png" rel="shortcut icon"/>
    </head>
    <body>
       <!-- nav bar -->
  <?php include('navigation.php'); ?>
   
   <!-- Start of side bar -->
   <div class="sidebar"> 
     <a href="restaurant-home.php" class="active">Home</a>     
     <a href="add-menu.php">Update Menu</a>
     <a href="res-promo.php">Promotions</a>
     <a href="res-floor-plan.php">Floor Plan</a> 
     <a href="res-reservation.php">Table Reservations</a>
     <a href="hall-reservation.php">Hall Reservations</a>
     <a href="res-review.php">View Reviews</a>   
     <hr>
     <a href="mng-emp.php">Manage Employee</a>
     <a href="chat.php">Chat</a>
     <a href="hall-details.php">Reception Hall</a>
   </div>
   <!-- End of side bar -->
   <div class="content">
    <div style="margin:20px">      
       
        <center><h3><?php include_once('../../public/includes/message.php'); ?></h3></center>
        <center><h1><span style="color:black">Edit </span><span style="color:orange">Details</span></h1></center>
        
        <?php

        $sql =  "SELECT * FROM restaurant";
        $sql_query = mysqli_query($connection, $sql);
        $row = mysqli_fetch_assoc($sql_query);

        echo "
        <form method=\"POST\" action=\"restaurant-edit-profile-submit.php\" enctype=\"multipart/form-data\">
            <BR/>
            <table class=\"res-edit-tbl\">
                <tr>
                    <th>Restaurant Name :</th>
                    <td><input class=\"type-feild-edit\" name=\"name\" type=\"text\" value=".$row['res_name']." required></td>
                </tr>
                <tr>
                    <th>Restaurant Email :</th>
                    <td><input class=\"type-feild-edit\" name=\"email\" type=\"email\" value=".$row['res_email']." required></td>
                </tr>
                <tr>
                    <th>Restaurant Address :</th>
                    <td><input class=\"type-feild-edit\" name=\"address\" type=\"text\" value=".$row['res_add_line1']." required></td>
                </tr>
                <tr>
                    <th>Located City :</th>
                    <td><input class=\"type-feild-edit\" name=\"city\" type=\"text\" value=".$row['city']." required></td>
                </tr>
                <tr>
                    <th>Restaurant Location Url :</th>
                    <td><input class=\"type-feild-edit\" name=\"location\" type=\"url\" value=".$row['res_location']." required></td>
                </tr>
                <tr>
                    <th>Restaurant Contact :</th>
                    <td><input class=\"type-feild-edit\" name=\"tel\" type=\"tel\" value=".$row['res_tel']." required></td>
                </tr>
                <tr>
                    <th>Opening Time :</th>
                    <td><input class=\"type-feild-edit\" name=\"open\" type=\"time\" value=".$row['opening_hour']." required></td>
                </tr>
                <tr>
                    <th>Closing Time :</th>
                    <td><input class=\"type-feild-edit\" name=\"close\" type=\"time\" value=".$row['closing-hour']." required></td>
                </tr>
                <tr>
                    <th></th>
                    <td><br/><input class=\"btn-edit\" type=\"submit\" value=\"Save Changes\" name=\"edit-details\"></td>
                </tr>
            </table>
        ";
        ?>
        <br/><hr><br/>

        <center><h1><span style="color:black">Change </span><span style="color:orange">Password</span></h1></center>
        <br/>
        
            <table class="res-edit-tbl">
                <tr>
                    <th>Current Password : </th>
                    <td><input type="password" name="old-pword" class="type-feild-edit" placeholder="Enter Current Password"></td>
                </tr>
                <tr>
                    <th>New Password : </th>
                    <td><input type="password" id="new-pword" name="new-pword" class="type-feild-edit" placeholder="Enter New Password"></td>
                </tr>
                <tr>
                    <th>Confirm Password : </th>
                    <td><input type="password" id="confirm-pword" name="confirm-pword" class="type-feild-edit" onkeyup='check()' placeholder="Confirm New Password"></td>
                </tr>
                <tr>
                    <td colspan="2"><P align="center" id='message' ></P></td>
                </tr>
                <tr>
                    <th></th>
                    <td><br/><input class="btn-edit" type="submit" value="Change Password" name="change-pword"></td>
                </tr>
            </table>
        

        <br/><hr><br/>
        
        <center><h1><span style="color:black">Change </span><span style="color:orange">Image</span></h1></center>
        <br/>
        
            <table class="res-edit-tbl">
                <tr>
                    <th>Add New Image : </th>
                    <td><input type="file" name="image" class="type-feild-edit" placeholder="Add New Image"></td>
                </tr>
                <tr>
                    <th></th>
                    <td><br/><input class="btn-edit" type="submit" value="Change Image" name="change-img"></td>
                </tr>
            </table>
        </form>
        <br/>

        <!--script for onClickNav() for the navigation menu-->
        <script src="../../public/js/onClickNav.js"></script>
    </body>

    <script>
        var check = function() {
            if (document.getElementById('new-pword').value == document.getElementById('confirm-pword').value){
                    document.getElementById('message').style.color = 'green';
                    document.getElementById('message').innerHTML = 'Passwords are matching';
            } 
            else{
                document.getElementById('message').style.color = 'red';
                document.getElementById('message').innerHTML = 'Passwords does not match';
            }
        }
    </script>
</html> 