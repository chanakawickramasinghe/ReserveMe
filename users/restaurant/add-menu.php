<?php include 'add-menu-submit.php'; ?>
<?php include('../../includes/connection.php') ?>
<?php include('../../includes/session.php') ?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Menue</title>  
    <link href="../../images/logo.png" rel="shortcut icon"/> 
    <!-- Link the style sheets -->
    <link rel="stylesheet" href="../../CSS/pre-order.css">
    <link rel="stylesheet" href="../../CSS/main.css">
    <link rel="stylesheet" href="../../CSS/nav.css">   
    <link rel="stylesheet" href="../../CSS/footer.css">

</head>

<body>
  <!-- nav bar -->
  <?php include('navigation.php'); ?>
   
    <!-- Start of side bar -->
    <div class="sidebar"> 
      <a href="restaurant-home.php">Home</a> 
      <a href="add-preordermenu.php">Pre - Order Menu</a>    
      <a href="add-menu.php" class="active">Update the Menu</a>
      <a href="res-promo.php">Promotions</a>
      <a href="res-floor-plan.php">Floor Plan</a> 
      <a href="res-reservation.php">Reservations</a>
      <a href="../customer/res_view/review/index.html?res_id=4">View Reviews</a>   
      <a href="res-contactus.php">Help Desk</a>
      <br>
      <hr>
      <a href="mng-emp.php">Manage Employee</a>
      <a href="hall-details.php">Reception Hall</a>
    </div>
    <!-- End of side bar -->

    <div class="content">
    <div style="margin:20px">     

  <!--Start of getting photos-->
    <div id="content">
        <form action="add-menu-submit.php" method="post" enctype="multipart/form-data">
            <h2 class="error-msg" style="font-size:14px"><?php include_once('../../includes/message.php'); ?></h2>

                <center><h2 style="color:#ffbb01;"><font color="black">Add</font> Menu</h2>
                <br>
                <p><h3>Insert images of your Restaurant Menu seperately.</h3></p>
                <br>
                <!-- <h3>Rename Image</h3>
                <br>
                <input type="text" class="type-feild"   name="item_name" placeholder="RestaurantName_01" required>
                <br><br> -->
                <h3>Add Image</h3>
                <br>
                <input class="input-file"  type="file" name="promo_image">
                <div>
                <br><br>
                <input type="submit" name="submit" style="margin-left:400px; margin-top:-30px" class="btn-promo" value="Enter" required>   
                </div>  
               </center>
               <br><br>
               <table class="promo" id="myTable" border="1">
                <tr>
                    <th>Image 01</th>
                    <th>Image 02</th>
                    <th>Image 03</th>
                    <th>Image 04</th>
                    <th>Image 05</th>
                </tr>
                <tr>
                    <td><img class="img-promo" src="../../images/restaurant/P2.jpg" width="150px" height="250px">
                    <br><button type="button" class="btn-promo-remove">Remove</button>
                    </td>
                    <td><img class="img-promo" src="../../images/restaurant/P3.jpg" width="150px" height="250px">
                    <br><button type="button" class="btn-promo-remove">Remove</button>
                    </td>
                    <td><img class="img-promo" src="">
                    <!-- <br><button type="button" class="btn-promo-remove">Remove</button> -->
                    </td>  
                    <td><img class="img-promo" src="">
                    <!-- <br><button type="button" class="btn-promo-remove">Remove</button> -->
                    </td> 
                    <td><img class="img-promo" src="">
                    <!-- <br><button type="button" class="btn-promo-remove">Remove</button> -->
                    </td>            
                </tr>
            </table>  
        </form>
    </div>
    

</body>
</html>
