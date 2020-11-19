<?php include('../../includes/session.php') ?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Queries</title>  
        <link href="../../images/logo.png" rel="shortcut icon"/> 
        <script src="https://kit.fontawesome.com/20026fc328.js" crossorigin="anonymous"></script>
        <!-- Link the style sheets -->
        <link rel="stylesheet" href="../../CSS/employee.css">
        <link rel="stylesheet" href="../../CSS/customer-reg.css">  

    </head>
    <body class="subbody">
        <div class="content-div">
            <h1>New <span style="color:orange">Queries</span> </h1>

            <div class="promo-btn-bar">
                <button type="button" class="hero-button" onclick="window.location.href='past-queries.php'">Replied Queries</button>
            </div>

            <table class="message-table">
                <tr><th>Shall you do for a special food order menu?</th></tr>
                <tr><td>This is for childs party for nursary school. So we have a special food recipient to make. Can you make it?</td></tr>
                <tr><td>from <b>John Henricks</b> on <b>2020-11-16 12:23:42</b></td></tr>
                <tr><td><textarea placeholder="Enter Your Reply..." class="reply-area"></textarea></td></tr>
                <tr><td><button type="submit" class="hero-button">Send</button></td></tr>

                <td><hr></td>

                <tr><th>Are you having the event managment?</th></tr>
                <tr><td>We are palnning for wedding reception.So could you arrage all the needs which we want to make it better.like Sound arrangements, Decoration and all. </td></tr>
                <tr><td>from <b>Carl Johnson</b> on <b>2020-11-10 13:20:01</b></td></tr>
                <tr><td><textarea placeholder="Enter Your Reply..." class="reply-area"></textarea></td></tr>
                <tr><td><button type="submit" class="hero-button">Send</button></td></tr>

            </table>
        </div>



    <!--script for onClickNav() for the navigation menu-->
    <script src="../../js/onClickNav.js"></script>

    </body>
</html>