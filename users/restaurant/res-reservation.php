<?php include('../../includes/session.php') ?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Restaurant-Reservation</title>
        <link rel="stylesheet" href="../../CSS/nav.css">
        <link href="../../CSS/footer.css" rel="stylesheet" type="text/css">  
        <link href="../../images/logo.png" rel="shortcut icon"/>
        <link rel="stylesheet" href="../../CSS/res-promo.css"/>
    </head>
    <body>
        <div class="content-div">
            <br><br>        
            <center><h1 style="color:#ffbb01;">Ongoing Reservations</h1></center>
            <br><br>
            <div class="promo-btn-bar">
                <button type="button" class="btn-promo" onclick="window.location.href='res-fut-res.php'">Future Reservations</button>
                <button type="button" class="btn-promo" onclick="window.location.href='res-past-res.php'">Past Reservation</button>
            </div>
            <br><br><br><br><br>
            <table class="promo" id="myTable" border="1">
                <tr>
                    <th>Reservation ID</th>
                    <th>Customer Name</th>
                    <th>Meal</th>
                    <th>Date & Time</th>
                    <th>No. of Guests</th>
                </tr>
                <tr>
                    <td>001</td>
                    <td>C. Priyadarshani</td>
                    <td>Lunch</td>
                    <td>19th November 13:30:00</td>       
                    <td>04</td>         
                </tr>
                <tr>
                    <td>002</td>
                    <td>C. Wickramasingha</td>
                    <td>Dinner</td>
                    <td>19th November 19:30:00</td>       
                    <td>02</td>         
                </tr>
                <tr>
                    <td>003</td>
                    <td>A. Ali</td>
                    <td>Lunch</td>
                    <td>19th November 12:00:00</td>       
                    <td>06</td>         
                </tr> 
                <tr>
                    <td>005</td>
                    <td>A. Ananda</td>
                    <td>Lunch</td>
                    <td>19thth November 14:00:00</td>       
                    <td>07</td>         
                </tr>  
            </table>
        </div>
    <!--script for onClickNav() for the navigation menu-->
    <script src="../../js/onClickNav.js"></script>

    </body>
</html>
