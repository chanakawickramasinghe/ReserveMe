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
                    <button class="search-button" type="submit" name="submit">Search<i class="fas fa-search"></i></button>
                </div>
            </form>            
        </div>	
        <br><br><br><br>
        <!--Start of About-->
    <section id="about">
        <div class="about-center">
            <!--Start of the article1-->
            <article class="about">
                <div class="about-icon">
					<i class="fas fa-mug-hot"></i>
					<h2 class="about-subtitle"><a href="category.php">Sri Lankan</a></h2>
                </div>              
            </article>
            <!--End of the article1-->
            <!--Start of the article2-->
            <article class="about">
                <div class="about-icon">
					<i class="fas fa-hamburger"></i>
					<h2 class="about-subtitle"><a href="category.php">Street Food</a></h2>
                </div>
            </article>
            <!--End of the article2-->
            <!--Start of the article3-->
            <article class="about">
                <div class="about-icon">
					<i class="fas fa-mortar-pestle"></i>
					<h2 class="about-subtitle"><a href="category.php">Chinese</a></h2>
                </div>
            </article>
            <!--End of the article3-->
            <!--Start of the article4-->
            <article class="about">
                <div class="about-icon">
					<i class="fas fa-pizza-slice"></i>
					<h2 class="about-subtitle"><a href="category.php">Italian</a></h2>
                </div>
            </article>
            <!--End of the article4-->
            <!--Start of the article5-->
            <article class="about">
                <div class="about-icon">
					<i class="fas fa-fish"></i>
					<h2 class="about-subtitle"><a href="category.php">Mongolian</a></h2>
                </div>
            </article>
            <!--End of the article5-->
            <!--Start of the article6-->
            <article class="about">
                <div class="about-icon">
					<i class="fas fa-pepper-hot"></i>
					<h2 class="about-subtitle"><a href="category.php">Arabic</a></h2>
                </div>
            </article>
            <!--End of the article6-->
			<!--Start of the article7-->
            <article class="about">
                <div class="about-icon">
					<i class="fas fa-fish"></i>
					<h2 class="about-subtitle"><a href="category.php">Thai</a></h2>
                </div>
            </article>
            <!--End of the article7-->
        </div>
    </section>
	<!--End of About-->
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
                                    <img class=\"food-img\" src= \"../../../images/{$rowProduct['res_id']}\">
                                    <br>
                                    <i class=\"fas fa-map-marker-alt\">". $rowProduct['city'] ."</i>
                                    <br>
                                    <i class=\"fas fa-star-half-alt\">". $rowProduct['res_rate'] ."</i>
                                    <button type=\"button\"class=\"food-btn\" onclick=\"location.href='../res_view/res_view.php?res_id={$rowProduct['res_id']}';\" style=\"cursor: pointer;\">Visit</button>  
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
                                <img class=\"food-img\" src= \"../../../images/{$rowProduct['res_id']}\">
                                <br>
                                <i class=\"fas fa-map-marker-alt\">". $rowProduct['city'] ."</i>
                                <br>
                                <i class=\"fas fa-star-half-alt\">". $rowProduct['res_rate'] ."</i>
                                <button type=\"button\"class=\"food-btn\" onclick=\"location.href='../res_view/res_view.php?res_id={$rowProduct['res_id']}';\" style=\"cursor: pointer;\">Visit</button>  
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
                                    <img class=\"food-img\" src= \"../../../images/{$rowProduct['res_id']}\">
                                    <br>
                                    <i class=\"fas fa-map-marker-alt\">". $rowProduct['city'] ."</i>
                                    <br>
                                    <i class=\"fas fa-star-half-alt\">". $rowProduct['res_rate'] ."</i>
                                    <button type=\"button\"class=\"food-btn\" onclick=\"location.href='../res_view/res_view.php?res_id={$rowProduct['res_id']}';\" style=\"cursor: pointer;\">Visit</button>  
                                </div>
                            </div>";
                    }       
                    echo"</section>";
        }            
    ?>
    <!--End of Card Section-->

    <!--Include footer.php-->
    <div><?php include "../../../includes/footer.php" ?></div>
    
    <!--script for onClickNav() for the navigation menu-->
    <script src="../../../js/onClickNav.js"></script>
</body>
</html>
