<html>  
<head>
    <title>Customer Registration</title>
    <link rel="stylesheet" type="text/css" href="../../CSS/customer_Reg.css">   

</head>
    
<body class="register-body">

        <div class="row-100">
            <div class="login-box">
                <br>
            <img src="../../images/profile.png" class="avatar">
            <br>
                <h1 align="center">Register Here</h1>
                
              

            <h2 class="error-msg"><?php include_once('../../includes/message.php'); ?></h2>

                <form action="register-submit.php" method="post">                   
                    <p>Name</p>
                    <input type="text" class="type-feild" name="name" placeholder="Your name" required>    

                    <p>Email address</p>
                    <input type="email" name="email" class="type-feild" placeholder="your email" required >

                    <p>Password</p>
                    <input type="password" name="password" class="type-feild" placeholder="Enter Password" id="password" onkeyup='check()' required>

                    <p>Confirm Password</p>
                    <input type="password" name="password2" class="type-feild" placeholder="Re-Enter Password" id="confirm_password" onkeyup='check()' required>
                    <span id='message' ></span>

                    <p>Contact number</p>
                    <input type="text" name="contact" class="type-feild" placeholder="Mobile number">            

                    <input type="submit" name="submit"  class="btn" value="Register" onclick="alertbox()" required>
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
                document.getElementById('message').style.backgroundColor = 'white';
                document.getElementById('message').innerHTML = 'Password does not match';
            }
        }
    
        </script>
</body>

</html>