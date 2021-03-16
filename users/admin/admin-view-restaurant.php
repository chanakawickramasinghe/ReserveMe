<?php include('../../includes/session.php') ?>
<?php include('../../includes/connection.php') ?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ReserveMe - Admin</title>
	    <link rel="stylesheet" href="../../CSS/admin-nav.css">
        <link href="../../images/logo.png" rel="shortcut icon"/>
        <link rel="stylesheet" href="../../CSS/admin-dashboard.css"/>
        <script src="../../js/manage-user-search.js"></script>
    </head>
    <body>

        <!--Start of nav-->
        <div class="topnav" id="myTopnav">
        <a href="../../index.php"><img class = "logo" src="../../images/logo.png"></a>
        <a class="navtab" href="../../index.php">Logout</a>
            <a class="navtab" href="admin-home.php">Home</a>
            <a class="navtab" href="manage-users.php">Manage Users</a>
            <a class="navtab" href="javascript:void(0);" id="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a>
        </div>
        <!--End of nav-->

        <div class="search-user-container">
            <form name="form-display-selected">
                <br/><br/><br/>

                <h3>Details of the Restaurant</h3>
                
                <div class="update-box">
                    
                    <table>
                        <tr>
                            <th>Restaurant ID :</th>
                            <td><input class="input-s" type="text" placeholder="ID" id="res_id" name="id" readonly="true" required></td>
                            <th>Restaurant Email :</th>
                            <td><input class="input-l" type="text" placeholder="Restaurant Email" id="email" readonly="true" required></td>
                            <th>Contact No. :</th>
                            <td><input class="input-m" type="text" placeholder="Contact" id="contact_number" readonly="true" required></td>

                        </tr>
                        <tr>
                            <th>Restaurant Name :</th>
                            <td><input width="50px" class="input-l" type="text" placeholder="Restaurant Name" id="res_name" readonly="true" required></td>
                            <th>Location Link:</th>
                            <td><input class="input-l" type="text" placeholder="Location" id="location" readonly="true" required></td>
                            <th>Rating :</th>
                            <td><input class="input-s" type="text" id="ratings" placeholder="Rating" readonly="true" required></td>

                        </tr>
                        <tr>
                            <th>Address Line 1 :</th>
                            <td><input class="input-l" type="text" placeholder="Address Line 1" id="a1" readonly="true" required></td>
                            <th>Address Line 2</Address> :</th>
                            <td><input class="input-l" type="text" placeholder="Address Line 2" id="a2" readonly="true" required></td>
                            <th>City :</th>
                            <td><input class="input-m" type="text" placeholder="City" id="city" readonly="true" required></td>

                        </tr>
                        <tr>
                            <th>Active Status :</th>
                            <td><input class="input-s" type="text" id="active_status" placeholder="Status" readonly="true" required></td>
                            <!-- <td></td> -->
                            
                        </tr>
                    </table>

                
                    <p class="button-box">
                    <button class="btn-blue-l" type="button" name="btn-view-reservations" onclick="viewActivityRes()">View Reservations</button>
                    <button class="btn-red" type="button" name="btn-activate-account" onclick="activateFunRes()">Activate Account</button>
                    <button class="btn-red" type="button" name="btn-suspend-account" onclick="suspendFunctionRes()">Suspend Account</button>
                    <button class="btn-blue" type="reset">Clear</button>
                    </p>

                </div>
                
            </form>
        </div>
        <br/>
                  
       <!--script for onClickNav() for the navigation menu-->
    <script src="../../js/onClickNav.js"></script>


    </body>
</html>
