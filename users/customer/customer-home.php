<?php include('../../includes/session.php') ?>
<<<<<<< HEAD
<?php include('../../includes/connection.php'); ?>
=======
<?php include('../../includes/connection.php') ?>
>>>>>>> e00bcb58875dc08019f82e011f8e2a2b9d0eb4d8

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReserveMe</title>
    <link rel="stylesheet" href="../../CSS/main.css">
    <script src="https://kit.fontawesome.com/20026fc328.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../../CSS/nav.css">
    <link rel="stylesheet" href="../../CSS/search.css">
    <link rel="stylesheet" href="../../CSS/footer.css">
    <link href="../../images/logo.png" rel="shortcut icon"/> 
</head>
    <body>
    <!--Start of nav-->
    <div class="topnav" id="myTopnav">
        <img class = "logo" src="../../images/logo.png">
        <a href="#logout">Logout</a>
        <a href="customer-profile.php">My Profile</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
        <a href="javascript:void(0);" class="icon" onclick="onClickNav()">
            <i class="fa fa-bars"></i>
        </a>       
    </div>
    <!--End of nav-->
<<<<<<< HEAD
    <!--Start of Header-->
    <header class="header">
=======
    
    
        <!--Start of Header-->
        <header class="header">
>>>>>>> e00bcb58875dc08019f82e011f8e2a2b9d0eb4d8
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
<<<<<<< HEAD
     <!--Start of Card Section-->
=======

    <!--Start of Card Section-->
>>>>>>> e00bcb58875dc08019f82e011f8e2a2b9d0eb4d8
    <?php 
        if(isset($_POST["submit"])){
            $location = $_POST["location"];
            $search = $_POST["search"];
    
            if($search=="" && $location=="Location"){
                $retrieveProduct = "SELECT * FROM `restaurant` WHERE city LIKE '$location%' "; 
                $resultProduct = mysqli_query($connection, $retrieveProduct); 
                echo"<section id=\"food\">
                    <div>
                        <h2 class=\"title-text\"> Food Fusion</h2>
                    </div>";      
                        while($rowProduct  = mysqli_fetch_assoc($resultProduct)){                        
                            echo"<div class=\"food-container\">       
                                    <article class=\"food-card\">
                                        <img class=\"food-img\" src= \"../../images/{$rowProduct['res_id']}.jpg\">
                                        <div class=\"img-text\">
                                            <h1 class=\"name\">". $rowProduct['res_name'] ."</h1> 
                                        </div>
                                        <div class=\"img-footer\">
                                            <div class=\"footer-icon\">
                                                <i class=\"fas fa-star-half-alt\">". $rowProduct['res_rate'] ."</i>
                                                <br>
                                                <i class=\"fas fa-map-marker-alt\">". $rowProduct['city'] ."</i>
                                            </div>
                                            <div class=\"footer-btn\">
                                                <button type=\"button\"class=\"food-btn\" onclick=\"location.href='../../res_view.php?res_id={$rowProduct['res_id']}';\" style=\"cursor: pointer;\">Visit</button>  
                                            </div>
                                        </div>
                                    </article>           
                                </div>";
                        }       
                    echo"</section>";
            }           
            else{
                $retrieveProduct = "SELECT * FROM `restaurant` WHERE res_name LIKE '$search%' AND city LIKE '$location%'";
                $resultProduct = mysqli_query($connection, $retrieveProduct);
                $count=mysqli_num_rows($resultProduct);
                if($count>0){
                    echo"<section id=\"food\">
                        <div>
                            <h2 class=\"title-text\"> Food Fusion</h2>
                        </div>";     
                    while($rowProduct  = mysqli_fetch_assoc($resultProduct)){                                
                        echo"<div class=\"food-container\">       
                                <article class=\"food-card\">
                                    <img class=\"food-img\" src= \"../../images/{$rowProduct['res_id']}.jpg\">
                                    <div class=\"img-text\">
                                        <h1 class=\"name\">". $rowProduct['res_name'] ."</h1> 
                                    </div>
                                    <div class=\"img-footer\">
                                        <div class=\"footer-icon\">
                                            <i class=\"fas fa-star-half-alt\">". $rowProduct['res_rate'] ."</i>
                                            <br>
                                            <i class=\"fas fa-map-marker-alt\">". $rowProduct['city'] ."</i>
                                        </div>
                                        <div class=\"footer-btn\">
                                            <button type=\"button\"class=\"food-btn\" onclick=\"location.href='../../res_view.php?res_id={$rowProduct['res_id']}';\" style=\"cursor: pointer;\">Visit</button>  
                                        </div>
                                    </div>
                                </article>           
                            </div>";
                    }  
                }else{
                    echo"<section id=\"food\">
                        <div>
                            <h2 class=\"title-text\"> Food Fusion</h2>
                        </div>
                        <div>                                      
                            <i class=\"far fa-file-times\"></i>                                   
                            <h1 class=\"name\">Sorry! No matching results.</h1> 
                        </div>";  
                }                    
                echo"</section>";
            }            
        }else{
            $retrieveProduct = "SELECT * FROM `restaurant`";
            $resultProduct = mysqli_query($connection, $retrieveProduct);
            echo"<section id=\"food\">
                    <div class=\"row-25 product-box\">
                        <div>
                            <h2 class=\"title-text\"> Food Fusion</h2>
                        </div>";           
                    while($rowProduct  = mysqli_fetch_assoc($resultProduct)){                                           
                        echo"<div class=\"food-container\">       
                                <article class=\"food-card\">
<<<<<<< HEAD
                                    <img class=\"food-img\" src= \"../../images/{$rowProduct['res_id']}.jpg\">
=======
                                    <img class=\"food-img\" src= \"images/{$rowProduct['res_id']}.jpg\">
>>>>>>> e00bcb58875dc08019f82e011f8e2a2b9d0eb4d8
                                    <div class=\"img-text\">
                                        <h1 class=\"name\">". $rowProduct['res_name'] ."</h1> 
                                    </div>
                                    <div class=\"img-footer\">
                                        <div class=\"footer-icon\">
                                            <i class=\"fas fa-star-half-alt\">". $rowProduct['res_rate'] ."</i>
                                            <br>
                                            <i class=\"fas fa-map-marker-alt\">". $rowProduct['city'] ."</i>
                                        </div>
                                        <div class=\"footer-btn\">
<<<<<<< HEAD
                                            <button type=\"button\"class=\"food-btn\" onclick=\"location.href='../../res_view.php?res_id={$rowProduct['res_id']}';\" style=\"cursor: pointer;\">Visit</button>  
=======
                                            <button type=\"button\"class=\"food-btn\" onclick=\"location.href='res_view.php?res_id={$rowProduct['res_id']}';\" style=\"cursor: pointer;\">Visit</button>  
>>>>>>> e00bcb58875dc08019f82e011f8e2a2b9d0eb4d8
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
<<<<<<< HEAD

    <div><?php include "../../includes/footer.php" ?></div>
=======
            </form>
        </div>
  
>>>>>>> e00bcb58875dc08019f82e011f8e2a2b9d0eb4d8
     <!--Include footer.php-->
   <div><p>My reservations</p></div>
    
    <!--script for onClickNav() for the navigation menu-->
    <script src="../../js/onClickNav.js"></script>
    </body>
</html>