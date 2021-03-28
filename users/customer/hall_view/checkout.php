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
            <h3>Reservation <font>Details</font></h3>
        </div>
        <form method="post" action="https://sandbox.payhere.lk/pay/checkout">  
            <?php 
      if(isset($_GET['hall_id'])){
        $reservation_date = $_GET['reservation_date'];
        $reservation_time = $_GET['reservation_time'];
        $hall_id = $_GET['hall_id'];
        $sql = "SELECT * FROM reception_hall WHERE hall_id = ".$_GET['hall_id'];
        $resultProduct = mysqli_query($connection,$sql);
        while($rowProduct  = mysqli_fetch_assoc($resultProduct)){  
            echo"<!--Start of main-section-->
            <table class=\"preorder\" id=\"\" style=\"border:0\">
                <tr>
                    <th>Hall Name</th>
                    <td>". $rowProduct['hall_name'] ."</td>
                </tr>
                <tr>
                    <th>Guests</th>
                    <td>". $rowProduct['capacity'] ."</td>
                </tr>
                <tr>
                    <th>Date</th>
                    <td>$reservation_date</td>
                </tr>
                <tr>
                    <th>Time</th>
                    <td>$reservation_time</td>
                </tr>
                <tr>
                    <th>Advance Payment</th>
                    <td>". $rowProduct['advance_fee'] ." LKR</td>
                </tr>
                <tr></tr>
                <tr>
                    <th></th>
                    <td><input class=\"food-btn\" type=\"submit\" value=\"Checkout\" style=\"margin-left:40px\"></td>                
                </tr>
               
            </table>
          <!--End of main-section-->

          <div class=\"hidden\">
            <input type=\"hidden\" name=\"merchant_id\" value=\"1215949\">    <!-- Replace your Merchant ID -->
            <input type=\"hidden\" name=\"return_url\" value=\"http://localhost/ReserveMe/users/customer/success.php\">
            <input type=\"hidden\" name=\"cancel_url\" value=\"preorder.php\">
            <input type=\"hidden\" name=\"notify_url\" value=\"info.reserve.lk@gmail.com\">  
            <br><br><br>
            <input type=\"hidden\" name=\"order_id\" value=\"1\">
            <input type=\"hidden\" name=\"items\" value=\"". $rowProduct['hall_name'] ."\"><br>
            <input type=\"hidden\" name=\"currency\" value=\"LKR\">
            <input type=\"hidden\" name=\"amount\" value=\"". $rowProduct['advance_fee'] ."\">  
            <br><br><br>
            <input type=\"hidden\" name=\"first_name\" value=\"Saman\">
            <input type=\"hidden\" name=\"last_name\" value=\"Perera\"><br>
            <input type=\"hidden\" name=\"email\" value=\"samanp@gmail.com\">
            <input type=\"hidden\" name=\"phone\" value=\"0771234567\"><br>
            <input type=\"hidden\" name=\"address\" value=\"No.1, Galle Road\">
            <input type=\"hidden\" name=\"city\" value=\"Colombo\">
            <input type=\"hidden\" name=\"country\" value=\"Sri Lanka\"><br><br> 
    
          
          ";
        }
      }



      //add a sql to add the temporary reservation details to the data table to grab the reservation id and by a select query grab the reservation id and pass it to the item id in the required data set for he payhere 
      //updtae the customers table as the data required in the data set
      //add session grab customer data
    ?>
    
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