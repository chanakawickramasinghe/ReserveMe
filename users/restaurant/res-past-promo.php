<?php include('../../includes/session.php') ?>
<?php include('../../includes/connection.php') ?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Past Promotions</title>
	    <link rel="stylesheet" href="../../CSS/nav.css">
        <link href="../../images/logo.png" rel="shortcut icon"/>
        <link rel="stylesheet" href="../../CSS/res-promo.css"/>
        <script src="../../js/manage-user-search.js"></script>
    </head>
    <body>

        <!--Start of nav-->
        <div class="topnav" id="myTopnav">
        <a href="../../index.php"><img class = "logo" src="../../images/logo.png"></a>
            <a class="navtab" href="../../index.php">Logout</a>
            <a class="navtab" href="admin-home.php">Home</a>
            <a class="navtab" href="promotions.php">Promotions</a>
        </div>
        <!--End of nav-->

        <center><h1 style="color:#ffbb01;">Past Promotions</h1><center>


        <table class="promo" id="myTable" border="1">
                <tr>
                    <th>Promo Image</th>
                    <th>Posted Date & Time</th>
                    <th>Ended Date & Time</th>
                </tr>
                <tr>
                    <td><img class="img-promo" src="../../images/promos/1.jpg"></td>
                    <td>2020-10-15 22:03:02</td>
                    <td>2020-10-18 22:03:02</td>           
                </tr>
        </table>
    
    </body>
</html>