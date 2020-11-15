<html>  
<head>
    <title>Restaurant Registration</title> 
    <link href="../../images/logo.png" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link the style sheets -->
    <link href="../../CSS/login.css" rel="stylesheet" type="text/css" > 
    <link href="../../CSS/nav.css" rel="stylesheet" type="text/css">
    <link href="../../CSS/footer.css" rel="stylesheet" type="text/css">     
    <link href="../../CSS/customer-reg.css" rel="stylesheet" type="text/css" > 
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
                <h1 align="center">Restaurants Sign-Up Here..!</h1><br>

            <h2 class="error-msg"><?php include_once('../../includes/message.php'); ?></h2>

                <form action="res_reg_submit.php" method="post">                   
                  
                <table style="width:750px;float:center;align-items:center">
                <tr>
                    <td>
                    <img src="../../images/form_icons/user.png" alt="user" class="icons">
                    <label for="name">Name</label>                   
                    <input type="text"  name="name" class="reg-type-feild" placeholder="Your name" required>    
                    
                    <p>
                    <img src="../../images/form_icons/mail.png" alt="user" class="icons">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="reg-type-feild" placeholder="your email" required >
                    </p>

                    <p>
                    <img src="../../images/form_icons/padlock.png" alt="user" class="icons">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="reg-type-feild" placeholder="Enter Password" id="password"  required>
                    </p>
                    
                    <img src="../../images/form_icons/password.png" alt="user" class="icons">
                    <label for="password2">Confirm Password</label>
                    <input type="password" name="password2" class="reg-type-feild" placeholder="Re-Enter Password" id="confirm_password" onkeyup='check()' required>
                    <P id='message' ></P>

                    <img src="../../images/form_icons/phone-call.png" alt="user" class="icons">
                    <label for="contact">Contact number</label>
                    <input type="tel" name="contact" class="reg-type-feild" placeholder="Mobile number" pattern='^\+?\d{0,13}' > </td>


                    <td>
                    <!--Location-->
                    <img src="../../images/form_icons/map.png" alt="user" class="icons">
                    <label for="dob">Location URL</label>
                    <input type="url" name="url" id='url' class="reg-type-feild"  placeholder="Enter Restaurant Location" required> 
                    
                    <p>
                    <!-- Address -->
                    <img src="../../images/form_icons/address.png" alt="user" class="icons">
                    <label for="pnumber"> Address</label>
                    <input type="text" name="pnumber" class="reg-type-feild" placeholder="Post number">
                    </p> 

                    <!-- <label for="street">Street</label> -->
                    <input type="text" name="street" class="reg-type-feild" placeholder="Street"> 

                    <!-- <label for="city">City</label> -->
                    <input type="text" name="city" class="reg-type-feild" placeholder="City"> 

                    <p>
                    <!-- Resaurant Image -->
                    <img src="../../images/form_icons/image.png" alt="user" class="icons">
                    <label for="pnumber"> Profile Image</label>
                    <input type="file" name="res_img" class="reg-type-feild" placeholder="Upload Profile Image">
                    </p> 
                    </td>
                </tr> 
                </table>          
                <br>
                <hr><br>
                <p>By creating an account you agree to our <a href="#" style="color:blue">Terms & Privacy</a>.</p><br><br>
                   <p align="center"> <input type="submit" name="submit"  class="btn" value="Register" required></p>
                   <br>

                   <div class="signin">
                   <p>Already have an account? <a href="../../includes/login.php" style="color:blue">Sign in</a>.</p>
                   </div>
            </form>    
            
        </div>

    <!--Include footer.php-->
    <div><?php include "../../includes/footer.php" ?></div>
    
    <!--script for onClickNav() for the navigation menu-->
    <script src="../../js/onClickNav.js"></script>
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
</body>
</html>