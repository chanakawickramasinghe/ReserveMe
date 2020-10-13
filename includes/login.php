<?php include('connection.php') ?>
<?php include('session.php') ?>

<!DOCTYPE html>
<html>
    
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="../CSS/customer_reg.css">  
</head>

<body class="login-body">

    <div class="row-100">  
    
        <div class="login-box" style="width:350px">
        <br>
        <br>
        <h3 class="error-msg"><?php include('message.php'); ?></h3>
        
        <img src="../images/profile.png" class="avatar">

            <h1 align="center">Login Here</h1>
                <form action="login-submit.php" method="post">
                <div>    
                <p><b>E-mail</b></p>
                    <input type="text" name="email" class="type-feild"  style="width:200px" placeholder="Enter E-mail" required>
                    <p><b>Password</b></p>
                    <input type="password" name="password" class="type-feild" style="width:200px" placeholder="Enter Password" required>
                   
                </div>
                <br>
                   <p align="center"> <input type="submit" name="submit" class="search-btn hover" value="Login"> </p>
                </form>  

        </div>
    </div> 
   
</body>
  
</html>