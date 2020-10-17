<html>  
<head>
    <title>Customer Registration</title>
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
        <img class = "logo" src="../../images/logo.png">
        <a href="users/user-type.php">Register</a>
        <a href="includes/login.php">Login</a>
        <a href="#contact">Contact</a>
        <a href="#aboutus">About</a>
        <a href="javascript:void(0);" class="icon" onclick="onClickNav()">
            <i class="fa fa-bars"></i>
        </a>       
    </div>
    <!--End of nav-->

        <div class="row-100">
            <div class="login-box" style="width:600px">
               
            <img src="../../images/profile.png" class="avatar">
            <br>
                <h1 align="center">Register Here</h1>
                
              

            <h2 class="error-msg"><?php include_once('../../includes/message.php'); ?></h2>

                <form action="register-submit.php" method="post">                   
                <div>   
                <table style="width:500px">
                <tr><td>
                <p><b>Name</p>
                    <input type="text" class="type-feild" name="name" placeholder="Your name" required>    

                    <p>Email address</p>
                    <input type="email" name="email" class="type-feild" placeholder="your email" required >

                    <p>Password</p>
                    <input type="password" name="password" class="type-feild" placeholder="Enter Password" id="password"  required>

                    <p>Confirm Password</p>
                    <input type="password" name="password2" class="type-feild" placeholder="Re-Enter Password" id="confirm_password" onkeyup='check()' required>
                    <P id='message' ></P>

                    <p>Contact number</p>
                    <input type="tel" name="contact" class="type-feild" placeholder="Mobile number" pattern='^\+?\d{0,13}' > </td>

                    <td>
                    <p><b>Date of birth</p>
                    <input type="date" name="dob" id='dob' class="type-feild" onkeyup='getAge(dob)' required> 
                    <P id='message2' ></P>
<!-- 
                    <?php
                    $dob=$_POST['dob'];
if (time() < strtotime('+18 years', strtotime($dob))) {
    echo 'Client is under 18 years of age.';
    exit;
 }
                    ?> -->


                    <p>Address<p>
                    <p> Number </p>
                    <input type="text" name="pnumber" class="type-feild" placeholder="Number"> 

                    <p>Street</p>
                    <input type="text" name="street" class="type-feild" placeholder="Street"> 

                    <p>City</p>
                    <input type="text" name="city" class="type-feild" placeholder="City"> </td></tr> 
                    </table>          
 <br>
                   
                   <p align="center"> <input type="submit" name="submit"  class="search-btn hover" value="Register" required></p>
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

        <!--Include footer.php-->
   <div><?php include "../../includes/footer.php" ?></div>
    
    <!--script for onClickNav() for the navigation menu-->
    <script src="../../js/onClickNav.js"></script>
</body>

</html>