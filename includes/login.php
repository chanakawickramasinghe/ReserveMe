<?php include('connection.php') ?>
<!-- <?php include('includes/session.php') ?> -->

<!DOCTYPE html>
<html>
    
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">  
</head>
    
<body class="login-body">
    <div class="row-100">  
        <div class="login-box">

        <h3 class="error-msg"><?php include('message.php'); ?></h3>

       <!--  <img src="images/logins.png" class="avatar">-->
            <h1>Login Here</h1>
                <form action="login-submit.php" method="post">
                    <p>E-mail</p>
                    <input type="text" name="email" placeholder="Enter E-mail" required>
                    <p>Password</p>
                    <input type="password" name="password" placeholder="Enter Password" required>
                    <input type="submit" name="submit" value="Login"> 
                </form>  

        </div>
    </div> 
        
</body>
    
</html>