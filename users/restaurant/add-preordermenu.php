<?php include('../../includes/session.php') ?>
<?php include('../../includes/connection.php') ?>

<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ReserveMe - Admin</title>
	    <link rel="stylesheet" href="../../CSS/nav.css">
        <link href="../../images/logo.png" rel="shortcut icon"/>
        <link rel="stylesheet" href="../../CSS/pre-order.css"/>
        <link href="../../css/footer.css" rel="stylesheet" type="text/css"/>
        <script src="../../js/manage-user-search.js"></script>
</head>


<body class="login-body">
<div>
            <form name="formRestSignup" action="add-preordermenu.php" method="post" enctype="multipart/form-data">
                <h2 class="error-msg" style="font-size:14px"><?php include_once('../../includes/message.php'); ?></h2>
                <br>
                <center>
                <h1 style="color:#ffbb01;">Pre - Order Menu</h1>
             
                <h3 align="center">Details regarding the Menu available to place Pre-Orders</h3>
                <br>
                <p><h3>Item Name<h3></p>
                <input type="text" class="type-feild"   name="item_name" placeholder="Item Name" required>
                <p><h3>Item Price<h3></p>
                <input type="text"  class="type-feild" name="item_price" placeholder="Price in LKR" required>
                <br><br><br>
                </center>
                <input type="submit" name="submit" style="margin-left:400px; margin-top:-30px" class="btn-promo" value="Submit" required>
                <input type="submit" name="submit" style="margin-left:635px; margin-top:-25px" class="btn-promo" value="Complete" required>   
            </form>
            <br><br>
            </div>
            <div class="tab" >
            <center>
            <table class="promo" id="myTable" border="1">
                <tr>
                    <th>Menu ID</th>
                    <th>Dish Name</th>
                    <th>Dish Price (LKR)</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Cream of Vegetable Soup</td>
                    <td>180</td>               
                </tr>
                <tr>
                    <td>2</td>
                    <td>Fried Rice</td>
                    <td>250</td>             
                </tr>
                <tr>
                    <td>3</td>
                    <td>Caramel Pudding</td>
                    <td>150</td>               
                </tr>
                </table>
            </div>
            </center>
    <div>
</body>

</html>
