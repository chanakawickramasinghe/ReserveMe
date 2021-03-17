<?php include('../../includes/session.php') ?>
<?php include('../../includes/connection.php') ?>

<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ReserveMe - Admin</title>
	    <link rel="stylesheet" href="../../CSS/nav.css">
        <link href="../../images/logo.png" rel="shortcut icon"/>
        <link rel="stylesheet" href="../../CSS/pre-order.css"/>
        <link href="../../css/footer.css" rel="stylesheet" type="text/css"/>
        <script src="../../js/manage-user-search.js"></script>
</head>


<body class="login-body">
  <!-- nav bar -->
  <?php include('navigation.php'); ?>
   
    <!-- Start of side bar -->
    <div class="sidebar"> 
      <a href="restaurant-home.php">Home</a> 
      <a href="add-preordermenu.php" class="active">Pre - Order Menu</a>    
      <a href="add-menu.php">Update the Menu</a>
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

            <form name="formRestSignup" action="add-preordermenu.php" method="post" enctype="multipart/form-data">
                <h1 class="error-msg" style="font-size:14px"><?php include_once('../../includes/message.php'); ?></h1>
                <center>
                <h1 style="color:#ffbb01;"><font color="black">Pre-Order</font> Menu</h1>
             
                <h3 align="center">Details regarding the Menu available to place Pre-Orders</h3>
                <br>
                <p><h3>Item Name<h3></p>
                <input type="text" class="type-feild"   name="item_name" placeholder="Item Name" required>
                <p><h3>Item Price<h3></p>
                <input type="text"  class="type-feild" name="item_price" placeholder="Price in LKR" required>
                <br><br><br>
                </center>
                <input type="submit" name="submit" style="margin-left:500px; margin-top:-30px" class="btn-promo" value="Submit" required>   
            </form>
            <br><br>
            </div>
            <div class="tab" >
            <center>
            <table class="promo" id="myTable" border="1">
                <tr>
                    <th>Menu ID</th>
                    <th>Dish Name</th>
                    <th>Dish Price (LKR)</th>
                    <th>Edit</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Cream of Vegetable Soup</td>
                    <td>180</td>
                    <td><button type="button" class="btn-promo-remove">X</button></td>                   
                </tr>
                <tr>
                    <td>2</td>
                    <td>Fried Rice</td>
                    <td>250</td>  
                    <td><button type="button" class="btn-promo-remove">X</button></td>           
                </tr>
                <tr>
                    <td>3</td>
                    <td>Caramel Pudding</td>
                    <td>150</td>   
                    <td><button type="button" class="btn-promo-remove">X</button></td>                
                </tr>
                </table>
            </div>
            </center>
    <div>
</body>

</html>
