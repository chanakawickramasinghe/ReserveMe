<?php include('../../../config/connection.php'); ?>
<?php include('../../../public/includes/session.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReserveMe</title>
    <!--web-icon-->
    <link href="../../../public/images/logo.png" rel="shortcut icon"/>
    <!--fontawesome-------------------->
    <script src="https://kit.fontawesome.com/20026fc328.js" crossorigin="anonymous"></script>
    <!--stylesheet-------------------->
	<link rel="stylesheet" type="text/css" href="../../../public/CSS/nav.css">
    <link rel="stylesheet" href="../../../public/CSS/footer.css">   
    <link rel="stylesheet" href="../../../public/CSS/preorder.css">

</head>

<body onload="clearUrlPara()">
    <!--Start of nav-->
    <div class="topnav" id="myTopnav">
        <a href="../customer-home.php"><img class = "logo" src="../../../public/images/logo.png"></a>
		<a class="navtab" href="../../../index.php">Logout</a>
		<a class="navtab" href="../customer-profile.php">Profile</a>
		<a class="navtab" href="../reservation_details.php">Reservations</a>
		<a class="navtab" href="../../../public/includes/logged_contact.php">Contact</a>
		<a class="navtab" href="../../../public/includes/logged_about.php">About</a>
		<a class="navtab" href="javascript:void(0);" id="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a>
	</div><br>
    <!--End of nav-->   

    <section class="preorder_sec">
    <div class="col1" id="col1">

        <!--Start of Ongoing Card Section-->
            <div class="title_text">
            <h2>Pre<font>Order</font> Me<font>nu</font></h2>
            <h4 style="color:red">Select One at a time</h4><br>
            </div>
        <!-- <form method="GET" action="">   -->
            <table class="preorder" id="" > 
                <tr>
                    <th>Food Menu</th>
                    <th>Price(LK)</th>
                    <th>Quantity</th>
                    <th></th>
                </tr>
            <?php
                // GET the user id from the Session
                checkSession();
                $user_id = $_SESSION["userID"];

                    $search_menu = "SELECT * FROM menu WHERE item_avail='1' And preorder_avail = '1' AND allow_preorder = '1'";
                    $result_menu = mysqli_query($connection,$search_menu);
                    while($row = mysqli_fetch_assoc($result_menu)){
                        $item_id= $row['item_id'];
                        echo "
                        <form action=\"\" method=\"POST\">
                        <tr>
                            <td style=\"display:none\">".$item_id."</td>
                            <td>".$row['item_name']."</td>
                            <td>".$row['item_price']."</td> 
                            <td><input type=\"number\" class=\"quan-btn\" id=\"quantity\" name=\"quanOf[".$item_id."]\" min=\"1\" max=\"12\" value=\"\"></td>
                            <td><input type=\"submit\" class=\"addToCart-btn\" name=\"submit\" value=\"Add to Cart\"></td>           
                        </tr>
                        </form>
                        ";
                        if(isset($_POST['quanOf'][$item_id])){
                            $quan = $_POST['quanOf'][$item_id];
                            $sql_pre_insert="INSERT INTO cart(cus_id, item_id, quantity) VALUES ($user_id,$item_id,$quan)";
                            $result=$connection->query($sql_pre_insert); 
                            if(!$result){
                                    echo "<p style=\"color:red;text-align:center\">Quantity is not selected</p>";
                            }
                        }

                    }
            ?>
            </table>
            <!-- <section class="preorder_sec"> -->
            <div style="float:right;margin-right:15%">
                <div class="col1">
                <input type="button" class="food-btn" value="View Cart" onclick="onClickOpenCart()">
                </div>
            </div>

    </div>

    <div class="col2" id="col2">

        <!--Start of Ongoing Card Section-->
        <div class="title_text">
        <h2>Confirmed <font>Menu</font></h2><br>
        </div>

    <div class="hide_text" id="hide_text"><center><h3 style="color:red">Select Menu to confirm...!</h3></center></div>    

    <div class="hide_form" id="hide_form">
    <table class="preorder">
        <tr>
            <th>Menu</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Sub Total</th>
            <th>Action</th>
        </tr>
        <?php 

            $cart_total=0;
            $search_menu = "SELECT menu.item_name, menu.item_price, cart.quantity, cart.cart_id, (menu.item_price*cart.quantity) as sub_total
            FROM cart
            INNER JOIN menu ON cart.item_id=menu.item_id;";
            $result_menu = mysqli_query($connection,$search_menu);
            while($row = mysqli_fetch_assoc($result_menu)){
                $cart_id = $row['cart_id'];
                $cart_item = $row['item_name'];
                $cart_item_price = $row['item_price'];
                $cart_item_quan = $row['quantity'];
                $cart_item_subt = $row['sub_total'];
                echo "
                <tr>
                    <td>$cart_item</td>
                    <td>$cart_item_price</td>
                    <td>$cart_item_quan</td>
                    <td>$cart_item_subt</td>
                    <td><a href=\"preorder-remove.php?id=$cart_id\" style=\"color:red\">Remove</a></td>         
                </tr>
                
                ";
                $cart_total=$cart_total+$cart_item_subt;
                
            }
            
        ?>
        <th></th>
        <th></th>
        <th>Total</th>
        <th><?php echo $cart_total; ?></th>
        <th></th>
    </table>
    
    <form method="post" action="https://sandbox.payhere.lk/pay/checkout">    
        <div style="float:right;margin-right:15%">
        <input class="food-btn" type="submit" name="order" value="Order">
        </div>

        <div class="hidden">
            <input type="hidden" name="merchant_id" value="1215949">    <!-- Replace your Merchant ID -->
            <input type="hidden" name="return_url" value="http://localhost/ReserveMe/users/customer/res_view/reserve-payment-confirmation.php">
            <input type="hidden" name="cancel_url" value="preorder.php">
            <input type="hidden" name="notify_url" value="info.reserve.lk@gmail.com">  
            <br><br><br>
            <input type="hidden" name="order_id" value="1">
            <input type="hidden" name="items" value="Reservation"><br>
            <input type="hidden" name="currency" value="LKR">
            <input type="hidden" name="amount" value="<?php echo $cart_total;?>">  
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
    <div><?php include "../../../public/includes/footer.php" ?></div>

    <!--script for onClickNav() for the navigation menu-->
    <script src="../../../public/js/onClickNav.js"></script>
    <script src="../../../public/js/onClickOpenForm.js"></script>
    
    <!-- Clear all Url paased parameters -->
    <script>
        function clearUrlPara(){
            history.replaceState(null, "", location.href.split("?")[0]);
        }

    </script>
    

</body>

</html>


</body>
</html>