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
      <!-- <a href="employee-home.php" >Employee Home</a> -->
      <a href="venues.php">Reservation Status</a>     
      <a href="menu.php">Set Menu</a>
      <a href="queries.php">Queries</a>
      <a href="table-reservation.php" class="active">Manage Reservation</a>
    </div>
    <!-- End of sidebar -->

<div class="content">
   
    <h1> Hall <span style="color:orange"> Reserved </span> </h1>
    
    <div style="float:right">
        <button type="button" class="hero-button" onclick="window.location.href='menu-reservation.php'">Pre Orders</button>    
        <button type="button" class="hero-button" onclick="window.location.href='table-reservation.php'">Table Reservation</button>
        <button type="button" class="hero-button active" onclick="window.location.href='#'">Hall Reservation</button>
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
                <th>Session</th>
                <th>Participants(Avg)</th>
                <th>Event Type</th>
            </tr>
            <tr><td colspan="9"><hr></td></tr>

            <tr><td>01.</td>
                <td >Chanaka</td>
                <td>chanaka@gmail.com</td>
                <td>2020-12-03 05:30</td>
                <td>+94775623845</td>
                <td>Night</td>
                <td>200</td>
                <td>Office party</td>
                
            </tr>
            <tr><td colspan="9"><hr></td></tr>

            <tr><td>02.</td>
                <td >Aamir</td>
                <td>aamirali@gmail.com</td>
                <td>2020-11-02 08:25</td>
                <td>+94768921288</td>
                <td>Day</td>
                <td>500</td>
                <td>Reception</td>
                
            </tr>
            <tr><td colspan="9"><hr></td></tr>

            <tr><td>03.</td>
                <td >Nuwan</td>
                <td>nuwan@gamail.com</td>
                <td>2020-11-06 12:15</td>
                <td>+9475452356</td>
                <td>Night</td>
                <td>700</td>
                <td>Wedding</td>
                
            </tr>
            <tr><td colspan="9"><hr></td></tr>  
        </table>


    </div>
    </div>
</div>
<div class="footer"> <?php include('../../includes/footer.php'); ?> </div>

</body>
</html>