<?php include('../../includes/connection.php') ?>
<?php include('../../includes/session.php') ?>

<html>
    <head>
        <title>Edit My Profile</title>
        <link rel="stylesheet" href="../../CSS/nav.css">
        <link rel="stylesheet" href="../../CSS/style.css">
    </head>
    <body>
        <!--Start of nav-->
        <div class="topnav" id="myTopnav">
            <a href="../../index.php">Logout</a>
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
            checkSession();
            $userID = $_SESSION["userID"];
            $selectusers = "SELECT * FROM customer WHERE user_id='$userID'";

            $userquery = mysqli_query($connection,$selectusers);

            echo "<div class=\"row-100\">";

                while($row = mysqli_fetch_assoc($userquery)){
                    
                    echo "
                    <div class=\"row-100\">
                        <div class=\"form-edit\">
                            <form action=\"customer-profile-edit-submit.php\" method=\"post\">                   
                                <p>Name</p>
                                <input type=\"text\" name=\"EditName\" placeholder=\"Enter Name\" value=\"{$row['user_name']}\" required>    

                                <p>Address</p>
                                <input type=\"text\" name=\"EditEmail\" placeholder=\"Enter Email\" value=\"{$row['email']}\" required>

                                <p>Contact number</p>
                                <input type=\"text\" name=\"EditContact\" placeholder=\"Enter Contact No.\" value=\"{$row['contact_no']}\" required>

                                <p>Postal Number</p>
                                <input type=\"text\" name=\"EditPostalNumber\" placeholder=\"Enter Postal Number\" value=\"{$row['postal_number']}\" required>    

                                <p>Street Name</p>
                                <input type=\"text\" name=\"EditStreet\" placeholder=\"Enter Street Name\" value=\"{$row['street']}\" required>

                                <p>City</p>
                                <input type=\"text\" name=\"EditCity\" placeholder=\"Enter City\" value=\"{$row['city']}\" required>

                                <p>Password</p>
                                <input type=\"password\" name=\"EditPassword\" placeholder=\"Enter Password\" id=\"password\" onkeyup='check()' required>

                                <p>Confirm Password</p>
                                <input type=\"password\" name=\"EditPassword2\" placeholder=\"Re-Enter Password\" id=\"confirm-password\" onkeyup='check()' required>
                                <p><span id='message' ></span></p>

                                <p></p>
                                <center> 
                                    <input type=\"hidden\" value=" .$row['user_id']. " name=\"EditID\">  
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