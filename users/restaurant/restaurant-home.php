<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReserveMe</title>
    <link href="../../images/logo.png" rel="shortcut icon"/> 
    <script src="https://kit.fontawesome.com/20026fc328.js" crossorigin="anonymous"></script>
    <!-- Link the style sheets -->
    <link rel="stylesheet" href="../../CSS/main.css">
	<link rel="stylesheet" href="../../CSS/nav.css">
    <link rel="stylesheet" href="../../CSS/search.css">
    <link rel="stylesheet" href="../../CSS/footer.css">
</head>

<body>
    <!--Start of nav-->
    <div class="topnav" id="myTopnav">
        <a href="../../index.php"><img class = "logo" src="../../images/logo.png"></a>
        <a class="navtab" href="../../index.php">Logout</a>
		<a class="navtab" href="restaurant-profile.php">My Profile</a>
		<a class="navtab" href="../../includes/contact.php">Contact</a>
		<a class="navtab" href="../../includes/about.php">About</a>
		<!--<a href="javascript:void(0);" class="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a> -->     
    </div>
    <!--End of nav-->

    <?php   
    
include('../../includes/connection.php');
include('../../includes/session.php');
    checkSession();  //create sessions
    
       ?>
    <!--Start of Header-->
    <header class="header">
        <div class="search">
        <img class = "image" src="../../images/chef.jpg" width="115" height="115">
        <br>
        <h1 style= "color:white;"><c><b>Restaurant Home<b><c></h1>
        <br><br><br>
            <form>
                <div class="form-box">
                    <input type="text" class="search-feild restaurant" placeholder="Search for Restaurant other restaurants...">
                    <select name="location" class="search-feild location">
                        <option value="colombo">Colombo</option>
                        <option value="kandy">Kandy</option>
                        <option value="gampaha">Gampaha</option>
                    </select>
                    
                    <a href="#" class="search-button pulsate">Search<i class="fas fa-search"></i></a>
                </div>
                <br><br>

                <div class="form-box"><c>
                    <a href="add-preordermenu.php" class="search-button pulsate">Pre - Order Menu</a>
                    <a href="add-menu.php" class="search-button pulsate">Update the Menu</a>
                    <a href="../employee/employee-add.php" class="search-button pulsate">Manage Employee</a>
                    <a href="#" class="search-button pulsate">Reception Hall</a>
                </c></div>
            </form>            
        </div>		
    </header>
    <!--End of Header-->

            </form>
        </div>

        <!--Include footer.php-->
 <div><?php include "../../includes/footer.php" ?></div>
    </body>
</html>
    
