<?php include('../../includes/session.php') ?>
<?php include('../../includes/connection.php') ?>

<html>  
<head>
    <title>Hall Registration</title> 
    <link href="../../images/logo.png" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link the style sheets -->   
    <link href="../../CSS/new-hall-details.css" rel="stylesheet" type="text/css" > 
    <link href="../../CSS/pre-order.css" rel="stylesheet" type="text/css" >
    <link rel="stylesheet" href="../../CSS/res-promo.css"/>
    <script crossorigin="anonymous" src="https://kit.fontawesome.com/70a642cd7c.js"></script>
 
</head>
<body>
    <?php

        checkSession();
        $resId = $_SESSION["resID"];
        $hall_search = "SELECT * FROM reception_hall WHERE res_id = '$resId'";

        $hallquery = mysqli_query($connection,$hall_search);
        $num_halls = mysqli_num_rows($hallquery);

        if ($num_halls == 0){
            echo "
            
            <h1 align='center' color:'#ffbb01;'>Reception Halls</h1>

            <h3 align='center'>No Reception Hall added!</h3>
            <br><br><br>
            <center>
            <button type=\"button\" name=\"btn-promo\" class=\"btn-promo\" onclick=\"window.location.href='add-hall.php'\" align=\"center\">Add Hall</button></center>";
            

            
        }
        else{
            echo "
            <h2 align='center' color:'#ffbb01;'>Reception Hall Details</h2>
            
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