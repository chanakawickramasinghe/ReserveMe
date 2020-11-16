<html>  
<head>
    <title>Hall Registration</title> 
    <link href="../../images/logo.png" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link the style sheets -->
    <link href="../../CSS/login.css" rel="stylesheet" type="text/css" > 
    <link href="../../CSS/nav.css" rel="stylesheet" type="text/css">
    <link href="../../CSS/footer.css" rel="stylesheet" type="text/css">     
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
    
<body class="login-body">
        <!--Start of nav-->
        <div class="topnav" id="myTopnav">
        <a href="../../index.php"><img class = "logo" src="../../images/logo.png"></a>
        <a class="navtab" href="../../includes/login.php">Login</a>
		<a class="navtab" href="../../includes/contact.php">Contact</a>
		<a class="navtab" href="../../includes/about.php">About</a>
		<!--<a href="javascript:void(0);" class="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a> -->     
        </div>
        <!--End of nav-->
  
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
	<!--Include footer.php-->
   	<div><?php include "../../includes/footer.php" ?></div>

</body>
</html>
