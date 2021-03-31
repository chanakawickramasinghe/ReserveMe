<?php include('admin-session.php') ?>
<?php include('../../config/connection.php') ?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ReserveMe - Admin</title>
	    <link rel="stylesheet" href="../../public/CSS/admin-nav.css">
        <link href="../../public/images/logo.png" rel="shortcut icon"/>
        <link rel="stylesheet" href="../../public/CSS/admin-dashboard.css"/>
        <script src="../../public/js/manage-user-search.js"></script>
    </head>
    <body>

        <!--Start of nav-->
        <div class="topnav" id="myTopnav">
        <a href="admin-home.php"><img class = "logo" src="../../public/images/logo.png"></a>
            <a class="navtab" href="../../public/includes/logout.php">Logout</a>
            <a class="navtab" href="admin-home.php">Home</a>
            <a class="navtab" href="manage-users.php">Manage Users</a>
            <a class="navtab" href="admin-view-customer.php">View Customers</a>
		    <a class="navtab" href="javascript:void(0);" id="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a>
        </div>
        <!--End of nav-->
            <br><br><br>

        <?php
        $cus_id = $_POST['user_id'];
        // echo $cus_id;

        $sql = "SELECT * FROM customer WHERE user_id='$cus_id'";
        $sql_query = mysqli_query($connection,$sql);
        $row = mysqli_fetch_assoc($sql_query);

        $cus_name = $row['user_name'];
        $cus_email = $row['email'];

        ?>
            <h1><font color="black">Send </font>Email</h2>
            <div >
                <center><form method="POST" action="admin-send-email-submit.php">
                <table class="send-msg">
                    <tr>
                        <th>To :<br></th>
                        <td><input type="email" name="cus_email" placeholder="Receiver's Email" Value="<?php echo $cus_email;?>"><br></td>
                        <input type="hidden" name="cus_name" value="<?php echo $cus_name; ?>">
                    </tr>
                    <tr>
                        <th>Subject :<br></th>
                        <td><input type="text" name="subject" placeholder="Subject"><br></td>
                    </tr>
                    <tr>
                        <th>Message :</th>
                        <td><textarea class="txtarea-email" name="msg" scrolling="yes" placeholder="Enter message..."></textarea></td>
                    </tr>
              
                </table>
                <br/>
                        <input type="submit" class="btn-change-s" name="send-email" value="Send">
                        <button type="reset" class="btn-change-s">Clear</button>
                
                </form></center>
                
            </div>
    </body>
</html>