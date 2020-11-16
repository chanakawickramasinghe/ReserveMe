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
            <a class="navtab" href="../../index.php">Logout</a>
            <a class="navtab" href="admin-home.php">Home</a>
            <a class="navtab" href="promotions.php">Promotions</a>
        </div>
        <!--End of nav-->

        <h1>Past Promotions</h1>

        <div class="search-user-container">
            <!-- <form name="form-display-selected"> -->
                <!--heading-->
		        <h3>Search From Restaurant Name or ID</h3>
		        <!--Input-------->
		        <div class="search-input">
                    <input type="text" id="myInput" onkeyup="myFunctionPastPromos()" 
                    placeholder="Enter Restaurant Name or ID"/>
                </div>
            
        </div>


        <table class="promo" id="myTable" border="1">
                <tr>
                    <th>Promo Image</th>
                    <th>User ID</th>
                    <th>Company Name</th>
                    <th>Posted Date & Time</th>
                    <th>Ended Date & Time</th>
                </tr>
                <tr>
                    <td><img class="img-promo" src="../../images/promos/1.jpg"></td>
                    <td>3</td>
                    <td>Pizza Hut Colombo</td>
                    <td>2020-10-15 22:03:02</td>
                    <td>2020-10-18 22:03:02</td>           
                </tr>
                <tr>
                    <td><img class="img-promo" src="../../images/promos/2.jpg"></td>
                    <td>5</td>
                    <td>Burger King Gampaha</td>
                    <td>2020-10-20 09:00:00</td>
                    <td>2020-10-22 09:00:00</td>              
                </tr>
                <tr>
                    <td><img class="img-promo" src="../../images/promos/3.jpg"></td>
                    <td>11</td>
                    <td>KFC Colombo</td>
                    <td>2020-11-01 00:00:00</td>
                    <td>2020-11-08 00:00:00</td>             
                </tr>
        </table>
    
    </body>
</html>