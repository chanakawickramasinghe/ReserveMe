<?php include('../../includes/session.php') ?>
<?php include('../../includes/connection.php') ?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ReserveMe - Admin</title>
        <script src="https://kit.fontawesome.com/20026fc328.js" crossorigin="anonymous"></script>
	    <link rel="stylesheet" href="../../CSS/nav.css">
        <link href="../../images/logo.png" rel="shortcut icon"/>
        <link rel="stylesheet" href="../../CSS/admin-dashboard.css"/>
    </head>
    <body>

        <!--Start of nav-->
        <div class="topnav" id="myTopnav">
            <a href="admin-home.php"><img class = "logo" src="../../images/logo.png"></a>
            <a class="navtab" href="../../index.php">Logout</a>
		    
        </div>
        <!--End of nav-->

        <div class="centered-view">
            <form>
                <img class="img-change" src="../../images/form_icons/change-password.png">
                <h3>Are you sure want to change your password?</h3>
                <div class="form-change">
                    <p>Current Password : </p>
                    <p><input type="password" name="cur_pword"></p>
                    <p>New Password : </p>
                    <p><input type="password" name="new_pword1"></p>
                    <p>Re-Enter New Password : </p>
                    <p><input type="password" name="new_pword2"></p>

                    <button type="submit" class="btn-change-blue">Change Password</button>
                    <button type="reset" class="btn-change-normal">Clear</button>
                    <br>
                    <button type="button" class="btn-change-normal" onclick="window.location.href='admin-home.php'">Back</button>
                </div>
               
            </form>
            
        </div>

    </body>
</html>