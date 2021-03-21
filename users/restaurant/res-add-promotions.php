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

    <br><br>
    <div class="content">
    <center><h1 style="color:#ffbb01;"><font color="black">Add</font> Promotions</h1><center>
    <br/>
            <div class="promo-btn-bar">
                <button type="button" class="btn-promos" onclick="window.location.href='res-promo.php'">Ongoing Promotion</button>
                <button type="button" class="btn-promos active" onclick="window.location.href='#'">Add Promotion</button>
                <button type="button" class="btn-promos" onclick="window.location.href='res-past-promo.php'">View Past Promotions</button>
            </div>

    <br/>       
	<br>
    	<div class="login-box"> 
        
        <br>
        <div class="centered-view">
        <form class="add-promo-form" method="post" action="res-add-promotion-submit.php" enctype="multipart/form-data">
            <table class="add-promo-form">
                <tr>
                    <th>Starting Date & Time</th>
                    <td><input class="input-feild" type="datetime-local" name="start_date" required></td>
                </tr>
                <tr>
                    <th>End Date & Time</th>
                    <td><input class="input-feild" type="datetime-local" name="end_date" required></td>
                </tr>
                <tr>
                    <th>Description (If any)</th>
                    <td><input class="input-feild"  type="text" name="desc"></td>
                </tr>
                <tr>
                    <th>Add Image</th>
                    <td><input class="input-file"  type="file" name="promo_image" required></td>
                </tr>
                <tr>
                    <td><input class="btn-res" type="submit" value="Add Promo" name="res-add-promo-submit"></td>
                    <td><input class="btn-res" type="reset" value="Clear"></td>
                </tr>

            </table>
        </form>
        </div>
        </div>

        </div>
    
    </body>
</html>
