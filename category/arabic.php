<?php include('../includes/connection.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReserveMe</title>
    <link href="../images/logo.png" rel="shortcut icon"/>
    <!--fontawesome-------------------->
    <script src="https://kit.fontawesome.com/20026fc328.js" crossorigin="anonymous"></script>
    <!--stylesheet-------------------->
	<link rel="stylesheet" type="text/css" href="../CSS/nav.css">
    <link rel="stylesheet" href="../CSS/category.css">
    <link rel="stylesheet" href="../CSS/footer.css">   
    <link rel="stylesheet" href="../CSS/main.css">
</head>

<body>
    <!--Start of nav-->
    <div class="topnav" id="myTopnav">
        <img class = "logo" src="../images/logo.png">
        <a href="users/user-type.php">Register</a>
        <a href="includes/login.php">Login</a>
        <a href="#contact">Contact</a>
        <a href="#aboutus">About</a>
        <a href="javascript:void(0);" class="icon" onclick="onClickNav()">
            <i class="fa fa-bars"></i>
        </a>       
    </div>
    <!--End of nav-->
    
    

    <!--Start of Card Section-->

    <?php
$sql = "SELECT res_id FROM restaurant_category where Arabic=1";
mysqli_query($connection, $sql);
$result = mysqli_query($connection,$sql);

if($result){
//echo "Sucessfull";
}
else{
echo"failed";	
}




?>
<section class="product">
		<!--heading------------>
	<div class="p-heading">
		<h3>Arabic</h3>
	</div>
<?php
		while($row=mysqli_fetch_assoc($result)){
			?>
    
	<!--product-container----------------->
	<div class="product-container">
	<!--box-1------------>
	<div class="p-box">
	<img alt="1" src="images/<?php echo $row['res_id'] ?>.jpg" />
	<!--details--------->
	<p><?php echo $row['res_name'] ?></p>
	<!--price--->
	<p><?php echo $row['res_rate'] ?></p>
	<!--buy-btn-->
	<a class="buy-btn" href="#">Reserve</a>
    </div>
    <?php
	}
	?>
	</div>
	
	</section>
    <!--End of Card Section-->

    <!--Include footer.php-->
    <div><?php include "../includes/footer.php" ?></div>
    
    <!--script for onClickNav() for the navigation menu-->
    <script src="../js/onClickNav.js"></script>

    
</body>
</html>