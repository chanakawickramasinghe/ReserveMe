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
        <link href="../../CSS/footer.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <!--Start of nav-->
        <div class="topnav" id="myTopnav">
           <a href="customer-home.php"><img class = "logo" src="../../images/logo.png"></a>
            <a class="navtab" href="../../index.php">Logout</a>
            <a class="navtab" href="customer-profile.php">Profile</a>
            <a class="navtab" href="reservation_details.php">Reservations</a>
		    <a class="navtab" href="../../includes/logged_contact.php">Contact</a>
		    <a class="navtab" href="../../includes/logged_about.php">About</a>
		    <a class="navtab" href="javascript:void(0);" id="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a>   
        </div>
        <br><br>
        <div class="title_text">
        <h1 class="div-c">Edit <font color="orange">Details</font></h1>
        </div>
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
                    <center>
                        <table class=\"form-edit-profile\">
                            <tr>
                                <th>Your Name :</th>
                                <td><input type=\"text\" name=\"EditName\" placeholder=\"ex: John Shelby\" value=\"{$row['user_name']}\" required pattern=\"[a-zA-Z][a-zA-Z ]{2,}\"></td>
                            </tr>
                            <tr>
                                <th>Email Address :</th>
                                <td><input type=\"email\" name=\"EditEmail\" placeholder=\"ex: example@reserveme.lk\" value=\"{$row['email']}\" required=\"\" oninvalid=\"this.setCustomValidity('Please Enter valid email')\"></td>
                            </tr>
                            <tr>
                                <th>Contact No. :</th>
                                <td><input type=\"text\" name=\"EditContact\" placeholder=\"ex: +94771570227\" value=\"{$row['contact_no']}\" required pattern=\"^\+?\d{11}\"></td>
                            </tr>
                            <tr>
                                <th>Date of Birth : </th>
                                <td><input type=\"date\" name=\"EditDOB\" value=\"{$row['dob']}\" min=\"1930-01-01\" max=\"2002-12-31\" required>
                                </td>
                            </tr>
                            <tr>
                                <th>Postal Number :</th>
                                <td><input type=\"text\" name=\"EditPostalNumber\" placeholder=\"ex : No. 120\" value=\"{$row['postal_number']}\" required></td>
                            </tr>
                            <tr>
                                <th>Street Name : </th>
                                <td><input type=\"text\" name=\"EditStreet\" placeholder=\"ex: Wall Street\" value=\"{$row['street']}\" required></td>
                            </tr>
                            <tr>
                                <th>Living City : </th>
                                <td><input type=\"text\" name=\"EditCity\" placeholder=\"ex: Colombo\" value=\"{$row['city']}\" required></td>
                            </tr>
                            <tr>
                                <th>Password :</th>
                                <td><input type=\"password\" name=\"EditPassword\" placeholder=\"Enter Password\" id=\"password\" onkeyup='check()' 
                                pattern=\"(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$\" 
                                oninvalid=\"this.setCustomValidity('Password must include Uppercase & Lowercase characters with Numbers or Special Characters')\"required></td>
                            </tr>
                            <tr>
                                <th>Confirm Password :</th>
                                <td><input type=\"password\" name=\"EditPassword2\" placeholder=\"Re-Enter Password\" id=\"confirm-password\" onkeyup='check()'
                                pattern=\"(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$\" 
                                oninvalid=\"this.setCustomValidity('Password must include Uppercase & Lowercase characters with Numbers or Special Characters')\"required></td>
                            </tr>
                            <tr>
                                <td colspan=\"2\"><p><span id='message' ></span></p></td>
                            </tr>
                            
                        </table>
                        </center>


                   
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


	<!--Include footer.php-->
    <div class="footer1"><?php include "../../includes/footer.php" ?></div>
    <!--script for slideshow-->
    <script src="../../js/onClickNav.js"></script>

    </body>
</html>
