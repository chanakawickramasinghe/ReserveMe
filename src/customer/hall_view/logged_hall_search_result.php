<?php include('../../../config/connection.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReserveMe</title>
    <link href="../../../public/images/logo.png" rel="shortcut icon"/>
    <!--fontawesome-------------------->
    <script src="https://kit.fontawesome.com/20026fc328.js" crossorigin="anonymous"></script>
    <!--stylesheet-------------------->
	<link rel="stylesheet" type="text/css" href="../../../public/CSS/nav.css">
    <link rel="stylesheet" href="../../../public/CSS/search.css">
    <link rel="stylesheet" href="../../../public/CSS/footer.css">   
    <link rel="stylesheet" href="../../../public/CSS/main.css">
</head>

<body>
    <!--Start of nav-->
    <div class="topnav" id="myTopnav">
        <a href="../customer-home.php"><img class = "logo" src="../../../public/images/logo.png"></a>
		<a class="navtab" href="../../../index.php">Logout</a>
        <a class="navtab" href="../customer-profile.php">Profile</a>
        <a class="navtab" href="../reservation_details.php">Reservations</a>
		<a class="navtab" href="../../../public/includes/logged_contact.php">Contact</a>
		<a class="navtab" href="../../../public/includes/logged_about.php">About</a>    
		<a class="navtab" href="javascript:void(0);" id="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a>
    </div>
    <!--End of nav-->

     

    <!--Start of HAll Section-->
    <?php 
        $retrieveProduct = "SELECT * FROM `reception_hall`";
            $resultProduct = mysqli_query($connection, $retrieveProduct);
            while($rowProduct  = mysqli_fetch_assoc($resultProduct)){  
            echo"<!--Start of Hall-->
            <section class=\"reservation\" style=\"padding-top:5px; margin:auto;\">
                <!--img-->
                <div class=\"reservation-img\"><img src=\"../../../public/images/halls/{$rowProduct['main_image']}\" /></div>
                <!--text-->
                <div class=\"reservation-text\">
                    <!--heading-->
                    <h3>". $rowProduct['hall_name'] ."</h3>
                    <!--details-->
                    <p>". $rowProduct['description'] ."</p>
                    <a class=\"hero-button\" onclick=\"location.href='logged_hall_view.php?hall_id={$rowProduct['hall_id']}';\" >Find Out More</a>
                </div>
                </section>
            <!--End of Hall2-->";
        }   
            
                  
    ?>
    <!--End of Hall Section-->
    

    <!--Include footer.php-->
    <div><?php include "../../../public/includes/footer.php" ?></div>

    <!--script for slideshow-->
    <script src="../../../public/js/onClickNav.js"></script>
</body>
</html>