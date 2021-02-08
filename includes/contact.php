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
			<a href="../index.php"><img class = "logo" src="../images/logo.png"></a>
		    <a class="navtab" href="../users/customer/customerReg.php">Register</a>
		    <a class="navtab" href="login.php">Login</a>
		    <a class="navtab" href="about.php">About</a>
		    <a class="navtab" href="javascript:void(0);" id="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a> 
		</div>
		<!--End of nav-->
        
        <br>
        <div class="contact-container">
        <img src="../images/Contact-us.jpg" alt="Contact-Us image" style="height:230px;width:100%">
        <h1 class="centered"> We would love to hear from you..!</h1>
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
      
        <input class="type-feild" type="text" name="fname" placeholder="Full Name" required><br>
        <input class="type-feild" type="email" name="email" placeholder="Email Address" required><br>
        <input class="type-feild" type="tel" name="mobile" placeholder="Mobile Number(Optional)" pattern='^\+?\d{9,11}'><br>
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
    <div><?php include "../includes/footer.php" ?></div>

    <?php include('connection.php'); ?>

    <?php
     
    if(isset($_POST['submit'])){
        //Assign input data from form to variables
        $comment=$_POST['comment'];
        $name= $_POST['fname'];
        $email= $_POST['email'];
        $mobile= $_POST['mobile'];
        $msg= $_POST['msg'];

        //Insert into database

        $commentQuery="INSERT INTO contact_us(comment,name,email,mobile,message) VALUES('$comment','$name','$email','$mobile','$msg')" ;
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