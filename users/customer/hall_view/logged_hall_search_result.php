<?php include('../../../includes/connection.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReserveMe</title>
    <link href="../../../images/logo.png" rel="shortcut icon"/>
    <!--fontawesome-------------------->
    <script src="https://kit.fontawesome.com/20026fc328.js" crossorigin="anonymous"></script>
    <!--stylesheet-------------------->
	<link rel="stylesheet" type="text/css" href="../../../CSS/nav.css">
    <link rel="stylesheet" href="../../../CSS/search.css">
    <link rel="stylesheet" href="../../../CSS/footer.css">   
    <link rel="stylesheet" href="../../../CSS/main.css">
</head>

<body>
    <!--Start of nav-->
    <div class="topnav" id="myTopnav">
        <a href="../customer-home.php"><img class = "logo" src="../../../images/logo.png"></a>
		<a class="navtab" href="../../../index.php">Logout</a>
        <a class="navtab" href="../customer-profile.php">Profile</a>
        <a class="navtab" href="../reservation_details.php">Reservations</a>
		<a class="navtab" href="../../../includes/logged_contact.php">Contact</a>
		<a class="navtab" href="../../../includes/logged_about.php">About</a>    
		<a class="navtab" href="javascript:void(0);" id="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a>
    </div>
    <!--End of nav-->

     <!--Start of Header-->
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
    <!--End of Header-->

    <!--Start of HAll Section-->
    <?php 
        if(isset($_POST["submit"])){
            $capacity = $_POST["capacity"];
            $advance_fee = $_POST["advance_fee"];
            $reservation_date = $_POST["reservation_date"];
            $reservation_time = $_POST["reservation_time"];

            if($capacity=="" && $advance_fee=="" && $reservation_date!=="" && $reservation_time!==""){
                $retrieveProduct = "SELECT  reception_hall.main_image, reception_hall.hall_id, reception_hall.description, reception_hall.hall_name
                FROM reception_hall LEFT JOIN hall_reservation ON reception_hall.hall_id=hall_reservation.hall_id 
                WHERE reservation_time  LIKE '$reservation_time%' AND reservation_date NOT LIKE '$reservation_date%'";
                $resultProduct = mysqli_query($connection, $retrieveProduct); 
                while($rowProduct  = mysqli_fetch_assoc($resultProduct)){                        
                    echo"<!--Start of Hall-->
                    <section class=\"reservation\" style=\"padding-top:5px; margin:auto;\">
                        <!--img-->
                        <div class=\"reservation-img\"><img src=\"../../../images/halls/{$rowProduct['main_image']}\" /></div>
                        <!--text-->
                        <div class=\"reservation-text\">
                            <!--heading-->
                            <h3>". $rowProduct['hall_name'] ."</h3>
                            <!--details-->
                            <p>". $rowProduct['description'] ."</p>
                            <a class=\"hero-button\" onclick=\"location.href='logged_hall_view.php?hall_id={$rowProduct['hall_id']}&reservation_date=$reservation_date&reservation_time=$reservation_time';\" >Find Out More</a>
                        </div>
                        </section>
                    <!--End of Hall2-->";
                    }       
                    
            }else if($capacity=="Capacity" && $advance_fee!=="" && $date!=="" && $time!==""){
                $retrieveProduct = "SELECT reception_hall.main_image, reception_hall.hall_id, reception_hall.description, reception_hall.hall_name
                FROM reception_hall INNER JOIN hall_reservation ON reception_hall.hall_id=hall_reservation.hall_id 
                WHERE time LIKE '$time%' AND date LIKE '$date%' AND capacity LIKE '$date%' "; 
                $resultProduct = mysqli_query($connection, $retrieveProduct); 
                while($rowProduct  = mysqli_fetch_assoc($resultProduct)){                        
                            echo"<!--Start of Hall-->
                            <section class=\"reservation\" style=\"padding-top:5px; margin:auto;\">
                                <!--img-->
                                <div class=\"reservation-img\"><img src=\"../../../images/halls/{$rowProduct['main_image']}\" /></div>
                                <!--text-->
                                <div class=\"reservation-text\">
                                    <!--heading-->
                                    <h3>". $rowProduct['hall_name'] ."</h3>
                                    <!--details-->
                                    <p>". $rowProduct['description'] ."</p>
                                    <a class=\"hero-button\" onclick=\"location.href='hall_view.php?hall_id={$rowProduct['hall_id']}';\" >Find Out More</a>
                                </div>
                                </section>
                            <!--End of Hall2-->div>
                            </div>";
                        }       
                    
            }else if($capacity!=="" && $advance_fee=="Advance_Fee" && $date!=="" && $time!==""){
                $retrieveProduct = "SELECT reception_hall.main_image, reception_hall.hall_id, reception_hall.description, reception_hall.hall_name
                FROM reception_hall
                INNER JOIN hall_reservation ON reception_hall.hall_id=hall_reservation.hall_id WHERE time LIKE '$time%' AND date LIKE '$date%' "; 
                $resultProduct = mysqli_query($connection, $retrieveProduct); 
                while($rowProduct  = mysqli_fetch_assoc($resultProduct)){                        
                            echo"<!--Start of Hall-->
                            <section class=\"reservation\" style=\"padding-top:5px; margin:auto;\">
                                <!--img-->
                                <div class=\"reservation-img\"><img src=\"../../../images/halls/{$rowProduct['main_image']}\" /></div>
                                <!--text-->
                                <div class=\"reservation-text\">
                                    <!--heading-->
                                    <h3>". $rowProduct['hall_name'] ."</h3>
                                    <!--details-->
                                    <p>". $rowProduct['description'] ."</p>
                                    <a class=\"hero-button\" onclick=\"location.href='hall_view.php?hall_id={$rowProduct['hall_id']}';\" >Find Out More</a>
                                </div>
                                </section>
                            <!--End of Hall2-->div>
                            </div>";
                        }       
                    
            }      
                               
                                 
                      
        }else{
            $retrieveProduct = "SELECT * FROM `reception_hall`";
            $resultProduct = mysqli_query($connection, $retrieveProduct);
            while($rowProduct  = mysqli_fetch_assoc($resultProduct)){  
            echo"<!--Start of Hall-->
            <section class=\"reservation\" style=\"padding-top:5px; margin:auto;\">
                <!--img-->
                <div class=\"reservation-img\"><img src=\"../../../images/halls/{$rowProduct['main_image']}\" /></div>
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
            
        }            
    ?>
    <!--End of Hall Section-->
    

    <!--Include footer.php-->
    <div><?php include "../../../includes/footer.php" ?></div>

    <!--script for slideshow-->
    <script src="../../../js/onClickNav.js"></script>
</body>
</html>