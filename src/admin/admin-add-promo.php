<?php include('../../public/includes/session.php') ?>
<?php include('../../config/connection.php') ?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ReserveMe - Admin</title>
	    <link rel="stylesheet" href="../../public/CSS/nav.css">
        <link href="../../public/images/logo.png" rel="shortcut icon"/>
        <link rel="stylesheet" href="../../public/CSS/admin-dashboard.css"/>
        <script src="../../public/js/manage-user-search.js"></script>
    </head>
    <body>

        <!--Start of nav-->
        <div class="topnav" id="myTopnav">
        <a href="../../index.php"><img class = "logo" src="../../public/images/logo.png"></a>
            <a class="navtab" href="../../src/customer/index.php">Logout</a>
            <a class="navtab" href="admin-home.php">Home</a>
            <a class="navtab" href="promotions.php">Promotions</a>
        </div>
        <!--End of nav-->

        <h1><font color="black">Add</font> Promotion</h1>
        <div class="centered-view">
        <form class="add-promo-form" method="post" action="admin-add-promo-submit.php" enctype="multipart/form-data">
            <table class="add-promo-form">
                <tr>
                    <th>Starting Date</th>
                    <td><input class="input-feild" type="date" name="start_date" min="2020-11-19"></td>
                </tr>
                <tr>
                    <th>End Date</th>
                    <td><input class="input-feild" type="date" name="end_date" min="2020-11-19"></td>
                </tr>
                <tr>
                    <th>Add Image</th>
                    <td><input class="input-file"  type="file" name="promo_image"></td>
                </tr>
                <tr>
                    <td><input class="btn-coadmins" type="submit" value="Add Promo" name="btn-add-promo"></td>
                    <td><input class="btn-coadmins" type="button" value="Back" onclick="window.location.href='promotions.php'"></td>
                </tr>

            </table>
            <br><br>
        </form>
        </div>

    
    </body>
</html>