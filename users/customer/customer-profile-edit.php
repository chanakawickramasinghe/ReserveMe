<?php include('../../includes/connection.php') ?>
<!-- <?php include('includes/session.php') ?> -->

<html>
    <head>
        <title>Edit My Profile</title>
        <link rel="stylesheet" href="../../CSS/nav.css">
        <link rel="stylesheet" href="../../CSS/style.css">
    </head>
    <body>
        <!--Start of nav-->
        <div class="topnav" id="myTopnav">
            <a href="#logout">Logout</a>
            <a href="customer-profile.php">My Profile</a>
            <a href="#contact">Contact</a>
            <a href="#about">About</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
            <img class = "logo" src="../../images/test.jpg">
        </div>
        </br>
        <div class="row-100"><h2 class="error-msg"><?php include_once('../../includes/message.php'); ?></h2></div>

        <?php
            
            $userID = "111"; //$_SESSION["userID"];
            $selectusers = "SELECT * FROM customer WHERE cusId='$userID'";

            $userquery = mysqli_query($connection,$selectusers);

            echo "<div class=\"row-100\">";

                while($row = mysqli_fetch_assoc($userquery)){
                    
                    echo "
                    <div class=\"row-100\">
                        <div class=\"form-edit\">
                            <form action=\"customer-profile-edit-submit.php\" method=\"post\">                   
                                <p>Name</p>
                                <input type=\"text\" name=\"EditName\" placeholder=\"Enter Name\" value=\"{$row['cusName']}\" required>    

                                <p>Address</p>
                                <input type=\"text\" name=\"EditAddress\" placeholder=\"Enter Address\" value=\"{$row['cusAddress']}\" required>

                                <p>Contact number</p>
                                <input type=\"text\" name=\"EditContact\" placeholder=\"Enter Contact No.\" value=\"{$row['cusContactNo']}\">

                                <p>Password</p>
                                <input type=\"password\" name=\"EditPassword\" placeholder=\"Enter Password\" id=\"password\" onkeyup='check()' required>

                                <p>Confirm Password</p>
                                <input type=\"password\" name=\"EditPassword2\" placeholder=\"Re-Enter Password\" id=\"confirm-password\" onkeyup='check()' required>
                                <p><span id='message' ></span></p>

                                <p></p>
                                <center> 
                                    <input type=\"hidden\" value=" .$row['cusId']. " name=\"EditID\">  
                                    <button type=\"submit\" name=\"btn-Update\" class=\"btn\" required > Update Details </button>
                                </center>
                                
                            </form>
                        </div>
                    </div>"

                    ;
            }     
    ?>

    <script>
        var check = function() {
            if (document.getElementById('password').value == document.getElementById('confirm-password').value){
                    document.getElementById('message').style.color = 'green';
                    document.getElementById('message').innerHTML = 'Password is matching';
            } 
            else{
                document.getElementById('message').style.color = 'red';
                //document.getElementById('message').style.backgroundColor = 'white';
                document.getElementById('message').innerHTML = 'Password Does Not Match';
            }
        }
    </script>


    </body>
</html>