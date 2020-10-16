<?php include('../includes/connection.php') ?>
<?php include('../includes/session.php') ?>

<html>
    <head>
        <title>Confirm Deactivation</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../CSS/main.css">
        <script src="https://kit.fontawesome.com/20026fc328.js" crossorigin="anonymous"></script>
	    <link rel="stylesheet" href="../CSS/nav.css">
        <link rel="stylesheet" href="../CSS/search.css">
        <link rel="stylesheet" href="../CSS/footer.css">
        <link rel="stylesheet" href="../CSS/style.css">
    </head>
    <body>
        <!--Start of nav-->
        <div class="topnav" id="myTopnav">
            <a href="#contact">Contact</a>
            <a href="#about">About</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
            <img class = "logo" src="../images/logo.png">
        </div>

        <div>
            <form class="div-c" method='POST' action='activate-account-submit.php' name="form-active-account">
                </br></br></br></br>
                <h2>Activate Account</h2>
                <p>It seems like you have deactivated your account. Please Activate and log in to your account</p></br>
                <button name="btn-cancel" type="button" class="btn-grey" onclick="window.location.href='../includes/login.php'"> Cancel </button>
                <button type="submit" name="btn-activate" class="btn-blue" > Activate Account </button>
            </form>
        </div>

        <?php include('../includes/footer.php') ?>

    </body>
</html>