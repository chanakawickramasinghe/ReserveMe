<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReserveMe</title>
    <link rel="stylesheet" href="CSS/main.css">
    <script src="https://kit.fontawesome.com/20026fc328.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="CSS/nav.css">
    <link rel="stylesheet" href="CSS/search.css">
    <link rel="stylesheet" href="CSS/footer.css">
</head>
<body>
    <!--Start of nav-->
    <div class="topnav" id="myTopnav">
        <a href="#register">Register</a>
        <a href="#logon">Login</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
        <img class = "logo" src="images/test.jpg">
    </div>
    <!--End of nav-->
    
    <!--Start of Header-->
    <header class="header">
        <div class="search">
            <form>
                <div class="form-box">
                    <input type="text" class="search-feild restaurant" placeholder="Search for Restaurant...">
                    <select name="location" class="search-feild location">
                        <option value="colombo">Colombo</option>
                        <option value="kandy">Kandy</option>
                        <option value="gampaha">Gampaha</option>
                    </select>
                    <select name="search-type" class="search-feild search-type">
                        <option value="restaurant">Restaurant</option>
                        <option value="dish">Dish</option>
                    </select>
                    <a href="#" class="search-button pulsate">Search<i class="fas fa-search"></i></a>
                </div>
            </form>            
        </div>		
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
                    <h2 class="about-subtitle">Drinks</h2>
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
                    <h2 class="about-subtitle">Healthy Food</h2>
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
                    <h2 class="about-subtitle">Organic Food</h2>
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
                    <h2 class="about-subtitle">Desserts</h2>
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
                    <h2 class="about-subtitle">Sea Food</h2>
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
                    <h2 class="about-subtitle">Hot & Spicy</h2>
                    <p class="about-info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis corporis </p>
                </div>
            </article>
            <!--End of the article6-->
        </div>
    </section>
    <!--End of About-->

    <!--Start of Social icon-->
    <section id="social-icons">
        <a href="#"><i class="fab fa-facebook facebook"></i></a>
        <a href="#"><i class="fab fa-twitter twitter"></i></a>
        <a href="#"><i class="fab fa-instagram instagram"></i></a>
        <a href="#"><i class="fab fa-google-plus plus"></i></a>
    </section>
    <!--End of Social icon-->

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

    <!--Start of Card Sectio-->
    <section id="food">
        <div>
            <h2 class="title-text"> Food Fusion</h2>
        </div>
        <!--======Card Start ----============-->
        <div class="food-container">       
            <article class="food-card">
                <img src="images/img2.jpg" class="food-img"alt="">
                <div class="img-text">
                    <h1>Breakfast</h1>
                </div>
                <div class="img-footer">
                    <div class="footer-icon">
                        <i class="fas fa-dollar-sign">25</i>
                    </div>
                    <div class="footer-btn">
                        <button type="button"class="food-btn">Order Now</button>  
                    </div>
                </div>
            </article>
            <article class="food-card">
                <img src="images/img4.jpg" class="food-img"alt="">
                <div class="img-text">
                    <h1>Lunch</h1>
                </div>
                <div class="img-footer">
                    <div class="footer-icon">
                        <i class="fas fa-dollar-sign">35</i>
                    </div>
                    <div class="footer-btn">
                        <button type="button"class="food-btn">Order Now</button>  
                    </div>
                </div>
            </article>
            <article class="food-card">
                <img src="images/img3.jpg" class="food-img"alt="">
                <div class="img-text">
                    <h1>Dinner</h1>
                </div>
                <div class="img-footer">
                    <div class="footer-icon">
                        <i class="fas fa-dollar-sign">45</i>
                    </div>
                    <div class="footer-btn">
                        <button type="button"class="food-btn">Order Now</button>  
                    </div>
                </div>
            </article>
        </div>
        <!--======End of Card =========-->
    </section>
    <!--End of Card Section-->

    <!--Start of Gallery Section-->
    <section id="gallery">
        <div>
            <h2 class="title-text">Main Cuisines</h2>
        </div>
        <div id="gallery-center">
            <article class="gallery-item">
                <a href="images/img3.jpg">
                    <img src="images/img3.jpg" alt="">
                </a>
            </article>
            <article class="gallery-item">
                <a href="images/img4.jpg">
                    <img src="images/img4.jpg" alt="">
                </a>
            </article>
            <article class="gallery-item">
                <a href="images/img3.jpg">
                    <img src="images/img3.jpg" alt="">
                </a>
            </article>
            <article class="gallery-item">
                <a href="images/img4.jpg">
                    <img src="images/img4.jpg" alt="">
                </a>
            </article>
            <article class="gallery-item">
                <a href="images/img2.jpg">
                    <img src="images/img2.jpg" alt="">
                </a>
            </article>
            <article class="gallery-item">
                <a href="images/img1.jpg">
                    <img src="images/img1.jpg">
                </a>
            </article>
            <article class="gallery-item">
                <a href="images/img2.jpg">
                    <img src="images/img2.jpg" alt="">
                </a>
            </article>
            <article class="gallery-item">
                <a href="images/img1.jpg">
                    <img src="images/img1.jpg" alt="">
                </a>
            </article>
        </div>
    </section>
    <!---End of Gallery Section-->

    <!--Include footer.php-->
    <div><?php include "includes/footer.php" ?></div>
    
    <!--script for onClickNav() for the navigation menu-->
    <script src="./js/onClickNav.js"></script>
</body>
</html>