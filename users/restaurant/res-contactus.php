<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../images/logo.png" rel="shortcut icon"/>
    <title>Contact Us</title>
    <!--stylesheet-------------------->
    <link href="../../CSS/customer-reg.css" rel="stylesheet" type="text/css">
	<link href="../../CSS/main.css" rel="stylesheet" type="text/css">
	<link href="../../CSS/nav.css" rel="stylesheet" type="text/css">
    <link href="../../CSS/footer.css" rel="stylesheet" type="text/css">
    
	<!--FontAwesome-------->
    <script crossorigin="anonymous" src="https://kit.fontawesome.com/70a642cd7c.js"></script>
    <!--web-icon-->
    <link href="../images/logo.png" rel="shortcut icon"/>

</head>
<body>
<!-- main-section------------->
        <div class="contact-container">
        <img src="../../images/Contact-us.jpg" alt="Contact-Us image" style="height:230px;width:100%">
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
      
        

        <input class="type-feild"  style="height:180px;overflow:auto" type="text" name="msg" placeholder="Type message......" ><br>
        <center><input type="submit" name="submit"  class="hero-button" value="Post" style="margin-left:30px"  required></center>
        </form>
        </div>
        </td>

        <td>
        <img width="250vw" src="../../images/contact-us-woman.jpg" alt="">
        
        
        
        </td>
   
        </tr>
        </table>
        </div>


    <?php include('../../includes/connection.php'); ?>

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