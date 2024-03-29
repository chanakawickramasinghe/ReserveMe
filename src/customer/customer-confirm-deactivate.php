<?php include('../../config/connection.php') ?>
<?php include('../../public/includes/session.php') ?>

<html>
    <head>
        <title>Confirm Deactivation</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../public/CSS/main.css">
        <script src="https://kit.fontawesome.com/20026fc328.js" crossorigin="anonymous"></script>
	    <link rel="stylesheet" href="../../public/CSS/admin-nav.css">
        <link rel="stylesheet" href="../../public/CSS/search.css">
        <link rel="stylesheet" href="../../public/CSS/footer.css">
        <link rel="stylesheet" href="../../public/CSS/style.css">
        <!--web-icon-->
        <link href="../../public/images/logo.png" rel="shortcut icon"/>
    </head>
    <body>
        <!--Start of nav-->
        <div class="topnav" id="myTopnav">
            <a href="customer-home.php"><img class = "logo" src="../../public/images/logo.png"></a>
            <a class="navtab" href="../../index.php">Logout</a>
            <a class="navtab" href="customer-profile.php">Profile</a>
            <a class="navtab" href="reservation_details.php">Reservations</a>
		    <a class="navtab" href="../../public/includes/logged_contact.php">Contact</a>
		    <a class="navtab" href="../../public/includes/logged_about.php">About</a>
		    <a class="navtab" href="javascript:void(0);" id="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a>    
        </div>

        <div>
            <form class="div-c" method='POST' action='customer-confirm-deactivate-submit.php' name="form-confirm-deactive">
                </br></br></br></br><br/><br/><br/>
                <h3>Deactivate <font color="orange">Account</font></h3>
                <p>We are sorry to see you go, you can always re-activate your account</p></br>
                <button name="btn-cancel" type="button" class="btn-grey" onclick="window.location.href='customer-profile.php'"> Cancel </button>
                <button type="submit" name="btn-Delete" class="btn-red" > Deactivate </button>
            </form>
        </div>
        <br/><br/><br/>
        <?php include('../../public/includes/footer.php') ?>

        <!--script for slideshow-->
        <script src="../../public/js/onClickNav.js"></script>
    </body>
</html>
