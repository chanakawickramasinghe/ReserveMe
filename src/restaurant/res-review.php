<?php include('res-session.php'); ?>
<?php include('../../config/connection.php'); 
include('../../public/includes/message.php');?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Home</title>  
    <link href="../../public/images/logo.png" rel="shortcut icon"/> 
    <!-- Link the style sheets -->   
    <link href="../../public/CSS/reviews.css" rel="stylesheet" type="text/css">
	  <link href="../../public/CSS/review.css" rel="stylesheet" type="text/css">
        <!-- Link the style sheets -->
    <link rel="stylesheet" href="../../public/CSS/pre-order.css">
    <link rel="stylesheet" href="../../public/CSS/main.css">
    <link rel="stylesheet" href="../../public/CSS/nav.css">   
    <link rel="stylesheet" href="../../public/CSS/footer.css">
    <script crossorigin="anonymous" src="https://kit.fontawesome.com/70a642cd7c.js"></script>
</head>

<body>
  <!-- nav bar -->
  <?php include('navigation.php'); ?>
   
    <!-- Start of side bar -->
    <div class="sidebar"> 
      <a href="restaurant-home.php" >Home</a>     
      <a href="add-menu.php">Update Menu</a>
      <a href="res-promo.php">Promotions</a>
      <a href="res-reservation.php">Table Reservations</a>
      <a href="hall-reservation.php">Hall Reservations</a>
      <a href="" class="active">View Reviews</a>   
      <hr>
      <a href="mng-emp.php">Manage Employee</a>
      <a href="chat.php">Chat</a>
      <a href="hall-details.php">Reception Hall</a>
    </div>
    <!-- End of side bar -->

    <!--Start of iframe section-->
    <section>
	    <div >	
	      <iframe src="review/index.php" id="iframeBox" name="iframeBox" class="iframeBox" height="800px" width="80%" title="Iframe Example" frameborder="0" marginwidth="0" marginheight="0" style="margin-left:250px"><div></iframe>
	    </div>	
	  </section>
    <!--End of iframe section-->

</body>

</html>
