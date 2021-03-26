<?php include('../../includes/session.php') ?>
<?php include('../../includes/connection.php') ?>

<html>  
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Hall</title> 
    <link href="../../images/logo.png" rel="shortcut icon"/> 
    <!-- Link the style sheets -->
    <link rel="stylesheet" href="../../CSS/pre-order.css">
    <link rel="stylesheet" href="../../CSS/main.css">
    <link rel="stylesheet" href="../../CSS/nav.css">   
    <link rel="stylesheet" href="../../CSS/footer.css">
    <link rel="stylesheet" href="../../CSS/hall.css">
    <style>
        .signin {
            padding:10px;
            background-color: #e9bc5c;
            text-align: center;
            border-radius:5px;
        }
    </style> 
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


        <h1 style="color:#ffbb01; text-align:center;"><font color="black">Add Hall</font> Details</h1>
        <div class="add-hall-box">
        <form method="post" action="add-hall-submit.php" enctype="multipart/form-data">
        
        <table class="add-hall">
            <tr>
                <th>Hall Name</th>
                <td><input class="type-feild-l" type="text" name="hall_name" placeholder="Hall Name" required></td>
            </tr>
            <tr>
                <th>Contact No.</th>
                <td><input class="type-feild-l" type="text" name="contact_no" placeholder="Contatc No." pattern='^\+?\d{0,13}' required></td>
            </tr>
            <tr>
                <th>Profile Image</th>
                <td><input class="type-feild-l" type="file" name="main_image" placeholder="Select Profile Image" required></td>
            </tr>
            <tr>
                <th>Image 1</th>
                <td><input class="type-feild-l" type="file" name="image1" placeholder="Image 1"></td>
            </tr>
            <tr>
                <th>Image 2</th>
                <td><input class="type-feild-l" type="file" name="image2" placeholder="Image 2"></td>
            </tr>
            <tr>
                <th>Address</th>
                <td><input class="type-feild-l" type="text" name="address" placeholder="Address" required></td>
            </tr>
            <tr>
                <th>Capacity</th>
                <td><input class="type-feild-l" type="text" name="capacity" placeholder="Capacity" required></td>
            </tr>
            <tr>
                <th>Description</th>
                <td><textarea class="type-feild-l" rows="5" cols="40" name="description" placeholder="Description (below 250 words)" required></textarea></td>
            </tr>
            <tr>
                <th>Advance Fee</th>
                <td><input class="type-feild-m" type="text" name="advance" placeholder="Rs." required></td>
            </tr>
        </table> 
    </center>
        <br/>
            <input type="submit" name="btn-add-hall" style="margin-left:250px; margin-top:-30px" class="btn-add-hall-l" value="Add Hall Details" required></th>
            <button type="button" class="btn-add-hall-s" onclick="window.location.href='hall-details.php'">Back</button></td>

        </form>
        </div>
        
    </body>
    
</html>
