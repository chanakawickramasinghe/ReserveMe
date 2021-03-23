<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!--web-icon------------------->
	<link href="../../../../images/logo.png" rel="shortcut icon"/>
	<!--stylesheet-------------------->
	<title>Reviews System</title>
	<link href="../../../../CSS/reviews.css" rel="stylesheet" type="text/css">
	<link href="../../../../CSS/review.css" rel="stylesheet" type="text/css">
	<link href="../../../../CSS/nav.css" rel="stylesheet" type="text/css">
	<link href="../../../../CSS/footer.css" rel="stylesheet" type="text/css">
</head>

<body>
	<!--Start of nav-->
    <div class="topnav" id="myTopnav">
		<a href="../../customer-home.php"><img class = "logo" src="../../../../images/logo.png"></a>
		<a class="navtab" href="../../../../index.php">Logout</a>
		<a class="navtab" href="../../customer-profile.php">Profile</a>
		<a class="navtab" href="../../reservation_details.php">Reservations</a>
		<a class="navtab" href="../../../../includes/logged_contact.php">Contact</a>
		<a class="navtab" href="../../../../includes/logged_about.php">About</a>
		<a class="navtab" href="javascript:void(0);" id="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a>
	</div>
    <!--End of nav-->

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
				fetch("logged_reviews.php?res_id=" + reviews_res_id).then(response => response.text()).then(data => {
					document.querySelector(".reviews").innerHTML = data;
					document.querySelector(".reviews .write_review_btn").onclick = event => {
						event.preventDefault();
						document.querySelector(".reviews .write_review").style.display = 'block';
						document.querySelector(".reviews .write_review input[name='customer_name']").focus();
					};
					document.querySelector(".reviews .write_review form").onsubmit = event => {
						event.preventDefault();
						fetch("logged_reviews.php?res_id=" + reviews_res_id, {
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

		<!--Include footer.php-->
		<div><?php include "../../../../includes/footer.php" ?></div>

		<!--script for slideshow-->
		<script src="../../../../js/onClickNav.js"></script>
		
</body>
</html>
