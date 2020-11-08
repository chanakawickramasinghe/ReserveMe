<html>  
<head>
    <title>Customer Registration</title> 
    <link href="../../images/logo.png" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link the style sheets -->
    <link href="../../CSS/login.css" rel="stylesheet" type="text/css" > 
    <link href="../../CSS/nav.css" rel="stylesheet" type="text/css">
    <link href="../../CSS/footer.css" rel="stylesheet" type="text/css">     
    <link href="../../CSS/customer-reg.css" rel="stylesheet" type="text/css" > 
    

    <script crossorigin="anonymous" src="https://kit.fontawesome.com/70a642cd7c.js"></script>
</head>
    
<body class="login-body">
<!--Start of nav-->
<div class="topnav" id="myTopnav">
        <img class = "logo" src="../../images/logo.png">
        <a href="../user-type.php">Register</a>
        <a href="../../includes/login.php">Login</a>
        <a href="../../includes/contact.php">Contact</a>
        <a href="../../includes/about.php">About</a>
        <a href="javascript:void(0);" class="icon" onclick="onClickNav()">
            <i class="fa fa-bars"></i>
        </a>       
    </div>
    <!--End of nav-->

        
        <div class="login-box"> 
               
            <img src="../../images/profile.png" class="avatar">
            <br>
                <h1 align="center">Register Here</h1>

            <h2 class="error-msg"><?php include_once('../../includes/message.php'); ?></h2>

                <form action="register-submit.php" method="post">                   
                  
                <table style="width:500px;position:center;align-items:center">
                <tr>
                    <td>
                    <label for="name">Name</label>
                    <input type="text"  name="name" class="reg-type-feild" placeholder="Your name" required>    

                    <label for="email">Email address</label>
                    <input type="email" name="email" class="reg-type-feild" placeholder="your email" required >

                    <label for="password">Password</label>
                    <input type="password" name="password" class="reg-type-feild" placeholder="Enter Password" id="password"  required>

                    <label for="password2">Confirm Password</label>
                    <input type="password2" name="password2" class="reg-type-feild" placeholder="Re-Enter Password" id="confirm_password" onkeyup='check()' required>
                    <P id='message' ></P>

                    <label for="contact">Contact number</label>
                    <input type="tel" name="contact" class="reg-type-feild" placeholder="Mobile number" pattern='^\+?\d{0,13}' > </td>

                    <td>

                    <label for="dob">Date of birth</label>
                    <input type="date" name="dob" id='dob' class="reg-type-feild" onkeyup='getAge(dob)' required> 
                    <P id='message2' ></P>
                                <!-- 
                                                    <?php
                                //                     $dob=$_POST['dob'];
                                // if (time() < strtotime('+18 years', strtotime($dob))) {
                                //     echo 'Client is under 18 years of age.';
                                //     exit;
                                //  }
                                                    ?> -->


                    <!-- <p>Address<p> -->
                    <label for="pnumber">Number</label>
                    <input type="text" name="pnumber" class="reg-type-feild" placeholder="Number"> 

                    <label for="street">Street</label>
                    <input type="text" name="street" class="reg-type-feild" placeholder="Street"> 

                    <label for="city">City</label>
                    <input type="text" name="city" class="reg-type-feild" placeholder="City"> 
                    </td>
                </tr> 
                </table>          
                <br>
                   
                   <p align="center"> <input type="submit" name="submit"  class="btn" value="Register" required></p>
                   
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

        function getAge(birthDateString) {
    var today = new Date();
    var birthDate = new Date(birthDateString);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }
    return age;
}

if(age<16) {
    alert("You have under 16 year old");
} 
    
        </script>
</body>

</html>