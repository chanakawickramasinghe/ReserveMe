<html>  
<head>
    <title>Employee Registration</title> 
    <link href="../../images/logo.png" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link the style sheets -->
    <link href="../../CSS/login.css" rel="stylesheet" type="text/css" > 
    <link href="../../CSS/nav.css" rel="stylesheet" type="text/css">
    <link href="../../CSS/footer.css" rel="stylesheet" type="text/css">     
    <link href="../../CSS/add-employee.css" rel="stylesheet" type="text/css" > 
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
                <h1 align="center">Add Employee</h1><br>

            <h2 class="error-msg"><?php include_once('../../includes/message.php'); ?></h2>

                <form action="employee-add-submit.php" method="post">                   
                  
                <table style="width:750px;float:center;align-items:center">
                <tr>
                    <td>
                    <img src="../../images/form_icons/user.png" alt="user" class="icons">
                    <label for="name">Name</label><br>                   
                    <input type="text"  name="name" class="reg-type-feild" placeholder="Employee Name" required>    
                    
                    <p>
                    <img src="../../images/form_icons/mail.png" alt="user" class="icons">
                    <label for="email">Email address</label><br>
                    <input type="email" name="email" class="reg-type-feild" placeholder="Employee Email" required >
                    </p>

                    <img src="../../images/form_icons/phone-call.png" alt="user" class="icons">
                    <label for="contact">Contact number</label><br>
                    <input type="tel" name="contact" class="reg-type-feild" placeholder="Employee Mobile Number" pattern='^\+?\d{0,13}' >

                    <p>
                    <img src="../../images/form_icons/padlock.png" alt="user" class="icons">
                    <label for="password">Password</label><br>
                    <input type="password" name="password" class="reg-type-feild" placeholder="Enter Password" id="password"  required>
                    </p>
                    
                    <img src="../../images/form_icons/password.png" alt="user" class="icons">
                    <label for="password2">Confirm Password</label><br>
                    <input type="password" name="password2" class="reg-type-feild" placeholder="Re-Enter Password" id="confirm_password" onkeyup='check()' required>
                    <P id='message' ></p>

                    <p align="center"> <input type="submit" name="submit"  class="btn" value="Register " required></p>
                    </td>
                </tr> 
                </table>          
            </form>    
            
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
    
    </script>
</body>
</html>
