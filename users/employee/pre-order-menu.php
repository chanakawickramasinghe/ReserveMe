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
        <a  href="employee-profile.php"><img class="profile-icon" src="../../images/form_icons/user.png" alt=""></a>
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

    
    <div style="padding-left:10vw;padding-right:10vw">
    <br>
    <h1>Availability on <span style="color:orange"> Pre-Order Menu </span> </h1>
    <br>
    
    <div class="contentbox">
    <table  width="100%">
        <tr>
            <th>Menu</th>
            <th>Price</th>
            <th>Availability</th>
        </tr>

        <tr>
            <td >Fried Rice</td>
            <td>Rs. 450.00</td>
            <td><label class="switch">
                <input type="checkbox" checked>
                <span class="slider round"></span>
                </label>
            </td>
        </tr>
        <tr><td colspan="3"><hr></td></tr>
       
        <tr>
            <td >Kottu</td>
            <td>Rs. 550.00</td>
            <td><label class="switch">
                <input type="checkbox" checked>
                <span class="slider round"></span>
                </label>
            </td>
        </tr>
        <tr><td colspan="3"><hr></td></tr>
       
        <tr>
            <td >Chicken curry</td>
            <td>Rs. 650.00</td>
            <td><label class="switch">
                <input type="checkbox" checked>
                <span class="slider round"></span>
                </label>
            </td>
        </tr>
        <tr><td colspan="3"><hr></td></tr>
       
        <tr>
            <td >Fish curry</td>
            <td>Rs. 350.00</td>
            <td><label class="switch">
                <input type="checkbox" checked>
                <span class="slider round"></span>
                </label>
            </td>
        </tr>
        <tr><td colspan="3"><hr></td></tr>
      

    </table>
    </div>
    </div>
    
    <input type="button" name="submit" value="Save & Update" class="hero-button" style="float:right;margin-right:15vw" >

</div>   

</body>
</html>