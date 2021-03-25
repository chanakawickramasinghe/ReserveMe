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
	<!-- <link href="../CSS/style.css" rel="stylesheet" type="text/css"/> -->

	<!--FontAwesome-------->
    <script crossorigin="anonymous" src="https://kit.fontawesome.com/70a642cd7c.js"></script>
    <!--web-icon-->
    <link href="../images/logo.png" rel="shortcut icon"/>
    <style>
.container {
  position: relative;
  text-align: center;
  color: white;
  font-family:Times;
}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size:50px;
}
</style>
</head>
<body>
<!-- main-section-------------
<section class="main"> -->
		<!--Start of nav-->
		<div class="topnav" id="myTopnav">
			<a href="../users/customer/customer-home.php"><img class = "logo" src="../images/logo.png"></a>
		    <a class="navtab" href="../index.php">Logout</a>
            <a class="navtab" href="../users/customer/customer-profile.php">Profile</a>
            <a class="navtab" href="../users/customer/reservation_details.php">Reservations</a>
		    <a class="navtab" href="logged_about.php">About</a>
		    <a class="navtab" href="javascript:void(0);" id="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a>
		</div>
		<!--End of nav-->
        <br>
        <div class="container"><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <h1 class="centered"> <font color=black>We would <font color=orange>love</font> to hear from <font color=orange>you</font>..!</font></h1>
        </div>

        <div style="margin-left:10%">
        <table>
        <tr>
        <td>
        <form action="logged_contact.php" method="post" onsubmit="myFunction()">

        <select name="comment" id="comment" class="type-feild-comment" default="How can we help you">
        <option value="q0" disabled selected value> -- select an option -- </option>
        <option value="Incorrect/outdated information on a page.">I found incorrect/outdated information on a page.</option>
        <option value="Photo/Review Report">There is a photo/review that is bothering me and I would like to report it.</option>
        <option value="Website is not working">The website is not working the way they should.</option>
        <option value="Feedback / Suggestions">I would like to give feedback / suggestions</option>
        <option value="Complaint">Complaint</option>
        <option value="Other">Other</option>
        </select><br>
      
        <textarea class="type-feild-comment"  style="height:200px;overflow:auto" scrolling="yes" type="text" name="msg" placeholder="Type message......" ></textarea><br>
        <input type="submit" name="submit"  class="hero-button" value="Post" style="margin-left:30px"  required>
        </form>
        </div>
        </td>

        <td>
        <img src="../images/contact-us-woman.jpg" height="450px" width="450px" alt="">
        
        
        
        </td>
   
        </tr>
        </table>
        </div>

        <!--Include footer.php-->
    <div><?php include "../includes/footer.php" ?></div>

    <?php include('connection.php'); ?>
    <?php include('session.php'); ?>

    <?php
     
     date_default_timezone_set('Asia/Colombo');
     $today_date = date("Y-m-d H:i:s");

    if(isset($_POST['submit'])){
        //Assign input data from form to variables
        checkSession();
        $comment=$_POST['comment'];
        $name= $_SESSION["name"];
        $email= $_SESSION["email"];
        $msg= $_POST['msg'];

        //Insert into database

        $commentQuery="INSERT INTO contact_us(comment,name,email,message,date_time) VALUES('$comment','$name','$email','$msg','$today_date')" ;
        if (mysqli_query($connection,$commentQuery) == TRUE) {
            // $message = base64_encode(urlencode("Message Sent Successfully"));
            // header('Location:contact.php?msg=' . $message);
            exit();
        } 
        
        else {
            //  $message = base64_encode(urlencode("SQL Error while Registering"));
            //  header('Location:customerReg.php?msg=' . $message);
            exit();
        }

    }
    
    
    
    mysqli_close($connection);
    
    ?>
<script>
function myFunction() {
confirm("The form was submitted");
}
</script>

<!--script for slideshow-->
<script src="../js/onClickNav.js"></script>
    
</body>
</html>
