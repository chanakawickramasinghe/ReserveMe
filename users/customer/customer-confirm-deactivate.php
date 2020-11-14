<?php include('../../includes/connection.php') ?>
<?php include('../../includes/session.php') ?>

<html>
    <head>
        <title>Confirm Deactivation</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../CSS/main.css">
        <script src="https://kit.fontawesome.com/20026fc328.js" crossorigin="anonymous"></script>
	    <link rel="stylesheet" href="../../CSS/nav.css">
        <link rel="stylesheet" href="../../CSS/search.css">
        <link rel="stylesheet" href="../../CSS/footer.css">
        <link rel="stylesheet" href="../../CSS/style.css">
        <!--web-icon-->
        <link href="../../images/logo.png" rel="shortcut icon"/>
    </head>
    <body>
        <!--Start of nav-->
        <div class="topnav" id="myTopnav">
            <a href="customer-home.php"><img class = "logo" src="../../images/logo.png"></a>
            <a class="navtab" href="../../index.php">Logout</a>
		    <a class="navtab" href="customer-profile.php">My Profile</a>
		    <a class="navtab" href="../../includes/logged_contact.php">Contact</a>
		    <a class="navtab" href="../../includes/logged_about.php">About</a>
		    <!--<a href="javascript:void(0);" class="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a> -->     
        </div>

        <div>
            <form class="div-c" method='POST' action='customer-confirm-deactivate-submit.php' name="form-confirm-deactive">
                </br></br></br></br>
                <h3>Deactivate Account</h3>
                <p>We are sorry to see you go, you can always re-activate your account</p></br>
                <button name="btn-cancel" type="button" class="btn-grey" onclick="window.location.href='customer-profile.php'"> Cancel </button>
                <button type="submit" name="btn-Delete" class="btn-red" > Deactivate </button>
            </form>
        </div>

        <?php include('../../includes/footer.php') ?>

    </body>
</html>
