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
    <body>
    <!-- nav bar -->
    <?php include('navigation.php'); ?> 
    
    <center>
        
        <h1 style="color:#ffbb01;"><font color="black">Add Hall</font> Details</h1>
        <form method="post" action="add-hall-submit.php" enctype="multipart/form-data">
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
    
<!-- <body class="login-body">

  
        <div class="login-box"> 
               
            <img src="../../images/form_icons/regform.png" class="avatar">
            <br>
                <h1 align="center">Add Reception Halls</h1><br>

            <h2 class="error-msg"><?php include_once('../../includes/message.php'); ?></h2>

                <form action="hall-add-submit.php" method="post">                   
                  
                <table style="width:750px;float:center;align-items:center">
                <tr>
                    <td>
                    <img src="../../images/form_icons/user.png" alt="user" class="icons">
                    <label for="name">Hall Name</label><br>                   
                    <input type="text"  name="name" class="reg-type-feild" placeholder="Employee Name" required>    

                    <p>
                    <img src="../../images/form_icons/phone-call.png" alt="user" class="icons">
                    <label for="contact">Contact number</label><br>
                    <input type="tel" name="contact" class="reg-type-feild" placeholder="Employee Mobile Number" pattern='^\+?\d{0,13}' >
                    </p>

                    <p>
                    <img src="../../images/form_icons/map.png" alt="user" class="icons">
                    <label for="location">Location URL</label><br>
                    <input type="url" name="url" id='url' class="reg-type-feild"  placeholder="Enter Restaurant Location" required>
                    </p>

                    <p>
                    <img src="../../images/form_icons/map.png" alt="user" class="icons">
                    <label for="url">Capacity</label><br>
                    <input type="url" name="url" id='url' class="reg-type-feild"  placeholder="Enter Restaurant Location" required>
                    </p>

                    <p>
                    <img src="../../images/form_icons/image.png" alt="user" class="icons">
                    <label for="image"> Profile Image</label><br>
                    <input type="file" name="res_img" class="reg-type-feild" placeholder="Upload Profile Image">
                    </p> 

                    <p align="center"> <input type="submit" name="submit"  class="btn" value="Submit" required></p>
                   <br>
                    </td>
                </tr> 
                </table>          
            </form>    
            
        </div>

</body> -->
</html>
