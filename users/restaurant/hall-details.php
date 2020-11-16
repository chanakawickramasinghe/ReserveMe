<?php include('../../includes/session.php') ?>
<?php include('../../includes/connection.php') ?>

<html>  
<head>
    <title>Hall Registration</title> 
    <link href="../../images/logo.png" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link the style sheets -->   
    <link href="../../CSS/add-hall.css" rel="stylesheet" type="text/css" > 
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
            <h2>Reception Halls</h2>
            
            <p>No Reception Hall added!</p>
            
            <button type=\"button\" name=\"btn-to-add-emp\" onclick=\"window.location.href='add-hall.php'\">Add Employee</button>";

            
        }
        else{
            echo "
            <h2>Reception Hall Details</h2>
            
            <table class=\"promo\" id=\"myTable\" border=\"1\">
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
            </tr>";
            while($row = mysqli_fetch_assoc($emp_query)){
            echo"
            <tr> 
                <td>".$row['main_image']."</td>
                <td>".$row['image1']."</td>
                <td>".$row['image2']."</td>
                <td>".$row['hall_name']."</td>  
                <td>".$row['contact_no']."</td>
                <td>".$row['address']."</td>
                <td>".$row['capacity']."</td>
                <td>".$row['description']."</td> 
                <td>".$row['advance_fee']."</td>             
            </tr>
    
            ";
            }
        }

    ?>

    </body>
</html>