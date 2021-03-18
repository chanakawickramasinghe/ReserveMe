<?php include('../../includes/session.php') ?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Restaurant-Promotions</title>
        <link rel="stylesheet" href="../../CSS/admin-nav.css">
        <link href="../../CSS/footer.css" rel="stylesheet" type="text/css">  
        <link href="../../images/logo.png" rel="shortcut icon"/>
        <link rel="stylesheet" href="../../CSS/res-promo.css"/>
    </head>
    <body>

  <!-- nav bar -->
  <?php include('navigation.php'); ?>
   
   <!-- Start of side bar -->
   <div class="sidebar"> 
     <a href="restaurant-home.php">Home</a> 
     <a href="add-preordermenu.php">Pre - Order Menu</a>    
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
                <button type="button" class="btn-promo" onclick="window.location.href='res-add-promotions.php'">Add Promotion</button>
                <button type="button" class="btn-promo active" onclick="window.location.href='#'">Ongoing Promotion</button>
                <button type="button" class="btn-promo" onclick="window.location.href='res-past-promo.php'">View Past Promotions</button>
            </div>

            <center><h1 style="color:#ffbb01;"><font color="black">Ongoing</font> Promotions</h1></center>

            <table class="promo" id="myTable" border="1">
                <tr>
                    <th>Promo Image</th>
                    <th>Posted Date & Time</th>
                    <th>End Date & Time</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td><img class="img-promo" src="../../images/promos/1.jpg"></td>
                    <td>2020-10-15 22:03:02</td>
                    <td>2020-10-22 22:03:02</td>
                    <td>Paid</td>
                    <td><button type="button" class="btn-promo-remove">Remove</button></td>                
                </tr>
                <tr>
                    <td><img class="img-promo" src="../../images/promos/4.jpg"></td>
                    <td>2020-10-20 09:00:00</td>
                    <td>2020-10-22 09:00:00</td>
                    <td>Unpaid</td>
                    <td><button type="button" class="btn-promo-remove">Remove</button></td>                
                </tr>  
            </table>
        </div>

    <!--script for onClickNav() for the navigation menu-->
    <script src="../../js/onClickNav.js"></script>

    </body>
</html>
