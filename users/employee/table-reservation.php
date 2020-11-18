<?php include('../../includes/connection.php') ?>
<?php include('../../includes/session.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pre-Order Menu</title>
    <link href="../../images/logo.png" rel="shortcut icon"/> 
    <!-- Link the style sheet -->
    <link rel="stylesheet" href="../../CSS/employee.css">
    <link rel="stylesheet" href="../../CSS/main.css">


</head>
<body class="subbody">
    <br>
    <h1>Reservations</h1>
    <!-- <button href="table-reservation.php" target="iframe" class="hero-button">Dine in</button> -->
    <button href="menu-reservation.php" class="hero-button" style="float:right;margin-right:3%">Menu</button>
    <br><br>

    <div style="padding:10px">
    <div class="contentbox">
    <table width="100%">
        <tr>
            <th>Reservation id.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Date & Time</th>
            <th>Mobile No</th>
            <th>Meal</th>
            <th>Members</th>
            <th>Accept</th>
            <th>Reply</th>
        </tr>
        <tr><td colspan="9"><hr></td></tr>

        <tr><td>01.</td>
            <td >Aamir</td>
            <td>aamirali@gmail.com</td>
            <td>2020-11-02 08:25</td>
            <td>0768921288</td>
            <td>Breakfast</td>
            <td>2</td>
            <td><a href="#"><img src="../../images/accept.png" alt="Accept" style="width:25px;height:25px"></a></td>
            <td><a href="#"><img src="../../images/message.png" alt="Message" style="width:25px;height:25px"></a></td>
           
        </tr>
        <tr><td colspan="9"><hr></td></tr>

        <tr><td>02.</td>
            <td >Nuwan</td>
            <td>nuwan@gamail.com</td>
            <td>2020-11-06 12:15</td>
            <td>89452356</td>
            <td>Lunch</td>
            <td>5</td>
            <!-- <td><input type="button" value="K" class="tik-button" name="submit" href=""></td> -->
            <td><a href="#"><img src="../../images/accept.png" alt="Accept" style="width:25px;height:25px"></a></td>
            <td><a href="#"><img src="../../images/message.png" alt="Message" style="width:25px;height:25px"></a></td>

        </tr>
        <tr><td colspan="9"><hr></td></tr>

        <tr><td>03.</td>
            <td >Chanaka</td>
            <td>chanaka@gmail.com</td>
            <td>2020-12-03 05:30</td>
            <td>775623845</td>
            <td>Dinner</td>
            <td>3</td>
            <td><a href="#"><img src="../../images/accept.png" alt="Accept" style="width:25px;height:25px"></a></td>
            <td><a href="#"><img src="../../images/message.png" alt="Message" style="width:25px;height:25px"></a></td>
            
        </tr>
        <tr><td colspan="9"><hr></td></tr>

        <tr><td>04.</td>
            <td >Chathuranga</td>
            <td>chathuranga@gmail.com</td>
            <td>2020-12-14 10:20</td>
            <td>759848256</td>
            <td>Breakfast</td>
            <td>4</td>
            <td><a href="#"><img src="../../images/accept.png" alt="Accept" style="width:25px;height:25px"></a></td>
            <td><a href="#"><img src="../../images/message.png" alt="Message" style="width:25px;height:25px"></a></td>
        </tr>
        <tr><td colspan="9"><hr></td></tr>
      

    </table>
    </div>
    </div>
   
</body>
</html>