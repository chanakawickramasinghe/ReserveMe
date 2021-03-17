<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta content="IE-edge" http-equiv="X-UA-Compatible"/>
	<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
	<title>Reviews System</title>
		<link href="../../../../CSS/reviews.css" rel="stylesheet" type="text/css">
		<link href="../../../../CSS/review.css" rel="stylesheet" type="text/css">
	<!--web-icon------------------->
	<link href="images/logo.png" rel="shortcut icon"/>
	<!--stylesheet-------------------->
	<link href="CSS/main.css" rel="stylesheet" type="text/css"/>
	<link href="../../../../CSS/nav.css" rel="stylesheet" type="text/css"/>
	<link href="../../../../CSS/footer.css" rel="stylesheet" type="text/css"/>
	<!--FontAwesome-------->
	<script crossorigin="anonymous" src="https://kit.fontawesome.com/70a642cd7c.js"></script>
</head>
<body>

	<!--main-section--------------->
	<section class="main">
		<!--Start of nav-->
		<div class="topnav" id="myTopnav">
			<img class = "logo" src="images/logo.png">
			<a class="navtab" href="users/customer/customerReg.php">Register</a>
			<a class="navtab" href="includes/login.php">Login</a>
			<a class="navtab" href="includes/contact.php">Contact</a>
			<a class="navtab" href="includes/about.php">About</a>
			<a class="navtab" href="javascript:void(0);" id="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a>
		</div>
		<!--End of nav-->
	</section>

	
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
var reviews_res_id = getUrlVars()["res_id"];
fetch("reviews.php?res_id=" + reviews_res_id).then(response => response.text()).then(data => {
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
	
	       

	
	
	<!--Include footer.php-->
    <div><?php include "../../../../includes/footer.php" ?></div>
	
	<!--script for slideshow-->
    <script src="js/slideshow.js"></script>
	
	<!--script for onClickNav() for the navigation menu-->
    <script src="js/onClickNav.js"></script>
</body>
</html>




