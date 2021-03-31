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
        <a href="../../../index.php"><img class = "logo" src="../../../public/images/logo.png"></a>
		<a class="navtab" href="../customerReg.php">Register</a>
		<a class="navtab" href="../../../public/includes/login.php">Login</a>
		<a class="navtab" href="../../../public/includes/contact.php">Contact</a>
		<a class="navtab" href="../../../public/includes/about.php">About</a>    
		<a class="navtab" href="javascript:void(0);" id="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a>
    </div>
    <!--End of nav-->

	<!--Start of Header
    <header class="header">
        <div class="search">
            <form action="" method="post">
                <div class="form-box">
                    <select name="capacity" class="search-feild capacity">
                        <option value=""> Capacity </option>
                        <?php
                            $sql = "SELECT `capacity` FROM `reception_hall`;";
                            $result = mysqli_query($connection,$sql);
                            while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <option value="<?php echo $row['capacity']; ?>"> <?php echo $row['capacity']; ?> </option>
                        <?php
                            }
                        ?>
                    </select>
					<select name="advance_fee" class="search-feild payment">
                        <option value=""> Advance Fee </option>
                        <?php
                            $sql = "SELECT `advance_fee` FROM `reception_hall`;";
                            $result = mysqli_query($connection,$sql);
                            while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <option value="<?php echo $row['advance_fee']; ?>"> <?php echo $row['advance_fee']; ?> </option>
                        <?php
                            }
                        ?>
                    </select>
					<select name="reservation_time" class="search-feild time" required>
                        <option value=""> Time </option>
                        <option value="Day"> Day </option>
                        <option value="Evening"> Evening </option>
                    </select>
                    <input type="date" id="reservation_date" name="reservation_date" required style="width:200px; borger-radius: 20px">
					<button class="search-button" type="submit" name="submit">Search<i class="fas fa-search"></i></button>
                </div>
            </form>            
        </div>		
    </header>
    End of Header-->

    <!--Start of HAll Section-->
    <?php 
        if(isset($_POST["submit"])){
            $capacity = $_POST["capacity"];
            $advance_fee = $_POST["advance_fee"];
            $reservation_date = $_POST["reservation_date"];
            $reservation_time = $_POST["reservation_time"];

        }else{
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
                    <a class=\"hero-button\" onclick=\"location.href='hall_view.php?hall_id={$rowProduct['hall_id']}';\" >Find Out More</a>
                </div>
                </section>
            <!--End of Hall2-->";
        }   
            
        }            
    ?>
    <!--End of Hall Section-->

    <!--Include footer.php-->
    <div><?php include "../../../public/includes/footer.php" ?></div>

    <!--script for slideshow-->
    <script src="../../../public/js/onClickNav.js"></script>
</body>
</html>

