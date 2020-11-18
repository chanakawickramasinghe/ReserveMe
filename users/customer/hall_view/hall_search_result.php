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
        <a href="../../../index.php"><img class = "logo" src="../../../images/logo.png"></a>
		<a class="navtab" href="../../user-type.php">Register</a>
		<a class="navtab" href="../../../includes/login.php">Login</a>
		<a class="navtab" href="../../../includes/contact.php">Contact</a>
		<a class="navtab" href="../../../includes/about.php">About</a>    
		<a class="navtab" href="javascript:void(0);" id="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a>
    </div>
    <!--End of nav-->
    
    <!--Start of Header-->
    <header class="header">
        <div class="search">
            <form action="" method="post">
                <div class="form-box">
                    <input type="text" onkeyup="onClickSearch()" name="search" id="search" class="search-feild restaurant" placeholder="Search for Restaurant...">
                    <select name="location" class="search-feild location">
                        <?php
                            $sql = "SELECT `res_location` FROM `res_location`;";
                            $result = mysqli_query($connection,$sql);
                            while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <option value="<?php echo $row['res_location']; ?>"> <?php echo $row['res_location']; ?> </option>
                        <?php
                            }
                        ?>
                    </select>
                    <button class="search-button pulsate" type="submit" name="submit">Search<i class="fas fa-search"></i></button>
                </div>
            </form>            
        </div>		
    </header>
    <!--End of Header-->
    
    <!--Start of Card Section-->
    <?php 
        if(isset($_POST["submit"])){
            $location = $_POST["location"];
            $search = $_POST["search"];
    
            if($search=="" && $location=="Location"){
                $retrieveProduct = "SELECT * FROM `restaurant` WHERE city LIKE '$location%' "; 
                $resultProduct = mysqli_query($connection, $retrieveProduct); 
                echo"<section class=\"`food`\">";      
                        while($rowProduct  = mysqli_fetch_assoc($resultProduct)){                        
                            echo"<div class=\"food-container\">
                                <div class=\"food-box\">
                                    <h3 class=\"name\">". $rowProduct['res_name'] ."</h3> 
                                    <img class=\"food-img\" src= \"../../../images/restaurant/{$rowProduct['res_image']}\">
                                    <br>
                                    <i class=\"fas fa-map-marker-alt\">". $rowProduct['city'] ."</i>
                                    <br>
                                    <i class=\"fas fa-star-half-alt\">". $rowProduct['res_rate'] ."</i>
                                    <button type=\"button\"class=\"food-btn\" onclick=\"location.href='hall_view.php?res_id={$rowProduct['res_id']}';\" style=\"cursor: pointer;\">Visit</button>  
                                </div>
                            </div>";
                        }       
                    echo"</section>";
            }           
            else{
                $retrieveProduct = "SELECT * FROM `restaurant` WHERE res_name LIKE '$search%' AND city LIKE '$location%'";
                $resultProduct = mysqli_query($connection, $retrieveProduct);
                $count=mysqli_num_rows($resultProduct);
                if($count>0){
                    echo"<section class=\"food\">";     
                    while($rowProduct  = mysqli_fetch_assoc($resultProduct)){                                
                        echo"<div class=\"food-container\">
                            <div class=\"food-box\">
                                <h3 class=\"name\">". $rowProduct['res_name'] ."</h3> 
                                <img class=\"food-img\" src= \"../../../images/restaurant/{$rowProduct['res_image']}\">
                                <br>
                                <i class=\"fas fa-map-marker-alt\">". $rowProduct['city'] ."</i>
                                <br>
                                <i class=\"fas fa-star-half-alt\">". $rowProduct['res_rate'] ."</i>
                                <button type=\"button\"class=\"food-btn\" onclick=\"location.href='hall_view.php?res_id={$rowProduct['res_id']}';\" style=\"cursor: pointer;\">Visit</button>  
                            </div>
                        </div>";
                    }  
                }else{
                    echo"<section class=\"food\">
                        <div>                                      
                            <i class=\"far fa-file-times\"></i>                                   
                            <h1 class=\"name\">Sorry! No matching result.</h1> 
                        </div>";  
                }                    
                echo"</section>";
            }            
        }else{
            $retrieveProduct = "SELECT * FROM `restaurant`";
            $resultProduct = mysqli_query($connection, $retrieveProduct);
            echo"<section class=\"food\">";           
                    while($rowProduct  = mysqli_fetch_assoc($resultProduct)){                                           
                        echo"<div class=\"food-container\">
                                <div class=\"food-box\">
                                    <h3 class=\"name\">". $rowProduct['res_name'] ."</h3> 
                                    <img class=\"food-img\" src= \"../../../images/restaurant/{$rowProduct['res_image']}\">
                                    <br>
                                    <i class=\"fas fa-map-marker-alt\">". $rowProduct['city'] ."</i>
                                    <br>
                                    <i class=\"fas fa-star-half-alt\">". $rowProduct['res_rate'] ."</i>
                                    <button type=\"button\"class=\"food-btn\" onclick=\"location.href='hall_view.php?res_id={$rowProduct['res_id']}';\" style=\"cursor: pointer;\">Visit</button>  
                                </div>
                            </div>";
                    }       
                    echo"</section>";
        }            
    ?>
    <!--End of Card Section-->

    <!--Include footer.php-->
    <div><?php include "../../../includes/footer.php" ?></div>

    <!--script for slideshow-->
    <script src="../../../js/onClickNav.js"></script>
</body>
</html>

