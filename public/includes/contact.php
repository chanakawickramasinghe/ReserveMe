<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../images/logo.png" rel="shortcut icon"/>
    <title>Contact Us</title>
    <!--stylesheet-------------------->
    <link href="../CSS/customer-reg.css" rel="stylesheet" type="text/css">
	<link href="../CSS/main.css" rel="stylesheet" type="text/css">
	<link href="../CSS/nav.css" rel="stylesheet" type="text/css">
    <link href="../CSS/footer.css" rel="stylesheet" type="text/css">
    
	<!--FontAwesome-------->
    <script crossorigin="anonymous" src="https://kit.fontawesome.com/70a642cd7c.js"></script>
    <!--web-icon-->
    <link href="../images/logo.png" rel="shortcut icon"/>

</head>
<body>

		<!--Start of nav-->
		<div class="topnav" id="myTopnav">
			<a href="../../index.php"><img class = "logo" src="../images/logo.png"></a>
		    <a class="navtab" href="../../src/customer/customerReg.php">Register</a>
		    <a class="navtab" href="login.php">Login</a>
            <a class="navtab active" href="contact.php">Contact</a>
		    <a class="navtab" href="about.php">About</a>
		    <a class="navtab" href="javascript:void(0);" id="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a> 
		</div>
		<!--End of nav-->
        
        <br>
        <div class="contact-container"><br/><br/><br/>
        <h1 class="centered"> <font color=black>We would <font color=orange>love</font> to hear from <font color=orange>you</font>..!</font></h1>
        </div>

        <div style="margin-left:10%">
        <table>
        <tr>
        <td>
        <form action="contact.php" method="post" onsubmit="myFunction()">

        <select name="comment" id="comment" class="type-feild-comment" default="How can we help you">
        <option value="q0" disabled selected value> -- select an option -- </option>
        <option value="Incorrect/outdated information on a page.">I found incorrect/outdated information on a page.</option>
        <option value="Photo/Review Report">There is a photo/review that is bothering me and I would like to report it.</option>
        <option value="Website is not working">The website is not working the way they should.</option>
        <option value="Feedback / Suggestions">I would like to give feedback / suggestions</option>
        <option value="Complaint">Complaint</option>
        <option value="Other">Other</option>
        </select><br>
      
        <input class="type-feild-comment" type="text" name="fname" placeholder="Full Name" required><br>
        <input class="type-feild-comment" type="email" name="email" placeholder="Email Address" required><br>
        <textarea class="type-feild-comment"  style="height:200px;overflow:auto" scrolling="yes" type="text" name="msg" placeholder="Type message......" ></textarea><br>
        <input type="submit" name="submit"  class="hero-button" value="Post" style="margin-left:30px"  required>
        </form>
        </div>
        </td>

        <td>
        <img src="../images/contact-us-woman.jpg" alt="">
        
        
        
        </td>
   
        </tr>
        </table>
        </div>

        <!--Include footer.php-->
    <div><?php include('footer.php'); ?></div>

    <?php include('../../config/connection.php'); ?>

    <?php

    date_default_timezone_set('Asia/Colombo');
    $today_date = date("Y-m-d H:i:s");
     
    if(isset($_POST['submit'])){
        //Assign input data from form to variables
        $comment=$_POST['comment'];
        $name= $_POST['fname'];
        $email= $_POST['email'];
        $msg= $_POST['msg'];

        //Insert into database

        $commentQuery="INSERT INTO contact_us(comment,name,email,message,date_time) VALUES('$comment','$name','$email','$msg','$today_date')" ;
        mysqli_query($connection,$commentQuery);
        exit(); 
    }
    
    
    
    mysqli_close($connection);
    
    ?>

    <script>
        function myFunction() {
        confirm("The form was submitted.");
        }
    </script>

<!--script for slideshow-->
<script src="../js/onClickNav.js"></script>
    
</body>
</html>