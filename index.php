<html>
    <head> 
        <title>ReserveMe</title>
        <link rel="stylesheet" href="CSS/nav.css">
        <link rel="stylesheet" href="CSS/search.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <nav>
            <label class="logo"><a href="www.fb.com"><img src="images/test.jpg" height=800%></a></label>
            <ul>
                <li><a>Table Reservations</a></li>
                <li><a>Hall Reservations</a></li>
                <li><a href="includes/login.php">Login</a></li>
                <li><a href="users/user-type.php">Register</a></li>   
            </ul>
        </nav>
        <br/>
        <div class="header">
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
                    <button name="search" class="search-btn" type="button">Search</button>
                </div>
            </form>
        </div>
    </body>
</html>