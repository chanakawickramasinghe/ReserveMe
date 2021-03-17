<?php include('../../includes/session.php') ?>
<?php include('../../includes/connection.php') ?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ReserveMe - Admin</title>
	    <link rel="stylesheet" href="../../CSS/admin-nav.css">
        <link href="../../images/logo.png" rel="shortcut icon"/>
        <link rel="stylesheet" href="../../CSS/admin-dashboard.css"/>
        <script src="../../js/manage-user-search.js"></script>
    </head>
    <body>

        <!--Start of nav-->
        <div class="topnav" id="myTopnav">
        <a href="../../index.php"><img class = "logo" src="../../images/logo.png"></a>
            <a class="navtab" href="../../index.php">Logout</a>
            <a class="navtab" href="admin-home.php">Home</a>
            <a class="navtab" href="promotions.php">Promotions</a>
        </div>
        <!--End of nav-->

        <h1><font color="black">Past</font> Promotions</h1>

        <div class="search-user-container">
            <form name="form-display-selected">
                <!--heading-->
		        <h3>Search From Restaurant Name or ID</h3>
		        <!--Input-------->
		        <div class="search-input">
                    <input type="text" id="myInput" onkeyup="myFunctionPastPromos()" 
                    placeholder="Enter Restaurant Name or ID"/>
                </div>
            </form>
        </div>
        <?php

            //get date to check
            date_default_timezone_set('Asia/Colombo');
            $today_date = date("Y-m-d H:i:s");

            $promos = "SELECT * FROM promotions WHERE end_date<'$today_date'"; //check with date

            $promo_query = mysqli_query($connection,$promos);
            $num_promos = mysqli_num_rows($promo_query);
            
            if ($num_promos == 0){ //if there are no past promotions
                echo"<p>No Past Promotions to Display</p>";
            }
            else { //to see past promos
                echo "
                <table class=\"promo\" id=\"myTable\" border=\"1\">
                <tr>
                    <th>Promo ID</th>
                    <th>Promo Image</th>
                    <th>Posted Date & Time</th>
                    <th>Ended Date & Time</th>
                    <th>Description</th>
                </tr> ";

                while($row = mysqli_fetch_assoc($promo_query)){
                echo"
                <tr> 
                    <td>".$row['promo_id']."</td> 
                    <td><img class=\"img-promo\" src= \"../../images/promos/{$row['image']}\"></td>                     
                    <td>".$row['start_date']."</td>
                    <td>".$row['end_date']."</td>
                    <td>".$row['text']."</td>

                </tr>";
                }
                echo"
                </table> ";
            }

        ?>
        
    
    </body>
</html>