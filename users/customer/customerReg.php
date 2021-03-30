<html>  
<head>
    <title>Customer Registration</title> 
    <link href="../../images/logo.png" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link the style sheets -->
    <link href="../../CSS/main.css" rel="stylesheet" type="text/css">
    <link href="../../CSS/nav.css" rel="stylesheet" type="text/css">
    <link href="../../CSS/footer.css" rel="stylesheet" type="text/css">     
    <link href="../../CSS/customer-reg.css" rel="stylesheet" type="text/css" >
    <link href="../../CSS/login.css" rel="stylesheet" type="text/css">     
    <script crossorigin="anonymous" src="https://kit.fontawesome.com/70a642cd7c.js"></script>

</head>
    
<body>
<!--Start of nav-->
    <div class="topnav" id="myTopnav">
        <a href="../../index.php"><img class = "logo" src="../../images/logo.png"></a>
        <a class="navtab active" href="../users/customer/customerReg.php">Register</a>
        <a class="navtab" href="../../includes/login.php">Login</a>
		<a class="navtab" href="../../includes/contact.php">Contact</a>
		<a class="navtab" href="../../includes/about.php">About</a>
		<a class="navtab" href="javascript:void(0);" id="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a>   
    </div>
    <!--End of nav--> 

    <?php $d = date('m-d-Y',strtotime('+5 years ')) ?>
 
    <div class="loginbg">
        
        <div class="login-box">
                    <img src="../../images/form_icons/vector-users.png" alt="usericon" class="userIcon">
                    <h1 style="display: inline-block;color:green">Register Here...!</h1>

                    <h2 class="error-msg"><?php include_once('../../includes/message.php'); ?></h2>

                <form action="register-submit.php" method="post"> 

                    <input type="text"  name="firstname" class="type-feild" placeholder="Your First Name" pattern="[A-Za-z]+" required>    

                    <input type="text"  name="lastname" class="type-feild" placeholder="Your Last Name" pattern="[A-Za-z]+" required>       

                    <input type="hidden"  name="name" class="type-feild" placeholder="Full Name" pattern="[A-Za-z]+" required>   

                    <input type="email" name="email" class="type-feild" placeholder="Email address" required="">
      
                    <input type="password" name="password" class="type-feild" placeholder="New password" id="password" minlength="8" 
                    pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required>
                    <h6>(Must Include Uppercase, Lowercase with Numbers)</h6>

                    <input type="password" name="password2" class="type-feild" placeholder="Re-type password" minlength="8" id="confirm_password" 
                    pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" onkeyup='check()' required>
                    <P id='message' ></P>

                    <input type="tel" name="contact" class="type-feild" placeholder="Mobile Number(With country code)" pattern="[0][1-9][0-9]{8}" required> 

                    <input type="date" name="dob" id='dob' class="type-feild" onkeyup='getAge(dob)' placeholder="Date of Birth" min="<?php echo $d ?>" max="2002-12-31"> 
                    <P id='message2' ></P>
               
                    <p>By creating an account you agree to our <a href="#" style="color:blue">Terms & Privacy</a>.</p>

                    <br> 
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" name="submit"> Register </button>
                        </div>
                    </div><br>
                    <p>Already have an account? <a href="../../includes/login.php" style="color:blue;font-weight:bold">Sign in</a>.</p>
                </form>    
            
        </div>
        


    <!--Include footer.php-->
   <div><?php include "../../includes/footer.php" ?></div>
   </div>
    <!--script for onClickNav() for the navigation menu-->
    <script src="../../js/onClickNav.js"></script>
    
    <script>
        var check = function() {
            if (document.getElementById('password').value == document.getElementById('confirm_password').value){
                    document.getElementById('message').style.color = 'green';
                    document.getElementById('message').innerHTML = 'Passwords are matching';
            } 
            else{
                document.getElementById('message').style.color = 'red';
                document.getElementById('message').innerHTML = 'Passwords does not match';
            }
        }

    </script>


    <!-- onkeyup='getAge(dob)'
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
    }  -->


</body>

</html>
