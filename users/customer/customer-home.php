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
</head>
    <body>
        <!--Start of nav-->
        <div class="topnav" id="myTopnav">
        <a href="#logout">Logout</a>
        <a href="customer-profile.php">My Profile</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
        <img class = "logo" src="../../images/test.jpg">
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

            </form>
        </div>
    </body>
</html>