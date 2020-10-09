<?php include('includes/connection.php') ?>
<?php include('includes/session.php') ?>

<html>
    <head>
        <title>My Profile</title>
        <link rel="stylesheet" href="../../CSS/style.css">
        <link rel="stylesheet" href="../../CSS/nav.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <body>
        <nav>
            <label class="logo"><a href="www.fb.com"><img src="../../images/test.jpg" height=800%></a></label>
            <ul>
                <li><a>Table Reservations</a></li>
                <li><a>Hall Reservations</a></li>
                <li><a href="../../index.php">Logout</a></li> 
            </ul>
        </nav>

        <h1 class="div-c">Welcome User</h1>

        <?php
    
        echo "<table border=1 class=\"user\">";
    
        $userID = "111";
        $sql = "SELECT * FROM customer WHERE cusId='$userID'";
        $userquery = mysqli_query($connection,$sql);
        while($row = mysqli_fetch_assoc($userquery)){

            echo "<tr>
                    <th>User ID</th><td>".$row['userID']."</td>
                  </tr>
                  <tr>                  
                    <th>Name</th><td>".$row['name']."</td>
                  </tr>
                  <tr>
                    <th>Email</th><td>".$row['email']."</td>
                  </tr>
                  <tr>
                    <th>Contact No</th><td>".$row['contact']."</td>
                  </tr>";

        } 

        echo "</table>";

        ?>
    </body>
</html> 