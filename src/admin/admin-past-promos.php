<?php include('admin-session.php') ?>
<?php include('../../config/connection.php') ?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ReserveMe - Admin</title>
	    <link rel="stylesheet" href="../../public/CSS/admin-nav.css">
        <link href="../../public/images/logo.png" rel="shortcut icon"/>
        <link rel="stylesheet" href="../../public/CSS/admin-dashboard.css"/>
        <script src="../../public/js/manage-user-search.js"></script>
    </head>
    <body>

        <!--Start of nav-->
        <div class="topnav" id="myTopnav">
        <a href="admin-home.php"><img class = "logo" src="../../public/images/logo.png"></a>
            <a class="navtab" href="../../public/includes/logout.php">Logout</a>
            <a class="navtab" href="admin-home.php">Home</a>
            <a class="navtab" href="promotions.php">Promotions</a>
        </div>
        <!--End of nav-->

        <h1><br/><br/><font color="black">Past</font> Promotions</h1>

        <div class="search-user-container">
            <form name="form-display-selected">
                <!--heading-->
		        <h3>Search From Posted Date, Ended Date or Description</h3>
		        <!--Input-------->
		        <div class="search-input">
                    <input type="text" id="myInput" onkeyup="myFunctionPastPromos()" 
                    placeholder="Enter Posted Date or Ended Date or Description"/>
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