<?php include('../../includes/session.php') ?>
<?php include('../../includes/connection.php') ?>

<html>  
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hall Registration</title> 
    <link href="../../images/logo.png" rel="shortcut icon"/> 
    <!-- Link the style sheets -->
    <link rel="stylesheet" href="../../CSS/pre-order.css">
    <link rel="stylesheet" href="../../CSS/main.css">
    <link rel="stylesheet" href="../../CSS/nav.css">   
    <link rel="stylesheet" href="../../CSS/footer.css">
 
</head>
<body>

<?php include('navigations.php'); ?>
   
   <!-- Start of side bar -->
   <div class="sidebar"> 
     <a href="restaurant-home.php">Home</a> 
     <a href="add-preordermenu.php">Pre - Order Menu</a>    
     <a href="add-menu.php">Update the Menu</a>
     <a href="res-promo.php">Promotions</a>
     <a href="res-floor-plan.php">Floor Plan</a> 
     <a href="res-reservation.php">Reservations</a>
     <a href="../customer/res_view/review/index.html?res_id=4">View Reviews</a>   
     <a href="res-contactus.php">Help Desk</a>
     <br>
     <hr>
     <a href="emp-iframe.php">Manage Employee</a>
     <a href="hall-details.php" class="active">Reception Hall</a>
   </div>
   <!-- End of side bar -->

   
   <div class="content">
    <div style="margin:20px">  
   
    <?php

        checkSession();
        $resId = $_SESSION["res_id"];
        $hall_search = "SELECT * FROM reception_hall WHERE res_id = '$resId'";

        $hallquery = mysqli_query($connection,$hall_search);
        $num_halls = mysqli_num_rows($hallquery);

        if ($num_halls == 0){
            echo "
            
            <h1 align='center' color:'#ffbb01;' >Reception Halls</h1>

            <h3 align='center'>No Reception Hall added!</h3>
            <br><br><br>
            <center>
            <button type=\"button\" name=\"btn-promo\" class=\"btn-promo\" onclick=\"window.location.href='add-hall.php'\" align=\"center\">Add Hall</button></center>";
            
        }
        else{
            echo "
            <h2 align='center' color:'#111111;'>Reception Hall Details</h2>
            
            <table class=\"promo\" id=\"myTable\" border=\"1\" align=\"center\">
            <tr>
                <th>Hall Main Image</th>
                <th>Image 1</th>
                <th>Image 2</th>
                <th>Hall Name</th>
                <th>Contact No.</th>
                <th>Address</th>
                <th>Capacity</th>
                <th>Description</th>
                <th>Advance Fee</th>
                <th>Remove</th>
            </tr>";
            while($row = mysqli_fetch_assoc($hallquery)){
            echo"
            <tr> 
                <td><img class=\"hall-img\" src= \"../../images/halls/{$row['main_image']}\"></td>
                <td><img class=\"hall-img\" src= \"../../images/halls/{$row['image1']}\"></td>
                <td><img class=\"hall-img\" src= \"../../images/halls/{$row['image2']}\"></td>
                <td>".$row['hall_name']."</td>  
                <td>".$row['contact_no']."</td>
                <td>".$row['address']."</td>
                <td>".$row['capacity']."</td>
                <td>".$row['description']."</td> 
                <td>".$row['advance_fee']."</td> 
                <td><button type=\"button\" class=\"btn-promo-remove\">X</button></td>           
            </tr>
    
            ";
            }
        }

    ?>

    </body>
</html>