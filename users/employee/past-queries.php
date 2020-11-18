<?php include('../../includes/session.php') ?>
<?php include('../../includes/connection.php') ?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ReserveMe - Admin</title>
        <link href="../../images/logo.png" rel="shortcut icon"/>
        <link rel="stylesheet" href="../../CSS/admin-dashboard.css"/>
        <link rel="stylesheet" href="../../CSS/employee.css"/>
        <!-- <link rel="stylesheet" href="../../CSS/main.css"/> -->
        <script src="../../js/manage-user-search.js"></script>
    </head>
    <body>

        <h1 style="color:orange">Past Queries</h1>

        <div class="promo-btn-bar">
                <button type="button" class="hero-button" onclick="window.location.href='queries.php'">New Queries</button>
        </div>

        <div class="search-user-container">
            <!-- <form name="form-display-selected"> -->
                <!--heading-->
		        <h3>Search From Name</h3>
		        <!--Input-------->
		        <div class="search-input">
                    <input type="text" id="myInput" onkeyup="myFunctionPastPromos()" 
                    placeholder="Enter Name"/>
                    <br>
                </div>    
        </div>

        <table class="message-table">
                <tr><th>I faced difficulties while login</th></tr>
                <tr><td>When I try to login to the system, a message was shown as my account has been suspended and contact an admin to re-activate my account.</td></tr>
                <tr><td>from <b>John Henricks</b> on <b>2020-11-16 12:23:42</b></td></tr>
                <tr><td class="sent-reply">You have violated the terms and conditions of the system so we are sorry to say that the account has been suspended by the administration. It is clearly specified in the Terms and Conditions that any violation can cause upto gettoing suspended your account.</td></tr>
                <tr><td class="sent-reply">Reply sent on <b>2020-11-16 13:00:00</b> by <b>Co-admin Chanaka</b><hr>
                <!-- <tr><td class="txt-area"><textarea placeholder="Enter Your Reply..." class="reply-area"></textarea></td></tr> -->
                <!-- <tr><td class="txt-area"><button type="submit" class="btn-reply">Send</button></td></tr> -->

                <td><hr></td>

                <tr><th>I faced difficulties while login</th></tr>
                <tr><td>When I try to login to the system, a message was shown as my account has been suspended and contact an admin to re-activate my account.
                When I try to login to the system, a message was shown as my account has been suspended and contact an admin to re-activate my account.</td></tr>
                <tr><td>from <b>Carl Johnson</b> on <b>2020-11-10 13:20:01</b></td></tr>
                <tr><td class="sent-reply">You have violated the terms and conditions of the system so we are sorry to say that the account has been suspended by the administration. It is clearly specified in the Terms and Conditions that any violation can cause upto gettoing suspended your account.</td></tr>
                <tr><td class="sent-reply">Reply sent on <b>2020-11-16 13:00:00</b> by <b>Co-admin Chanaka</b><hr>
                <!-- <tr><td class="txt-area"><textarea placeholder="Enter Your Reply..." class="reply-area"></textarea></td></tr> -->
                <!-- <tr><td class="txt-area"><button type="submit" class="btn-reply">Send</button></td></tr> -->

            </table>

    </body>
</html>
