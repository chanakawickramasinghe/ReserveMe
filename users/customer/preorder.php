<?php include('../../includes/connection.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReserveMe</title>
    <!--web-icon-->
    <link href="../../images/logo.png" rel="shortcut icon"/>
    <!--fontawesome-------------------->
    <script src="https://kit.fontawesome.com/20026fc328.js" crossorigin="anonymous"></script>
    <!--stylesheet-------------------->
	<link rel="stylesheet" type="text/css" href="../../CSS/nav.css">
    <link rel="stylesheet" href="../../CSS/footer.css">   
    <link rel="stylesheet" href="../../CSS/preorder.css">
</head>

<body>
    <!--Start of nav-->
    <div class="topnav" id="myTopnav">
            <a href="customer-home.php"><img class = "logo" src="../../images/logo.png"></a>
			<a class="navtab" href="../../index.php">Logout</a>
			<a class="navtab" href="customer-profile.php">Profile</a>
			<a class="navtab" href="reservation_details.php">Reservations</a>
			<a class="navtab" href="../../includes/logged_contact.php">Contact</a>
			<a class="navtab" href="../../includes/logged_about.php">About</a>
			<a class="navtab" href="javascript:void(0);" id="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a>
		</div>
    <!--End of nav-->
    
    <!--Start of Ongoing Card Section-->
        <div class="title_text">
            <h3>Pre<font>Order</font></h3>
        </div>
        <input type="hidden" name="merchant_id" value="1215949">    <!-- Replace your Merchant ID -->
    <input type="hidden" name="return_url" value="payment.php">
    <input type="hidden" name="cancel_url" value="new.html">
    <input type="hidden" name="notify_url" value="info.reserve.lk@gmail.com"> 
    <input type="text" name="order_id" value="ItemNo12345">
    <input type="text" name="items" value="Reservation"><br>
    <input type="text" name="currency" value="LKR">
    <input type="text" name="amount" value="1000">  
    <br><br>Customer Details<br>
    <input type="text" name="first_name" value="Saman">
    <input type="text" name="last_name" value="Perera"><br>
    <input type="text" name="email" value="samanp@gmail.com">
    <input type="text" name="phone" value="0771234567"><br>
    <input type="text" name="address" value="No.1, Galle Road">
    <input type="text" name="city" value="Colombo">
    <input type="hidden" name="country" value="Sri Lanka"><br><br> 
     
        <form class="food" action="https://sandbox.payhere.lk/pay/checkout">
        <table class="preorder" id="" border="0">
                <tr>
                    <td>Cappuccino</td>
                    <td>Rs.350.00</td>
                    <td><input type="number" id="quantity" name="quantity" placeholder="0" min="0" max="5"></td>
                </tr>
                <tr>
                    <td>Pasta</td>
                    <td>Rs.600.00</td>
                    <td><input type="number" id="quantity" name="quantity" placeholder="0" min="0" max="5"></td>
                </tr>
                <tr>
                    <td><button>Check Out</button></td>
               </tr>
            </table>

        </form>           
    <!--End of Ongoing Card Section-->

    

    <!--Include footer.php-->
    <div><?php include "../../includes/footer.php" ?></div>

    <!--script for onClickNav() for the navigation menu-->
    <script src="../../js/onClickNav.js"></script>
</body>
</html>

<?php

$merchant_id         = $_POST['merchant_id'];
$order_id             = $_POST['order_id'];
$payhere_amount     = $_POST['payhere_amount'];
$payhere_currency    = $_POST['payhere_currency'];
$status_code         = $_POST['status_code'];
$md5sig                = $_POST['md5sig'];

$merchant_secret = '4ub9IUoAnha49dBazIvOm08bRqc98QRj48MLwZuEibUQ'; // Replace with your Merchant Secret (Can be found on your PayHere account's Settings page)

$local_md5sig = strtoupper (md5 ( $merchant_id . $order_id . $payhere_amount . $payhere_currency . $status_code . strtoupper(md5($merchant_secret)) ) );

if (($local_md5sig === $md5sig) AND ($status_code == 2) ){
        //TODO: Update your database as payment success
}

?>