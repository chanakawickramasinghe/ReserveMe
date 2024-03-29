<?php include('../../config/connection.php') ?>
<?php include('../../public/includes/session.php') ?>

<html>
    <head>
        <title>Confirm Deactivation</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
            <a href="../../index.php"><img class = "logo" src="../../public/images/logo.png"></a>
		    <a class="navtab" href="../../public/includes/contact.php">Contact</a>
		    <a class="navtab" href="../../public/includes/about.php">About</a>
            <a class="navtab" href="javascript:void(0);" id="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a>
        </div>

        <div>
            <form class="div-c">
                </br></br></br></br><br/><br/><br/>
                <h2>Request Activate Account</h2>
                <p>It seems like admins have suspended your account. Please Contact Admin to Request Account Activation</p></br>
                <button name="btn-contact" type="button" class="btn-blue" onclick="window.location.href='../../includes/contact.php'"> Contact Admin </button>
                <button name="btn-cancel" type="button" class="btn-grey" onclick="window.location.href='../../includes/login.php'"> Cancel </button>
            </form>
        </div>
        <br/><br/><br/>
        <?php include('../../public/includes/footer.php') ?>

        <!--script for slideshow-->
        <script src="../../public/js/onClickNav.js"></script>

    </body>
</html>
