<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReserveMe</title>
    <!--web-icon-->
    <link href="images/logo.png" rel="shortcut icon"/>    
    <!--FontAwesome-------->
    <script src="https://kit.fontawesome.com/20026fc328.js" crossorigin="anonymous"></script>
    <!--stylesheet-------------------->
	<link rel="stylesheet" type="text/css" href="CSS/nav.css">
    <link rel="stylesheet" href="CSS/search.css">
    <link rel="stylesheet" href="CSS/footer.css">
    <link rel="stylesheet" href="CSS/main.css">
</head>
<body>
    <!--Start of nav-->
    <div class="topnav" id="myTopnav">
        <img class = "logo" src="images/logo.png">
        <a href="users/user-type.php">Register</a>
        <a href="includes/login.php">Login</a>
        <a href="includes/contact.php">Contact</a>
        <a href="includes/about.php">About</a>
        <a href="javascript:void(0);" class="icon" onclick="onClickNav()">
            <i class="fa fa-bars"></i>
        </a>       
    </div>
    <!--End of nav-->
    
    <!--Start of Header-->
    <header class="header">
        <div class="search">
            <h1 class="title">ReserveMe</h1>
            <h3 class="title">Reservation at your fingertip</h3>
            <div>
            <button class="search-button pulsate" type="submit" name="submit"><a href="search_result.php">Table Reservation <i class="fas fa-table"></i></a></button>
            <button class="search-button pulsate" type="submit" name=""><a href="hall_result.php">Hall Reservation <i class="fas fa-building"></i></a></button>
            </div>
            
        </div>	
        </div>
	    <!--Start of side social-------->
		<div class="social">
	        <a href="#"><i class="fab fa-facebook-f"></i></a>
	        <a href="#"><i class="fab fa-twitter"></i></a>
	        <a href="#"><i class="fab fa-instagram"></i></a>
	        <a href="#"><i class="fab fa-youtube"></i></a>	
        </div>	
        <!--End of side social-------->     
    </header>
    <!--End of Header-->

    <!--Start of About-->
    <section id="about">
        <div class="about-center">
            <!--Start of the article1-->
            <article class="about">
                <div class="about-icon">
                    <i class="fas fa-mug-hot"></i>
                </div>
                <div class="about-text">
                    <a class="about-subtitle" href="category/arabic.php?Catogory=Arabic">Drinks</a>
                    <p class="about-info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis corporis </p>
                </div>
            </article>
            <!--End of the article1-->
            <!--Start of the article2-->
            <article class="about">
                <div class="about-icon">
                    <i class="fas fa-utensils"></i>
                </div>
                <div class="about-text">
                    <a class="about-subtitle" href="category/arabic.php">Healthy Food</a>
                    <p class="about-info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis corporis </p>
                </div>
            </article>
            <!--End of the article2-->
            <!--Start of the article3-->
            <article class="about">
                <div class="about-icon">
                    <i class="fas fa-mortar-pestle"></i>
                </div>
                <div class="about-text">
                    <a class="about-subtitle" href="category/arabic.php">Organic Food</a>
                    <p class="about-info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis corporis </p>
                </div>
            </article>
            <!--End of the article3-->
            <!--Start of the article4-->
            <article class="about">
                <div class="about-icon">
                    <i class="fas fa-ice-cream"></i>
                </div>
                <div class="about-text">
                    <a class="about-subtitle" href="category/arabic.php">Desserts</a>
                    <p class="about-info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis corporis </p>
                </div>
            </article>
            <!--End of the article4-->
            <!--Start of the article5-->
            <article class="about">
                <div class="about-icon">
                    <i class="fas fa-fish"></i>
                </div>
                <div class="about-text">
                    <a class="about-subtitle" href="category/arabic.php">Sea Food</a>
                    <p class="about-info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis corporis </p>
                </div>
            </article>
            <!--End of the article5-->
            <!--Start of the article6-->
            <article class="about">
                <div class="about-icon">
                    <i class="fas fa-pepper-hot"></i>
                </div>
                <div class="about-text">
                    <a class="about-subtitle" href="category/arabic.php">Hot & Spicy</a>
                    <p class="about-info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis corporis </p>
                </div>
            </article>
            <!--End of the article6-->
        </div>
    </section>
    <!--End of About-->

    <!--Start of Number Section-->
    <section id="numbers">
        <!--Start of the article1-->
        <article class="number">
            <i class="fas fa-cloud-meatball"></i>
            <p>50</p>
            <h3>Meat Dishes</h3>
        </article>
        <!--End of the article1-->
        <!--Start of the article2-->
        <article class="number">
            <i class="fas fa-cheese"></i>
            <p>35</p>
            <h3>Cheese Dishes</h3>
        </article>
        <!--End of the article2-->
        <!--Start of the article3-->
        <article class="number">
            <i class="fas fa-pizza-slice"></i>
            <p>25</p>
            <h3>Pizzas</h3>
        </article>
        <!--End of the article3-->
        <!--Start of the article4-->
        <article class="number">
            <i class="fas fa-ice-cream"></i>
            <p>50</p>
            <h3>Desserts</h3>
        </article>
        <!--End of the article4-->
    </section>
    <!--End of Number Section-->

    

    <!--Include footer.php-->
    <div><?php include "includes/footer.php" ?></div>
    
    <!--script for onClickNav() for the navigation menu-->
    <script src="./js/onClickNav.js"></script>
</body>
</html>