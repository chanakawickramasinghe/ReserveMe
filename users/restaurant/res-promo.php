<?php include('../../includes/session.php') ?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Restaurant-Promotions</title>
        <link rel="stylesheet" href="../../CSS/nav.css">
        <link href="../../CSS/footer.css" rel="stylesheet" type="text/css">  
        <link href="../../images/logo.png" rel="shortcut icon"/>
        <link rel="stylesheet" href="../../CSS/res-promo.css"/>
    </head>
    <body>

        <div class="content-div">
            <br><br>        
            <center><h1 style="color:#ffbb01;">Ongoing Promotions</h1></center>

            <div class="promo-btn-bar">
                <button type="button" class="btn-promo" onclick="window.location.href='res-add-promotions.php'">Add Promotion</button>
                <button type="button" class="btn-promo" onclick="window.location.href='res-past-promo.php'">View Past Promotions</button>
            </div>

            <table class="promo" id="myTable" border="1">
                <tr>
                    <th>Promo Image</th>
                    <th>Posted Date & Time</th>
                    <th>End Date & Time</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td><img class="img-promo" src="../../images/promos/1.jpg"></td>
                    <td>2020-10-15 22:03:02</td>
                    <td>2020-10-22 22:03:02</td>
                    <td>Paid</td>
                    <td><button type="button" class="btn-promo-remove">Remove</button></td>                
                </tr>
                <tr>
                    <td><img class="img-promo" src="../../images/promos/4.jpg"></td>
                    <td>2020-10-20 09:00:00</td>
                    <td>2020-10-22 09:00:00</td>
                    <td>Unpaid</td>
                    <td><button type="button" class="btn-promo-remove">Remove</button></td>                
                </tr>  
            </table>
        </div>

    <!--script for onClickNav() for the navigation menu-->
    <script src="../../js/onClickNav.js"></script>

    </body>
</html>
