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
    <h1 style="color:orange">Pre Orders- Menu</h1>
    
    <div class="promo-btn-bar">
                <button type="button" class="hero-button" onclick="window.location.href='table-reservation.php'">Table Reservation</button>
            </div>
    <br><br>

    <div style="padding:5vw;padding-top:1vw">
    <div class="contentbox">
    <table width="100%">
        <tr>
            <th width="1vw">Reservation id.</th>
            <th>Menus</th>
            <th>Accept</th>
            <th>Reject</th>
        </tr>
        <tr><td colspan="9"><hr></td></tr>

        <tr><td>01.</td>
            <td>Kottu  -   2 <br>
                Fried rice  -  1 <br>
                Chicken Devel  -  1
            </td>
            <td><input type="button" value="Ok" class="hero-button" name="submit" href=""></td>
            <td><input type="button" value="Reject" class="hero-button" name="submit" href=""></td>
        </tr>
        <tr><td colspan="9"><hr></td></tr>

        <tr><td>02.</td>
            <td>Chicken -   2 <br>
                Noodles  -  1 <br>
                Beef Soup  -  1
            </td>
            <td><input type="button" value="Ok" class="hero-button" name="submit" href=""></td>
            <td><input type="button" value="Reject" class="hero-button" name="submit" href=""></td>
        </tr>
        <tr><td colspan="9"><hr></td></tr>

        <tr><td>03.</td>
            <td>Chiken burger  -   2 <br>
                Naugets -  1 <br>
                Nan Rotty  -  1
            </td>
            <td><input type="button" value="Ok" class="hero-button" name="submit" href=""></td>
            <td><input type="button" value="Reject" class="hero-button" name="submit" href=""></td>
        </tr>
        <tr><td colspan="9"><hr></td></tr>

        <tr><td>04.</td>
            <td>Sawarma  -   2 <br>
                Wings  -  6 <br>
                Cool drinks  -  1
            </td>
            <td><input type="button" value="Ok" class="hero-button" name="submit" href=""></td>
            <td><input type="button" value="Reject" class="hero-button" name="submit" href=""></td>
        </tr>
        <tr><td colspan="9"><hr></td></tr>
      

    </table>
    </div>
    </div>
   
</body>
</html>