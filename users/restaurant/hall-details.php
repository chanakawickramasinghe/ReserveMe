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
    <link rel="stylesheet" href="../../CSS/hall.css">
 
</head>
<body>

      <!-- nav bar -->
      <?php include('navigation.php'); ?>

<!-- Start of side bar -->
 <div class="sidebar"> 
 <a href="restaurant-home.php">Home</a>     
 <a href="add-menu.php">Update the Menu</a>
 <a href="res-promo.php" >Promotions</a>
 <a href="res-floor-plan.php" >Floor Plan</a> 
 <a href="res-reservation.php">Reservations</a>
 <a href="hall-reservation.php">Hall Reservations</a>
 <a href="res-review.html">View Reviews</a>   
 <br>
 <hr>
 <a href="mng-emp.php">Manage Employee</a>
 <a href="hall-details.php" class="active">Reception Hall</a>
</div>
<!-- End of side bar -->

   
   <div class="content">
    <div style="margin:20px">  
   
    <?php

        $hall_search = "SELECT * FROM reception_hall";

        $hallquery = mysqli_query($connection,$hall_search);
        $num_halls = mysqli_num_rows($hallquery);

        if ($num_halls == 0){
            echo "
            
            <h1 align='center'>Reception <font color=\"orange\">Halls</font></h1>
            <br/>
            <h3 align='center'>No Reception Hall added!</h3>
            <br><br>
            <center>
            <button type=\"button\" name=\"btn-promo\" class=\"btn-promo\" onclick=\"window.location.href='add-hall.php'\" align=\"center\">Add Hall</button></center>";
            
        }
        else{
            echo "
            <center><h1 style=\"color:orange;\"><font color=\"black\">Reception</font> Halls</h1></center>
            <br/><br/>";
            ?>
            <form action="add-menu-submit.php" method="post" >
            <table>
                <tr>
                    <td><input class="type-feild" type="text" id="in" name="item_name" placeholder="Food Name" required></td>
                    <td><input class="type-feild" type="text" id="in" name="item_name" placeholder="Food Name" required></td>
                </tr>
            </table>
            <input class="type-feild" type="text" id="in" name="item_name" placeholder="Food Name" required>
            <input class="type-feild" type="text" id="price" name="price" placeholder="Price" required><br>
            <input type="hidden" id="item_id" name="item_id">        
            <input type="submit" name="submit"  class="hero-button" value="Add" required>
            <input type="submit" name="update"  class="hero-button" value="Update" required>

            </form>
            <br><hr><br/>
            <?php
            echo"
            <table class=\"hall\" id=\"myTable\" border=\"1\" align=\"center\">
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
