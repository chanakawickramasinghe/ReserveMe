<DOCTYPE html>
<html lang = "en" dir = "ltr">

<head>
    <title>Restaurant Registration</title>
    <link rel="stylesheet" href="../../CSS/customer_reg.css">
    <link rel="stylesheet" href="../../CSS/res_reg.css">
    <meta charset="UTF-8">
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
<div class="tab" >
            <div class="login-box" style="height:600px;padding:10px 30px">

            
        <form name="formRestSignup" action="res_reg_submit.php" method="post" enctype="multipart/form-data">
        <h2 class="error-msg" style="font-size:14px"><?php include_once('../../includes/message.php'); ?></h2>
    <!--tabs are used to open the separate parts in separate pages.-->
            
                <h1 align="center">Sign Up</h1>
                <h2 align="center">Restaurant Details</h2>
               <b>
                <p>Name</p>
                    <input type="text" class="type-feild"   name="res_name" placeholder="Restaurant Name" required>
    
                <p>Email</p>
                    <input type="email"  class="type-feild" name="res_email" placeholder="Email" required>

                    <p>Telephone No</p>
                    <input type="tel" class="type-feild" name="res_tel" placeholder="Telephone No" pattern='^\+?\d{0,13}' required>
                    
                <p>Password</p>
                    <input type="password" class="type-feild" name="res_password" placeholder="Password" class="type-feild" id="res_password" required>    
                    <h2 class="error-msg" style="font-size:14px"><?php include_once('../../includes/message.php'); ?></h2>  
                    <p>Confirm Password</p>
                    <input type="password" class="type-feild" name="password2" class="type-feild" placeholder="Re-Enter Password" id="confirm_password" onkeyup='check()' required>
                    <p style="font-size:14px" id='message' ></p>
        
                   <button style="margin-left:220px;margin-top:-45px;position:sticky;top:0;"type="button" class="search-btn hover" onclick="nextPrev(1)">Next</button>
                <br>
                </div>
                
            </div>          
 
              
            <div class = "tab">
            <div class="login-box" style="height:650px;padding:10px 30px">
            <p>Address: <p>
                    <p> Address Line 1 </p>
                    <input type="text" name="pnumber" class="type-feild" placeholder="Number"> 

                    <p> Address Line 2</p>
                    <input type="text" name="street" class="type-feild" placeholder="Street"> 

                    <p>City</p>
                    <input type="text" name="city" class="type-feild" placeholder="City"> 

                    <p>Google map Location</p>
                    <input type="url" class="type-feild" name="res_location" placeholder="Google map link" class="inp" required>

                    <h2>Profile image</h2>
                    <p>Insert the images for Restaurant Display profile</p>
                    <input type="file" name="res_image" id="res_image">

                    <button type="button" class="search-btn hover" style="width:80px;height:25px " onclick="nextPrev(-1)">Previous</button>
                    <h3>Confirm Registration</h3>
                    <input type="submit" name="submit" style="margin-left:220px;margin-top:-25px" class="search-btn hover" value="Register" required>
            </div>
        </div>
    
            <div style="overflow:auto;">
            <div style="float:center;">
                  
                 
                </div>
            </div>
    
            <!--To show that there are 4 steps in the registartion process-->
            <div style="text-align:center;margin-top:40px;">
                <span class="step"></span>
                <span class="step"></span>
                <!-- <span class="step"></span>
                <span class="step"></span> -->
            </div>
    
</form>
</div>


    <script>
        var currentTab = 0; //First tab to be showed(0)
        showTab(currentTab); //Display the current tab

        function showTab(n) {
            //This function will display the specified tab of the form
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block"; 
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
        //Run a function
        fixStepIndicator(n)
        }

        function nextPrev(n) {
            // Select the tab to viewed
            var x = document.getElementsByClassName("tab");// Exit current tab when invalid
            if (n == 1 && !validateForm()) return false;
                x[currentTab].style.display = "none";
                currentTab = currentTab + n;
            // At end
            if (currentTab >= x.length) {
                document.getElementById("regForm").submit();
                return false;
            }
        showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    valid = false;
                }
            }
            // Mark as finish when 
            if (valid) {
                 document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; 
        }

        function fixStepIndicator(n) {
            var i, x = document.getElementsByClassName("step");// This removes active class 
                for (i = 0; i < x.length; i++) {
                    x[i].className = x[i].className.replace(" active", "");
                }
            x[n].className += " active";
        }
</script>

<script>
        var check = function() {
            if (document.getElementById('res_password').value == document.getElementById('confirm_password').value){
                    document.getElementById('message').style.color = 'green';
                    document.getElementById('message').innerHTML = 'Password is matching';
            } 
            else{
                document.getElementById('message').style.color = 'red';
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
