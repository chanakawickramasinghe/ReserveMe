<?php include('../../includes/session.php') ?>
<?php include('../../includes/connection.php') ?>

<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ReserveMe - Res Add Promotion</title>
	    <link rel="stylesheet" href="../../CSS/nav.css">
        <link href="../../images/logo.png" rel="shortcut icon"/>
        <link rel="stylesheet" href="../../CSS/res-promo.css"/>
        <script src="../../js/manage-user-search.js"></script>
    </head>

    <body class="login-body">

      <!-- nav bar -->
  <?php include('navigation.php'); ?>
   
   <!-- Start of side bar -->
   <div class="sidebar"> 
     <a href="restaurant-home.php">Home</a> 
     <a href="add-preordermenu.php" >Pre - Order Menu</a>    
     <a href="add-menu.php">Update the Menu</a>
     <a href="res-promo.php" class="active">Promotions</a>
     <a href="res-floor-plan.php">Floor Plan</a> 
     <a href="res-reservation.php">Reservations</a>
     <a href="res-review.html">View Reviews</a>   
     <br>
     <hr>
     <a href="mng-emp.php">Manage Employee</a>
     <a href="hall-details.php">Reception Hall</a>
   </div>
   <!-- End of side bar -->

    <br>
    <div class="content">
            <div class="promo-btn-bar">
                <button type="button" class="btn-promo active" onclick="window.location.href='#'">Add Promotion</button>
                <button type="button" class="btn-promo" onclick="window.location.href='res-promo.php'">Ongoing Promotion</button>
                <button type="button" class="btn-promo" onclick="window.location.href='res-past-promo.php'">View Past Promotions</button>
            </div>

            <center><h1 style="color:#ffbb01;"><font color="black">Add</font> Promotions</h1><center>

	<br>
    	<div class="login-box"> 
        
        <br>
        <div class="centered-view">
        <form class="add-promo-form" method="post" action="res-promo.php" enctype="multipart/form-data"> <!--SHOULD BE action="res-add-promotion-submit.php"-->
            <table class="add-promo-form">
                <tr>
                    <th>Starting Date</th>
                    <td><input class="input-feild" type="date" name="start_date"></td>
                </tr>
                <tr>
                    <th>End Date</th>
                    <td><input class="input-feild" type="date" name="end_date"></td>
                </tr>
                <tr>
                    <th>Category (Paid*/Unpaid*)</th>
                    <td><input class="input-feild"  type="text" name="Category"></td>
                </tr>
                <tr>
                    <th>Add Image</th>
                    <td><input class="input-file"  type="file" name="promo_image"></td>
                </tr>
                <tr>
                    <td><input class="btn-res" type="submit" value="Add Promo" name="res-add-promo-submit"></td>
                    <td><input class="btn-res" type="button" value="Back" onclick="window.location.href='res-promo.php'"></td>
                </tr>

            </table>
            <br><br>
        </form>
        </div>
        </div>

        </div>
    
    </body>
</html>
