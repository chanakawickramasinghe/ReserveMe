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
    </head>
    <body>
        <!--Start of nav-->
        <div class="topnav" id="myTopnav">
            <a href="../../index.php">Logout</a>
            <a href="customer-profile.php">My Profile</a>
            <a href="#contact">Contact</a>
            <a href="#about">About</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
            <img class = "logo" src="../../images/test.jpg">
        </div>

        <div>
            <form class="div-c" method='POST' action='' name="form-confirm-deactive">
                </br></br></br></br>
                <h2>Deactivate Account</h2>
                <p>We are sorry to see you go, you can always re-activate your account</p></br>
                <button name="btn-cancel" type="button" class="btn-grey" onclick="window.location.href='customer-profile.php'"> Cancel </button>
                <button type="submit" name="btn-Delete" class="btn-red"> Deactivate </button>
            </form>
        </div>

        <?php include('../../includes/footer.php') ?>

    </body>
</html>

<?php
    checkSession();
    $userID = $_SESSION["userID"];
    echo "php part $userID";
   
        /$deactive = "UPDATE customer SET active_status='0' WHERE user_id = $userID";
             
        if(mysqli_query($connection , $deactive) === TRUE) {
            $message = base64_encode(urlencode("Account Deactivated"));
            header('Location:../../includes/index.php?msg=' . $message);
            exit();
            }
            else{
                $message = base64_encode(urlencode("Deactivation Failed"));
                header('Location:customer-profile.php?msg=' . $message);
				exit();
            }

?>