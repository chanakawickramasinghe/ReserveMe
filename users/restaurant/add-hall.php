<html>  
<head>
    <title>Hall Registration</title> 
    <link href="../../images/logo.png" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link the style sheets -->
    <link href="../../CSS/login.css" rel="stylesheet" type="text/css" > 
    <link href="../../CSS/nav.css" rel="stylesheet" type="text/css">
    <link href="../../CSS/footer.css" rel="stylesheet" type="text/css">
    <!-- <link href="../../CSS/pre-order.css" rel="stylesheet" type="text/css">     
    <link href="../../CSS/res-promo.css" rel="stylesheet" type="text/css" >  -->
    <link href="../../CSS/add-hall.css" rel="stylesheet" type="text/css" >
    <script crossorigin="anonymous" src="https://kit.fontawesome.com/70a642cd7c.js"></script>

    <style>
        .signin {
            padding:10px;
            background-color: #e9bc5c;
            text-align: center;
            border-radius:5px;
        }
    </style> 
</head>
    <body><center>
        <form method="post" action="add-hall-submit.php" enctype="multipart/form-data">
        <br><br>
        <h1 style="color:#ffbb01;"> Add Hall Details</h1>
        <br><br>
        <table>
            <tr>
                <th>Hall Name</th>
                <td><input type="text" name="hall_name" placeholder="Hall Name"></td>
            </tr>
            <tr>
                <th>Contact No.</th>
                <td><input type="text" name="contact_no" placeholder="Contatc No." pattern='^\+?\d{0,13}'></td>
            </tr>
            <tr>
                <th>Profile Image</th>
                <td><input type="file" name="main_image" placeholder="Select Profile Image"></td>
            </tr>
            <tr>
                <th>Image 1</th>
                <td><input type="file" name="image1" placeholder="Image 1"></td>
            </tr>
            <tr>
                <th>Image 2</th>
                <td><input type="file" name="image2" placeholder="Image 1"></td>
            </tr>
            <tr>
                <th>Address</th>
                <td><input type="text" name="address" placeholder="Address"></td>
            </tr>
            <tr>
                <th>Capacity</th>
                <td><input type="text" name="capacity" placeholder="Capacity"></td>
            </tr>
            <tr>
                <th>Description</th>
                <td><textarea rows="5" cols="40" name="description" placeholder="Description (below 250 words)"></textarea></td>
            </tr>
            <tr>
                <th>Advance Fee</th>
                <td><input type="text" name="advance" placeholder="Rs."></td>
            </tr>
            <center>
        </table>
        <br><br><br><br>

        <input type="submit" name="btn-add-hall" style="margin-left:250px; margin-top:-30px" class="btn-promo" value="Add Hall Details" required>

        
        <br><br><br><br>
        <!-- <input type="rest" name="submit" style="margin-left:250px; margin-top:-30px" class="btn-promo" value="Clear" required>
        </form> -->

        
    </body>
</html>
