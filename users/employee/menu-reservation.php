<?php include('../../includes/connection.php') ?>
<?php include('../../includes/session.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pre-Order Menu</title>
    <link href="../../images/logo.png" rel="shortcut icon"/> 
        <!-- Link the style sheets -->
        <link rel="stylesheet" href="../../CSS/employee.css">
        <link rel="stylesheet" href="../../CSS/main.css">
        <link rel="stylesheet" href="../../CSS/nav.css">   
        <link rel="stylesheet" href="../../CSS/footer.css">


</head>

<body>

    <!--Start of nav-->
    <div class="topnav">
        <a href="../../index.php"><img class = "logo" src="../../images/logo.png"></a>
        <a  href="employee-profile.php"><img style="weight:50px;height:50px;float:right" src="../../images/form_icons/user.png" alt=""></a>
        <a class="navtab" href="../../index.php">Logout</a>
		<a class="navtab" href="../../includes/contact.php">Contact</a>
		<a class="navtab" href="../../includes/about.php">About</a>
        
        </div>
    <!--End of nav-->

    <!-- Start of sidbar -->
    <div class="sidebar"> 
      <span><a href="employee-home.php" >Employee Home</a></span>      
      <a href="pre-order-menu.php">Pre - Order Menu</a>
      <a href="queries.php">Queries</a>
      <a href="table-reservation.php">Manage Reservation</a>
      <a href="reception-hall.php">Reception Hall</a>
    </div>
    <!-- End of nav bar -->

<div class="content">

    <h1>Pre Orders-<span style="color:orange"> Menu </span> </h1>
    
    <div class="promo-btn-bar">
        <button type="button" class="hero-button" onclick="window.location.href='table-reservation.php'">Table Reservation</button>
    </div>
    <div class="promo-btn-bar">
        <button type="button" class="hero-button" onclick="window.location.href='hall-reservation.php'">Hall Reservation</button>
    </div>
    <br><br>

    <div style="padding:5vw;padding-top:1vw">
    <div class="contentbox">
    <table width="100%">
        <tr>
            <th width=".8vw">Reservation id.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Date & Time</th>
            <th>Mobile No</th>
            <th>Meal</th>
            <th>Menus</th>
            <th>Accept</th>
            <th>Reject</th>
        </tr>
        <tr><td colspan="9"><hr></td></tr>

        <tr><td>01.</td>
            <td >Chanaka</td>
            <td>chanaka@gmail.com</td>
            <td>2020-12-03 05:30</td>
            <td>+94775623845</td>
            <td>Breakfast</td>
            <td>Kottu  -   2 <br>
                Fried rice  -  1 <br>
                Chicken Devel  -  1
            </td>
            <td><input type="button" value="Ok" class="hero-button" name="submit" href=""></td>
            <td><input type="button" value="Reject" class="hero-button" name="submit" href=""></td>
        </tr>
        <tr><td colspan="9"><hr></td></tr>

        <tr><td>02.</td>
            <td >Aamir</td>
            <td>aamirali@gmail.com</td>
            <td>2020-11-02 08:25</td>
            <td>+94768921288</td>
            <td>Lunch</td>
            <td>Chicken -   2 <br>
                Noodles  -  1 <br>
                Beef Soup  -  1
            </td>
            <td><input type="button" value="Ok" class="hero-button" name="submit" href=""></td>
            <td><input type="button" value="Reject" class="hero-button" name="submit" href=""></td>
        </tr>
        <tr><td colspan="9"><hr></td></tr>

        <tr><td>03.</td>
            <td >Nuwan</td>
            <td>nuwan@gamail.com</td>
            <td>2020-11-06 12:15</td>
            <td>+9475452356</td>
            <td>Dinner</td>
            <td>Chiken burger  -   2 <br>
                Naugets -  1 <br>
                Nan Rotty  -  1
            </td>
            <td><input type="button" value="Ok" class="hero-button" name="submit" href=""></td>
            <td><input type="button" value="Reject" class="hero-button" name="submit" href=""></td>
        </tr>
        <tr><td colspan="9"><hr></td></tr>
      

    </table>

    </div>
    </div>
</div>
   
</body>
</html>