<?php include('../../includes/connection.php') ?>
<?php include('../../includes/session.php') ?>

<html>
    <head>
        <title>Edit My Profile</title>
        <link rel="stylesheet" href="../../CSS/nav.css">
        <link rel="stylesheet" href="../../CSS/style.css">
        <link rel="stylesheet" href="../../CSS/main.css">
        <!--web-icon-->
        <link href="../../images/logo.png" rel="shortcut icon"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <!--Start of nav-->
        <div class="topnav" id="myTopnav">
           <a href="customer-home.php"><img class = "logo" src="../../images/logo.png"></a>
            <a class="navtab" href="../../index.php">Logout</a>
		    <a class="navtab" href="customer-profile.php">My Profile</a>
		    <a class="navtab" href="../../includes/logged_contact.php">Contact</a>
		    <a class="navtab" href="../../includes/logged_about.php">About</a>
		    
        </div>
        <br><br>
        <h1 class="div-c">Edit Details</h1>
        <div class="row-100"><h2 class="error-msg"><?php include_once('../../includes/message.php'); ?></h2></div>

        <?php
            checkSession();
            $userID = $_SESSION["userID"];
            $selectusers = "SELECT * FROM customer WHERE user_id='$userID'";

            $userquery = mysqli_query($connection,$selectusers);

            echo "<div class=\"row-100\">";

                while($row = mysqli_fetch_assoc($userquery)){
                    
                    echo "
                    <form action=\"customer-profile-edit-submit.php\" method=\"post\"> 
                        <table class=\"form-edit-profile\">
                            <tr>
                                <th>Name :</th>
                                <td><input type=\"text\" name=\"EditName\" placeholder=\"Enter Name\" value=\"{$row['user_name']}\" required></td>
                            </tr>
                            <tr>
                                <th>Address :</th>
                                <td><input type=\"text\" name=\"EditEmail\" placeholder=\"Enter Email\" value=\"{$row['email']}\" required></td>
                            </tr>
                            <tr>
                                <th>Contact No. :</th>
                                <td><input type=\"text\" name=\"EditContact\" placeholder=\"Enter Contact No.\" value=\"{$row['contact_no']}\" required></td>
                            </tr>
                            <tr>
                                <th>Date of Birth : </th>
                                <td><input type=\"date\" name=\"EditDOB\" value=\"{$row['dob']}\" required>
                                </td>
                            </tr>
                            <tr>
                                <th>Postal Number :</th>
                                <td><input type=\"text\" name=\"EditPostalNumber\" placeholder=\"Enter Postal Number\" value=\"{$row['postal_number']}\" required></td>
                            </tr>
                            <tr>
                                <th>Street Name : </th>
                                <td><input type=\"text\" name=\"EditStreet\" placeholder=\"Enter Street Name\" value=\"{$row['street']}\" required></td>
                            </tr>
                            <tr>
                                <th>City : </th>
                                <td><input type=\"text\" name=\"EditCity\" placeholder=\"Enter City\" value=\"{$row['city']}\" required></td>
                            </tr>
                            <tr>
                                <th>Password :</th>
                                <td><input type=\"password\" name=\"EditPassword\" placeholder=\"Enter Password\" id=\"password\" onkeyup='check()' required></td>
                            </tr>
                            <tr>
                                <th>Confirm Password :</th>
                                <td><input type=\"password\" name=\"EditPassword2\" placeholder=\"Re-Enter Password\" id=\"confirm-password\" onkeyup='check()' required></td>
                            </tr>
                            <tr>
                                <td colspan=\"2\"><p><span id='message' ></span></p></td>
                            </tr>
                            
                        </table>


                   
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
