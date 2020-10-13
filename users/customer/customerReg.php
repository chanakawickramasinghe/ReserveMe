<html>  
<head>
    <title>Customer Registration</title>
    <link rel="stylesheet" type="text/css" href="../../CSS/customer_Reg.css">   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
    
<body class="login-body">

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
                    <input type="text" name="contact" class="type-feild" placeholder="Mobile number"> </td>

                    <td margin-left="30px">
                    <p><b>Date of birth</p>
                    <input type="date" name="dob" class="type-feild"> 
                    
                    <p>Address<p>
                    <p> Number </p>
                    <input type="text" name="pnumber" class="type-feild" placeholder="Number"> 

                    <p>Street</p>
                    <input type="text" name="street" class="type-feild" placeholder="Street"> 

                    <p>City</p>
                    <input type="text" name="city" class="type-feild" placeholder="City"> </td></tr> 
                    </table>          
 <br>
                   
                   <p align="center"> <input type="submit" name="submit"  class="search-btn hover" value="Register"  onclick="alertbox()" required></p>
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
</body>

</html>