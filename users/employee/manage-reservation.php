<?php include('../../includes/connection.php') ?>
<?php include('../../includes/session.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservations</title>
    <link href="../../images/logo.png" rel="shortcut icon">
    <!-- Link the style sheet -->
    <link rel="stylesheet" href="../../CSS/employee.css">
    <link rel="stylesheet" href="../../CSS/main.css">


</head>
<body class="subbody">
    <h1>Reservations</h1>
    <button href="table-reservation.php" target="iframe" class="hero-button">Dine in</button>
    <button href="menu-order.php" target="iframe" class="hero-button">Menu</button>
    <br><br>

    <iframe src="table-reservation.php" frameborder="0" width="100%" name="iframe" height="1000px"></iframe>
    
</body>
</html>