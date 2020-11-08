<html>  
<head>
    <title>Add Reception Hall</title>
    <link rel="stylesheet" type="text/css" href="../../CSS/customer_Reg.css">   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/nav.css" rel="stylesheet" type="text/css"/>
    <link href="../../css/footer.css" rel="stylesheet" type="text/css"/>
    <link href="../../images/logo.png" rel="shortcut icon"/> 
    <script crossorigin="anonymous" src="https://kit.fontawesome.com/70a642cd7c.js"></script>
</head>
    
<body class="login-body">
<!--Start of nav-->
        <div class="topnav" id="myTopnav">
            <a href="../../index.php"><img class = "logo" src="../../images/logo.png"></a>
            <a class="navtab" href="../../index.php.php">Logout</a>
		    <a class="navtab" href="restaurant-profile.php">My Profile</a>
		    <a class="navtab" href="../../includes/contact.php">Contact</a>
		    <a class="navtab" href="../../includes/about.php">About</a>
		    <!--<a href="javascript:void(0);" class="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a> -->     
        </div>
<!--End of nav-->

        <div class="row-100">
            <div class="login-box" style="width:475px">

            <br>
                <h1 align="center">Reception Hall Details</h1>
                <h2 class="error-msg"><?php include_once('../../includes/message.php'); ?></h2>

                <form action="add-hall-submit.php" method="post">                   
                <div>   
                <table style="width:400px">
                <tr><td>
                <h2><b>Hall Name</h2>
                    <input type="text" class="type-feild" name="name" placeholder="Hall Name" required>    

                    <h2>Contact number</h2>
                    <input type="tel" name="contact" class="type-feild" placeholder="Telephone number" pattern='^\+?\d{0,13}'>

                    <h2>Address</h2>
                    <p> Number </p>
                    <input type="text" name="pnumber" class="type-feild" placeholder="Number"> 

                    <p>Street</p>
                    <input type="text" name="street" class="type-feild" placeholder="Street"> 

                    <p>City</p>
                    <input type="text" name="city" class="type-feild" placeholder="City">

                    <h2>Capacity</h2>
                    <input type="text" name="capacity" class="type-feild" placeholder="Capacity">

                    <h2>Charge</h2>
                    <input type="text" name="charge" class="type-feild" placeholder="Per day charge"> 

                    <h2>Profile image</h2>
                    <p>Insert the images of the Hall to be display</p>
                    <input type="file" name="res_image" id="res_image">

                    </td></tr> 
                    </table>      
                    <br>
                    <input type="submit" name="submit" style="margin-left:220px;margin-top:-25px" class="search-btn hover" value="Register" required>
                </div>
                </form>    
            </div>
        </div>
        
        <script>
        var check = function() {
            if (document.getElementById('password').value == document.getElementById('confirm_password').value){
                    document.getElementById('message').style.color = 'green';
                    document.getElementById('message').innerHTML = 'Password is matching';
            } 
            else{
                document.getElementById('message').style.color = 'red';
                // document.getElementById('message').style.backgroundColor = 'initial';
                document.getElementById('message').innerHTML = 'Password does not match';
            }
        }

        </script>

<!--Include footer.php-->
    <div><?php include "../../includes/footer.php" ?></div>
    
<!--script for onClickNav() for the navigation menu-->
    <script src="../../js/onClickNav.js"></script>
</body>
</html>