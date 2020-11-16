<?php include('../../includes/session.php') ?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ReserveMe - Admin</title>
	    <link rel="stylesheet" href="../../CSS/nav.css">
        <link href="../../images/logo.png" rel="shortcut icon"/>
        <link rel="stylesheet" href="../../CSS/admin-dashboard.css"/>
    </head>
    <body>

        <!--Start of nav-->
        <div class="topnav" id="myTopnav">
            <a href="admin-home.php"><img class = "logo" src="../../images/logo.png"></a>
            <a class="navtab" href="../../index.php">Logout</a>
        </div>
        <!--End of nav-->

        <!-- Admin Sidebar Dashboard -->
        
        <div class="sidebar">
            </br></br>
            <a href="admin-home.php">Home</a>
            <a href="manage-users.php">Manage Users</a>
            <a href="messages.php" class="active">Messages</a>
            <a href="promotions.php">Promotions</a>
            <a href="log.php">Application Log</a>
            <hr>
            <a href="coadmins.php">Manage Co-Admins</a>
        </div>

        <div class="content-div">
            <br><br>
            <h1>New Messages</h1>

            <div class="promo-btn-bar">
                <button type="button" class="btn-promo" onclick="window.location.href='send-new-message.php'">Send Message</button>
                <button type="button" class="btn-promo" onclick="window.location.href='admin-past-messages.php'">View Past Messages</button>
            </div>

            <table class="message-table">
                <tr><th>I faced difficulties while login</th></tr>
                <tr><td>When I try to login to the system, a message was shown as my account has been suspended and contact an admin to re-activate my account.</td></tr>
                <tr><td>from <b>John Henricks</b> on <b>2020-11-16 12:23:42</b></td></tr>
                <tr><td class="txt-area"><textarea placeholder="Enter Your Reply..." class="reply-area"></textarea></td></tr>
                <tr><td class="txt-area"><button type="submit" class="btn-reply">Send</button></td></tr>

                <td><hr></td>

                <tr><th>Complaint</th></tr>
                <tr><td>I have made a reservation in CingZhang Chinese restaurant but when I went to the restaurant on time I had to wait for few minutes in the lobby. I was very unsatisfied by the service at this restaurant as the reservation was placed but the table was not cleaned and it took them some time to do it. </td></tr>
                <tr><td>from <b>Carl Johnson</b> on <b>2020-11-10 13:20:01</b></td></tr>
                <tr><td class="txt-area"><textarea placeholder="Enter Your Reply..." class="reply-area"></textarea></td></tr>
                <tr><td class="txt-area"><button type="submit" class="btn-reply">Send</button></td></tr>

            </table>
        </div>





    </body>
</html>