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
    <div class="topnav">
        <a href="../../index.php"><img class = "logo" src="../../images/logo.png"></a>
        <a class="navtab" href="../../includes/login.php">Login</a>
		<a class="navtab" href="../../includes/contact.php">Contact</a>
		<a class="navtab" href="../../includes/about.php">About</a>
		<a class="navtab" href="javascript:void(0);" id="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a>   
    </div>
    <!--End of nav--> 
 
    <div class="loginbg">
        
        <div class="login-box">
                    <img src="../../images/form_icons/vector-users.png" alt="usericon" class="userIcon">
                    <h1 style="display: inline-block;color:green">Register Here...!</h1>
                <!-- <center><h1 style="color:green">Register Here..!</h1></center> -->
                <h2 class="error-msg"><?php include_once('../../includes/message.php'); ?></h2>

                <form action="register-submit.php" method="post">                   

                    <!-- <img src="../../images/form_icons/user.png" alt="user" class="icons">
                    <label for="name">Name</label>                     -->
                    <input type="text"  name="name" class="type-feild" placeholder="Your Name" pattern="[a-zA-Z][a-zA-Z ]{2,}" required>    
                    
                    <!-- <img src="../../images/form_icons/mail.png" alt="user" class="icons">
                    <label for="email">Email address</label> -->
                    <input type="email" name="email" class="type-feild" placeholder="Email address" required="">
      
			       
                    <!-- <img src="../../images/form_icons/padlock.png" alt="user" class="icons">
                    <label for="password">Password</label> -->
                    <input type="password" name="password" class="type-feild" placeholder="New password" id="password" minlength="8" 
                    pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required>
                    <h6>(Must Include Uppercase, Lowercase with Numbers)</h6>

                    <!-- <div class=password-container>
                    <img src="../../images/form_icons/padlock.png" alt="user" class="icons">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="type-feild" placeholder="ex: John@1234" id="password" minlength="8" 
                    pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" 
                    oninvalid="this.setCustomValidity('Password must include Uppercase & Lowercase characters with Numbers or Special Characters')" required>
                    </div> -->
			    
                    <!-- <img src="../../images/form_icons/password.png" alt="user" class="icons">
                    <label for="password2">Confirm Password</label> -->
                    <input type="password" name="password2" class="type-feild" placeholder="Re-type password" minlength="8" id="confirm_password" 
                    pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" onkeyup='check()' required>
                    <P id='message' ></P>
<!-- 
                    <img src="../../images/form_icons/phone-call.png" alt="user" class="icons">
                    <label for="contact">Contact number</label> -->
                    <input type="tel" name="contact" class="type-feild" placeholder="Mobile Number(With country code)" pattern='^\+?\d{11}' required> 

                    <!-- <img src="../../images/form_icons/calendar.png" alt="user" class="icons">
                    <label for="dob">Date of birth</label> -->
                    <input type="date" name="dob" id='dob' class="type-feild" onkeyup='getAge(dob)' placeholder="Date of Birth" min="1930-01-01" max="2002-12-31"> 
                    <P id='message2' ></P>
                    
                    <!-- <img src="../../images/form_icons/address.png" alt="user" class="icons">
                    <label for="pnumber"> Address</label>
                    <input type="text" name="pnumber" class="type-feild" placeholder="ex : No. 120"> 

                    <input type="text" name="street" class="type-feild" placeholder="ex: Wall Street"> 

                    <input type="text" name="city" class="type-feild" placeholder="ex: Colombo"> -->
               
                    
                <center>
                    <p>By creating an account you agree to our <a href="#" style="color:blue">Terms & Privacy</a>.</p>
                    <!-- <p> <input type="submit" name="submit"  class="hero-button" value="Register" required></p> -->
                    <br> 
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" name="submit"> Register </button>
                        </div>
                    </div><br>
                    <p>Already have an account? <a href="../../includes/login.php" style="color:blue;font-weight:bold">Sign in</a>.</p>
                </center>
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
                    document.getElementById('message').innerHTML = 'Password is matching';
            } 
            else{
                document.getElementById('message').style.color = 'red';
                // document.getElementById('message').style.backgroundColor = 'initial';
                document.getElementById('message').innerHTML = 'Password does not match';
            }
        }

        // onkeyup='getAge(dob)'
    // function getAge(birthDateString) {
    // var today = new Date();
    // var birthDate = new Date(birthDateString);
    // var age = today.getFullYear() - birthDate.getFullYear();
    // var m = today.getMonth() - birthDate.getMonth();
    // if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
    //     age--;
    // }
    // return age;
    // }

    // if(age<16) {
    // alert("You have under 16 year old");
    // } 
    
        </script>


</body>

</html>
