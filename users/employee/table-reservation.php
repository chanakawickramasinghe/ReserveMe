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

    <?php include('navigations.php'); ?>

    <!-- Start of sidbar -->
    <div class="sidebar"> 
      <a href="employee-home.php" >Employee Home</a>
      <a href="venues.php">Venues</a>     
      <a href="menu.php">Set Menu</a>
      <a href="queries.php">Queries</a>
      <a href="table-reservation.php" class="active">Manage Reservation</a>
    </div>
    <!-- End of sidebar -->

    <div class="content">

    <h1>Table <span style="color:orange"> Reservations </span> </h1>
    
    <div style="float:right">
        <button type="button" class="hero-button" onclick="window.location.href='menu-reservation.php'">Pre Orders</button>    
        <button type="button" class="hero-button active" onclick="window.location.href='#'">Table Reservation</button>
        <button type="button" class="hero-button" onclick="window.location.href='hall-reservation.php'">Hall Reservation</button>
    </div>
    <br><br>

    <div style="padding:10px">
    <div class="contentbox">
    <table width="100%">
        <tr>
            <th width="1vw">Reservation id.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Date & Time</th>
            <th>Mobile No</th>
            <th>Meal</th>
            <th>Members</th>
            <th>Accept</th>
            <!-- <th>Reply</th> -->
        </tr>
        <tr><td colspan="9"><hr></td></tr>

        <tr><td>01.</td>
            <td >Aamir</td>
            <td>aamirali@gmail.com</td>
            <td>2020-11-02 08:25</td>
            <td>+94768921288</td>
            <td>Breakfast</td>
            <td>2</td>
            <td><input type="button" value="Ok" class="hero-button" name="submit" href=""></td>
            <!-- <td><a href="#"><img src="../../images/accept.png" alt="Accept" style="width:25px;height:25px"></a></td> -->
            <!-- <td><a href="#"><img src="../../images/message.png" alt="Message" style="width:25px;height:25px"></a></td> -->
           
        </tr>
        <tr><td colspan="9"><hr></td></tr>

        <tr><td>02.</td>
            <td >Nuwan</td>
            <td>nuwan@gamail.com</td>
            <td>2020-11-06 12:15</td>
            <td>+9475452356</td>
            <td>Lunch</td>
            <td>5</td>
            <td><input type="button" value="Ok" class="hero-button" name="submit" href=""></td>
            <!-- <td><a href="#"><img src="../../images/accept.png" alt="Accept" style="width:25px;height:25px"></a></td> -->
            <!-- <td><a href="#"><img src="../../images/message.png" alt="Message" style="width:25px;height:25px"></a></td> -->

        </tr>
        <tr><td colspan="9"><hr></td></tr>

        <tr><td>03.</td>
            <td >Chanaka</td>
            <td>chanaka@gmail.com</td>
            <td>2020-12-03 05:30</td>
            <td>+94775623845</td>
            <td>Dinner</td>
            <td>3</td>
            <td><input type="button" value="Ok" class="hero-button" name="submit" href=""></td>
            <!-- <td><input type="button" value="Ok" class="hero-button" style="background-color:lightgreen;color:black" name="submit" href=""></td> -->
            <!-- <td><a href="#"><img src="../../images/accept.png" alt="Accept" style="width:25px;height:25px"></a></td> -->
            <!-- <td><a href="#"><img src="../../images/message.png" alt="Message" style="width:25px;height:25px"></a></td> -->
            
        </tr>
        <tr><td colspan="9"><hr></td></tr>

        <tr><td>04.</td>
            <td >Chathuranga</td>
            <td>chathuranga@gmail.com</td>
            <td>2020-12-14 10:20</td>
            <td>759848256</td>
            <td>Breakfast</td>
            <td>4</td>
            <td><input type="button" value="Ok" class="hero-button" name="submit" href=""></td>
            <!-- <td><a href="#"><img src="../../images/accept.png" alt="Accept" style="width:25px;height:25px"></a></td> -->
            <!-- <td><a href="#"><img src="../../images/message.png" alt="Message" style="width:25px;height:25px"></a></td> -->
        </tr>
        <tr><td colspan="9"><hr></td></tr>
      

    </table>
    </div>
    </div>

</div>

<div class="footer"> <?php include('../../includes/footer.php'); ?> </div>

</body>
</html>