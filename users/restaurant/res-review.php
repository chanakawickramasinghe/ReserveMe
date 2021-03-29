<?php include('../../includes/connection.php') ?>
<?php include('../../includes/session.php') ?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Home</title>  
    <link href="../../images/logo.png" rel="shortcut icon"/> 
    <!-- Link the style sheets -->
    <link rel="stylesheet" href="../../CSS/pre-order.css">
    <link rel="stylesheet" href="../../CSS/main.css">
    <link rel="stylesheet" href="../../CSS/nav.css">   
    <link rel="stylesheet" href="../../CSS/footer.css">
    <link rel="stylesheet" href="../../CSS/restaurant.css">
    <link href="../../CSS/reviews.css" rel="stylesheet" type="text/css">
	<link href="../../CSS/review.css" rel="stylesheet" type="text/css">

    <script crossorigin="anonymous" src="https://kit.fontawesome.com/70a642cd7c.js"></script>
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
      <a href="hall-details.php">Reception Hall</a>
    </div>
    <!-- End of side bar -->

    <div class="content">   
        <center><h1 class="h1-for-test" style="color:#ffbb01;"><font color="black">Customer</font> Ratings</h1></center>   
        <div class="content home">
		<div class="reviews"></div>
            
			<script>
				function getUrlVars() {
					var vars = {};
					var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
						vars[key] = value;
					});
					return vars;
				}

				var reviews_res_id = 4;
				fetch("../customer/res_view/review/reviews.php?res_id=" + reviews_res_id).then(response => response.text()).then(data => {
					document.querySelector(".reviews").innerHTML = data;
					document.querySelector(".reviews .write_review_btn").onclick = event => {
						event.preventDefault();
						document.querySelector(".reviews .write_review").style.display = 'block';
						document.querySelector(".reviews .write_review input[name='customer_name']").focus();
					};
				document.querySelector(".reviews .write_review form").onsubmit = event => {
					event.preventDefault();
					fetch("reviews.php?res_id=" + reviews_res_id, {
						method: 'POST',
						body: new FormData(document.querySelector(".reviews .write_review form"))
					}).then(response => response.text()).then(data => {
					document.querySelector(".reviews .write_review").innerHTML = data;
				});
				};
				});
			</script>
		</div>

    </div>  
</body>

</html>
