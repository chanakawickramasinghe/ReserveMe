<?php include('../../../includes/connection.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReserveMe</title>
    <!--web-icon-->
    <link href="../../../images/logo.png" rel="shortcut icon"/>
    <!--fontawesome-------------------->
    <script src="https://kit.fontawesome.com/20026fc328.js" crossorigin="anonymous"></script>
    <!--stylesheet-------------------->
	<link rel="stylesheet" type="text/css" href="../../../CSS/nav.css">
    <link rel="stylesheet" href="../../../CSS/footer.css">   
    <link rel="stylesheet" href="../../../CSS/preorder.css">
</head>

<body>
    <!--Start of nav-->
    <div class="topnav" id="myTopnav">
            <a href="../customer-home.php"><img class = "logo" src="../../../images/logo.png"></a>
			<a class="navtab" href="../../../index.php">Logout</a>
			<a class="navtab" href="../customer-profile.php">Profile</a>
			<a class="navtab" href="../reservation_details.php">Reservations</a>
			<a class="navtab" href="../../../includes/logged_contact.php">Contact</a>
			<a class="navtab" href="../../../includes/logged_about.php">About</a>
			<a class="navtab" href="javascript:void(0);" id="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a>
		</div>
    <!--End of nav-->
    
    <!--Start of Ongoing Card Section-->
        <div class="title_text">
            <h3>Bo<font>ok</font></h3>
        </div>
        <form method="post" action="https://sandbox.payhere.lk/pay/checkout">  
            <table class="preorder" id="" border="0">
                <tr>
                    <th>Hall Name</th>
                    <td>Avenra</td>
                </tr>
                <tr>
                    <th>Guests</th>
                    <td>100</td>
                </tr>
                <tr>
                    <th>Date</th>
                    <td>04/12/2020</td>
                </tr>
                <tr>
                    <th>From</th>
                    <td>8.00AM</td>
                </tr>
                <tr>
                    <th>To</th>
                    <td>3.00PM</td>
                </tr>
                <tr>
                    <th>Advance Payment</th>
                    <td>100 000.00 LKR</td>
                </tr>
                <tr></tr>
                <tr>
                    <td><input class="food-btn" type="submit" value="Book"></td>                
                </tr>
               
            </table>
    <div class="hidden">
    <input type="hidden" name="merchant_id" value="1215949">    <!-- Replace your Merchant ID -->
    <input type="hidden" name="return_url" value="http://localhost/ReserveMe/users/customer/success.php">
    <input type="hidden" name="cancel_url" value="preorder.php">
    <input type="hidden" name="notify_url" value="info.reserve.lk@gmail.com">  
    <br><br><br>
    <input type="hidden" name="order_id" value="1">
    <input type="hidden" name="items" value="Reservation"><br>
    <input type="hidden" name="currency" value="LKR">
    <input type="hidden" name="amount" value="1000">  
    <br><br><br>
    <input type="hidden" name="first_name" value="Saman">
    <input type="hidden" name="last_name" value="Perera"><br>
    <input type="hidden" name="email" value="samanp@gmail.com">
    <input type="hidden" name="phone" value="0771234567"><br>
    <input type="hidden" name="address" value="No.1, Galle Road">
    <input type="hidden" name="city" value="Colombo">
    <input type="hidden" name="country" value="Sri Lanka"><br><br> 
        </div>
</form> 
<!--Include footer.php-->
<div><?php include "../../../includes/footer.php" ?></div>

<!--script for onClickNav() for the navigation menu-->
<script src="../../../js/onClickNav.js"></script>
</body>
</html>

<?php

$merchant_id         = $_POST['merchant_id'];
$order_id             = $_POST['order_id'];
$payhere_amount     = $_POST['payhere_amount'];
$payhere_currency    = $_POST['payhere_currency'];
$status_code         = $_POST['status_code'];
$md5sig                = $_POST['md5sig'];

$merchant_secret = '4pAh4a0MJW84eZRsXC9nTN4jx508Tc7454Dx4iWtUEVf'; // Replace with your Merchant Secret (Can be found on your PayHere account's Settings page)

$local_md5sig = strtoupper (md5 ( $merchant_id . $order_id . $payhere_amount . $payhere_currency . $status_code . strtoupper(md5($merchant_secret)) ) );

if (($local_md5sig === $md5sig) AND ($status_code == 2) ){
        //TODO: Update your database as payment success
}

?>