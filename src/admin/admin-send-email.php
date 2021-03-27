<?php include('../../public/includes/session.php') ?>
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
            <a class="navtab" href="../../src/customer/index.php">Logout</a>
            <a class="navtab" href="admin-home.php">Home</a>
            <a class="navtab" href="manage-users.php">Manage Users</a>
            <a class="navtab" href="admin-view-customer.php">View Customers</a>
		    <a class="navtab" href="javascript:void(0);" id="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a>
        </div>
        <!--End of nav-->
            <br><br><br>
            <h1><font color="black">Send </font>Email</h2>
            <div >
                <center><form>
                <table class="send-msg">
                    <tr>
                        <th>To :<br></th>
                        <td><input type="email" placeholder="Receiver's Email" Value="example@reserveme.lk"><br></td>
                        
                    </tr>
                    <tr>
                        <th>Subject :<br></th>
                        <td><input type="text" placeholder="Subject"><br></td>
                    </tr>
                    <tr>
                        <th>Message :</th>
                        <td><textarea style="height:15vh;width:30vw;overflow:autofont-size:large;
	background-color: white;
	border-radius:5px;
  border: none;
	display: flex;
	justify-content: center;
	align-items: center;
  padding:20px;
  box-shadow: 2px 2px 30px rgba(0,0,0,0.1);" scrolling="yes" placeholder="Enter message..."></textarea></td>
                    </tr>
                </table>
                <br>
                <button type="button" class="search-btn">Send</button><br>
                <button type="reset" class="btn-change-normal">Clear</button>
                </form></center>
                
            </div>
    </body>
</html>