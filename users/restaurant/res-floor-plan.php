<?php include 'add-menu-submit.php'; ?>

<!DOCTYPE html>
<html lang = "en" dir = "ltr">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Floor Plan</title>
    <link rel="stylesheet" href="../../CSS/main.css">
    <script src="https://kit.fontawesome.com/20026fc328.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../../CSS/nav.css">
    <link rel="stylesheet" href="../../CSS/search.css">
    <link rel="stylesheet" href="../../CSS/pre-order.css">
    <!--web-icon-->
    <link href="../../images/logo.png" rel="shortcut icon"/>
</head>

<body>

      <!-- nav bar -->
  <?php include('navigation.php'); ?>

     <!-- Start of side bar -->
     <div class="sidebar"> 
      <a href="restaurant-home.php">Home</a>     
      <a href="add-menu.php">Update Menu</a>
      <a href="res-promo.php">Promotions</a>
      <a href="res-floor-plan.php" class="active">Floor Plan</a> 
      <a href="res-reservation.php">Table Reservations</a>
      <a href="hall-reservation.php">Hall Reservations</a>
      <a href="res-review.php">View Reviews</a>    
      <hr>
      <a href="mng-emp.php">Manage Employee</a>
      <a href="chat.php">Chat</a>
      <a href="hall-details.php">Reception Hall</a>
    </div>
   <!-- End of side bar -->

  <!--Start of getting photos-->
    <div class="content">
        <form action="add-menu-submit.php" method="post" enctype="multipart/form-data">
            <h2 class="error-msg" style="font-size:14px"><?php include_once('../../includes/message.php'); ?></h2>
                <br><br>
                <center>
                <h1 style="color:#ffbb01;"><font color="black">Add</font> Floor Plan</h1>
                <br>
                <p><h3>Insert images of your Restaurant Floor seperately.</h3></p>
                <br><br>
                <input class="input-file"  type="file" name="floor-plan">
                <div>
                <br><br>
                <input type="submit" name="submit" style="margin-left:10px; margin-top:-30px" class="btn-promo" value="Enter" required>   
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
                    <td><img class="img-promo" src="../../images/restaurant/P1.jpg" width="115px" height="215px">
                    <br><button type="button" class="btn-promo-remove">Remove</button>
                    </td>
                    <td><img class="img-promo" src="" >
                    <!-- <br><button type="button" class="btn-promo-remove">Remove</button> -->
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
