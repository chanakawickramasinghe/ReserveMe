<?php include('../../includes/session.php') ?>
<?php include('../../includes/connection.php') ?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ReserveMe - Res Add Promotion</title>
	    <link rel="stylesheet" href="../../CSS/nav.css">
        <link href="../../images/logo.png" rel="shortcut icon"/>
        <link rel="stylesheet" href="../../CSS/res-promo.css"/>
        <script src="../../js/manage-user-search.js"></script>
    </head>
    <body class="login-body">
	    
	<br><br>
    	<div class="login-box"> 
        <center><h1 style="color:#ffbb01;">Add Promotion</h1></center>
        <br><br>
        <div class="centered-view">
        <form class="add-promo-form" method="post" action="res-promo.php" enctype="multipart/form-data"> <!--SHOULD BE action="res-add-promotion-submit.php"-->
            <table class="add-promo-form">
                <tr>
                    <th>Starting Date</th>
                    <td><input class="input-feild" type="date" name="start_date"></td>
                </tr>
                <tr>
                    <th>End Date</th>
                    <td><input class="input-feild" type="date" name="end_date"></td>
                </tr>
                <tr>
                    <th>Add Image</th>
                    <td><input class="input-file"  type="file" name="promo_image"></td>
                </tr>
                <tr>
                    <td><input class="btn-res" type="submit" value="Add Promo" name="res-add-promo-submit"></td>
                    <td><input class="btn-res" type="button" value="Back" onclick="window.location.href='res-promo.php'"></td>
                </tr>

            </table>
            <br><br>
        </form>
        </div>
</div>
    
    </body>
</html>
