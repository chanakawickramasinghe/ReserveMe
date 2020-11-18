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
        <br>
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

                <tr><th>Shall you do for a special food order menu?</th></tr>
                <tr><td>This is for childs party for nursary school. So we have a special food recipient to make. Can you make it?</td></tr>
                <tr><td>from <b>John Henricks</b> on <b>2020-11-16 12:23:42</b></td></tr>
                <tr><td class="sent-reply">No Have no that spacial food menu for child function. our catering department is differnce.So you can contact on them to reqest your food menu.</td></tr>
                <tr><td class="sent-reply">Reply sent on <b>2020-11-16 13:00:00</b> by <b>Co-admin Chanaka</b><hr>
               

                <td><hr></td>

                <tr><th>Are you having the event managment?</th></tr>
                <tr><td>We are palnning for wedding reception.So could you arrage all the needs which we want to make it better.like Sound arrangements, Decoration and all. </td></tr>
                <tr><td>from <b>Carl Johnson</b> on <b>2020-11-10 13:20:01</b></td></tr>
                <tr><td class="sent-reply">Yes we have event management in our restaurant.If you have any rrequest please contact through this for more information. Contact No:+112536486.</td></tr>
                <tr><td class="sent-reply">Reply sent on <b>2020-11-16 13:00:00</b> by <b>Co-admin Chanaka</b><hr>
                
        </table>

    </body>
</html>
