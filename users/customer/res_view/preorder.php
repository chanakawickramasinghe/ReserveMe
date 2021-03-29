<?php include('../../../includes/connection.php'); ?>
<?php include('../../../includes/session.php'); ?>

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
	<!-- <link rel="stylesheet" type="text/css" href="../../../CSS/main.css"> -->
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
	</div><br>
    <!--End of nav-->


    <!-- GET the variable passed by URL -->
    <?php 
        $table_id=$_GET['table'];
        $guests=$_GET['guests'];
        $date = $_GET['date'];
        $time = $_GET['time'];
        // echo $table_id;
        // echo $guests;
        // echo $date;
        // echo $time;
    ?>
    

    <section class="preorder_sec">
    <div class="col1" id="col1">

        <!--Start of Ongoing Card Section-->
            <div class="title_text">
            <h2>Pre<font>Order</font> Me<font>nu</font></h2><br>
            </div>
        <form method="POST" action="cart.php">  
            <table class="preorder" id="" > 
                <tr>
                    <th>Food Menu</th>
                    <th>Price(LK)</th>
                    <th>Quantity</th>
                    <th></th>
                </tr>  
            <?php
                $search_menu = "SELECT * FROM menu WHERE item_avail='1' And preorder_avail = '1' AND allow_preorder = '1'";
                    $result_menu = mysqli_query($connection,$search_menu);
                    while($row = mysqli_fetch_assoc($result_menu)){
                        $item_id= $row['item_id'];
                        echo "
                        <tr>
                            <td style=\"display:none\">".$item_id."</td>
                            <td>".$row['item_name']."</td>
                            <td>".$row['item_price']."</td> 
                            <td><input type=\"number\" class=\"quan-btn\" id=\"quantity\" name=\"$item_id\" min=\"1\" max=\"5\" default=\"0\"></td>
                                           
                        </tr>";
                    }
            ?>
            </table>
            <section class="preorder_sec">
            <div style="float:right;margin-left:20%">
                <div class="col1">
                <input type="button" class="food-btn" value="View Cart" onclick="onClickOpenCart()">
                </div>
                <div class="col2">
                <input type="submit" class="food-btn" name="cart" value="Add to Cart" >   
                </div>
            </div>
            </section>   
        </form> 
        <!--End of Ongoing Card Section-->

    </div>

    <div class="col2" id="col2">

        <!--Start of Ongoing Card Section-->
        <div class="title_text">
        <h2>Confirmed <font>Menu</font></h2><br>
        </div>

    <div class="hide_text" id="hide_text"><center><h3 style="color:red">Select Menu to confirm...!</h3></center></div>

    <div class="hide_form" id="hide_form">
    <form method="post" action="https://sandbox.payhere.lk/pay/checkout">  
        <table class="preorder" id="" >
            <tr>
                <td>Cappuccino</td>
                <td>Rs.500.00</td>
                <td>1</td>
            </tr>
            <tr>
                <td>Ice cream</td>
                <td>Rs.300.00</td>
                <td>2</td>                
            </tr>
            <tr>
                <td>Pasta</td>
                <td>Rs.600.00</td>
                <td>2</td>                
            </tr>
            <tr></tr>
            <tr>
                <td>Total</td>
                <td>Rs.1000.00</td>
                <td> </td>                
            </tr>
        </table>

        <div style="float:right;margin-right:20%">
        <input class="food-btn" type="submit" name="order" value="Order">
        </div>

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
    </div>


            <?php
                if(isset($_POST['order'])){
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
            }
            ?>
        </div>
    </section>


    <!--Include footer.php-->
    <div><?php include "../../../includes/footer.php" ?></div>

    <!--script for onClickNav() for the navigation menu-->
    <script src="../../../js/onClickNav.js"></script>
    <script src="../../../js/onClickOpenForm.js"></script>


</body>
</html>