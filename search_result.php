<?php include('includes/connection.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReserveMe</title>
    <link href="images/logo.png" rel="shortcut icon"/>
    <link rel="stylesheet" href="CSS/main.css">
    <script src="https://kit.fontawesome.com/20026fc328.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="CSS/nav.css">
    <link rel="stylesheet" href="CSS/search.css">
    <link rel="stylesheet" href="CSS/footer.css">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <!--Start of nav-->
    <div class="topnav" id="myTopnav">
    <img class = "logo" src="images/logo.png">
        <a href="users/user-type.php">Register</a>
        <a href="includes/login.php">Login</a>
        <a href="#contact">Contact</a>
        <a href="#aboutus">About</a>
        <a href="javascript:void(0);" class="icon" onclick="onClickNav()">
            <i class="fa fa-bars"></i>
        </a>       
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
                $retrieveProduct = "SELECT * FROM `restaurant` WHERE res_location LIKE '$location%' "; //Selecting all data from Table
                $resultProduct = mysqli_query($connection, $retrieveProduct); //Passing SQL
                echo"<section id=\"food\">
                    <div>
                        <h2 class=\"title-text\"> Food Fusion</h2>
                    </div>";      
                        while($rowProduct  = mysqli_fetch_assoc($resultProduct)){
                            
                            echo"<div class=\"food-container\">       
                                    <article class=\"food-card\">
                                        <img class=\"food-img\" src= \"images/{$rowProduct['res_id']}.jpg\">
                                        <div class=\"img-text\">
                                            <h1 class=\"name\">". $rowProduct['res_name'] ."</h1> 
                                        </div>
                                        <div class=\"img-footer\">
                                            <div class=\"footer-icon\">
                                                <i class=\"fas fa-star-half-alt\">". $rowProduct['res_rate'] ."</i>
                                                <br>
                                                <i class=\"fas fa-map-marker-alt\">". $rowProduct['res_location'] ."</i>
                                            </div>
                                            <div class=\"footer-btn\">
                                                <button type=\"button\"class=\"food-btn\" onclick=\"location.href='restaurantpage.php?id={$rowProduct['res_id']}';\" style=\"cursor: pointer;\">Visit</button>  
                                            </div>
                                        </div>
                                    </article>           
                                </div>";
                        }       
                    echo"</section>";
            }           
            else{
                $retrieveProduct = "SELECT * FROM `restaurant` WHERE res_name LIKE '$search%' AND res_location LIKE '$location%'";
                $resultProduct = mysqli_query($connection, $retrieveProduct);
                echo"<section id=\"food\">
                    <div>
                        <h2 class=\"title-text\"> Food Fusion</h2>
                    </div>";     
                    while($rowProduct  = mysqli_fetch_assoc($resultProduct)){ 
                                      
                        echo"<div class=\"food-container\">       
                                <article class=\"food-card\">
                                    <img class=\"food-img\" src= \"images/{$rowProduct['res_id']}.jpg\">
                                    <div class=\"img-text\">
                                        <h1 class=\"name\">". $rowProduct['res_name'] ."</h1> 
                                    </div>
                                    <div class=\"img-footer\">
                                        <div class=\"footer-icon\">
                                            <i class=\"fas fa-star-half-alt\">". $rowProduct['res_rate'] ."</i>
                                            <br>
                                            <i class=\"fas fa-map-marker-alt\">". $rowProduct['res_location'] ."</i>
                                        </div>
                                        <div class=\"footer-btn\">
                                            <button type=\"button\"class=\"food-btn\" onclick=\"location.href='restaurantpage.php?id={$rowProduct['res_id']}';\" style=\"cursor: pointer;\">Visit</button>  
                                        </div>
                                    </div>
                                </article>           

                            </div>";
                    }       
                echo"</section>";
            }
            
        }else{
            $retrieveProduct = "SELECT * FROM `restaurant`"; //Selecting all data from Table
            $resultProduct = mysqli_query($connection, $retrieveProduct); //Passing SQL
            echo"<section id=\"food\">
            <div class=\"row-25 product-box\">
            <div>
                <h2 class=\"title-text\"> Food Fusion</h2>
            </div>";           
            while($rowProduct  = mysqli_fetch_assoc($resultProduct)){                                           
                echo"<div class=\"food-container\">       
                <article class=\"food-card\">
                    <img class=\"food-img\" src= \"images/{$rowProduct['res_id']}.jpg\">
                    <div class=\"img-text\">
                        <h1 class=\"name\">". $rowProduct['res_name'] ."</h1> 
                    </div>
                    <div class=\"img-footer\">
                        <div class=\"footer-icon\">
                            <i class=\"fas fa-star-half-alt\">". $rowProduct['res_rate'] ."</i>
                            <br>
                            <i class=\"fas fa-map-marker-alt\">". $rowProduct['res_location'] ."</i>
                        </div>
                        <div class=\"footer-btn\">
                            <button type=\"button\"class=\"food-btn\" onclick=\"location.href='restaurantpage.php?id={$rowProduct['res_id']}';\" style=\"cursor: pointer;\">Visit</button>  
                        </div>
                    </div>
                </article>           

            </div>
            </div>";
              }       
            echo"</section>";
            }
             
    ?>
    <!--End of Card Section-->

    <!--Include footer.php-->
    <div><?php include "includes/footer.php" ?></div>
    
    <!--script for onClickNav() for the navigation menu-->
    <script src="./js/onClickNav.js"></script>

    
</body>
</html>