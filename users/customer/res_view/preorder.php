<?php include('../../../includes/connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReserveMe</title>
    <!--web-icon-->
    <link href="../../../images/logo.png" rel="shortcut icon"/>
    <!--fontawesome-------------------->
    <script src="https://kit.fontawesome.com/20026fc328.js" crossorigin="anonymous"></script>
    <!--stylesheet-------------------->
	<link rel="stylesheet" type="text/css" href="../../../CSS/nav.css">
	<link rel="stylesheet" type="text/css" href="../../../CSS/main.css">
    <link rel="stylesheet" href="../../../CSS/footer.css">   
    <link rel="stylesheet" href="../../../CSS/preorder.css">
</head>

<body>
    <!--Start of nav-->
    <div class="topnav" id="myTopnav">
        <a href="../customer-home.php"><img class = "logo" src="../../../images/logo.png"></a>
		<a class="navtab" href="../../../index.php">Logout</a>
		<a class="navtab" href="../customer-profile.php">Profile</a>
		<a class="navtab" href="../reservation_details.php">Reservations</a>
		<a class="navtab" href="../../../includes/logged_contact.php">Contact</a>
		<a class="navtab" href="../../../includes/logged_about.php">About</a>
		<a class="navtab" href="javascript:void(0);" id="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a>
	</div>
    <!--End of nav-->
    
    <!--Start of Ongoing Card Section-->
    <div class="title_text">
        <h3>Pre<font>Order</font> Me<font>nu</font></h3>
    </div>
    <form method="post" action="checkout.php">  
        <table class="preorder" id="" style="border:0">   
        <?php
            $search_menu = "SELECT * FROM menu WHERE item_avail='1' And preorder_avail = '1'";
                $result_menu = mysqli_query($connection,$search_menu);
                while($row = mysqli_fetch_assoc($result_menu)){
                    echo "
                    <tr>
                        <td>".$row['item_name']."</td>
                        <td>".$row['item_price']."</td> 
                        <td><input type=\"number\" id=\"quantity\" name=\"quantity\" min=\"1\" max=\"5\"></td>                
                    </tr>";
                }
            

            echo"<tr>
                    <td></td>
                    <td></td>
                    <td><input class=\"food-btn\" type=\"submit\" value=\"Confirm\"> </td>                
                </tr>";
		?>
</table>
    </form> 
    <!--End of Ongoing Card Section-->

    <!--Include footer.php-->
    <div><?php include "../../../includes/footer.php" ?></div>

    <!--script for onClickNav() for the navigation menu-->
    <script src="../../../js/onClickNav.js"></script>

</body>
</html>



<?php

include('../../../includes/session.php');

if(isset($_POST['submit'])){
	
    //Assign data from login form to variables
	$email = $_POST['email'];
	$password = md5($_POST['password']);
    
    //Select User from database
    $userQueryCustomer = "SELECT * FROM customer WHERE email ='$email' and password='$password'";
    $userQueryRes="SELECT * FROM restaurant WHERE res_email='$email' and res_password='$password'";
    $userQueryAdmin="SELECT * FROM admins WHERE admin_email='$email' and admin_password='$password'";
    $userQueryEmployee="SELECT * FROM employee WHERE emp_email='$email' and emp_password='$password'";

    $userResult1=mysqli_query($connection, $userQueryCustomer);
    $userResult2=mysqli_query($connection, $userQueryRes);
    $userResult3=mysqli_query($connection, $userQueryAdmin);
    $userResult4=mysqli_query($connection, $userQueryEmployee);

    //print_r($userResult);
    
    //User Exists
    if (mysqli_num_rows($userResult1) == 1) {
        $userRow = mysqli_fetch_array($userResult1);
        
        checkSession();  //create sessions
        $_SESSION["name"] = $userRow['user_name'];
        $_SESSION["userID"] = $userRow['user_id'];
        $_SESSION["userType"] = 'Customer';
        $active_status= $userRow['active_status'];
        $_SESSION["email"] = $email;

        if($active_status == 1){
            $log_customer_sql = "INSERT INTO log (user_id, user_type, date_time, activity) 
            VALUES ('".$_SESSION["userID"]."','".$_SESSION["userType"]."',NOW(),'Login Successfully')";

            $execute_querry = mysqli_query($connection, $log_customer_sql);

            header( "Location:../users/customer/customer-home.php" );
        }
        else{
            header("Location:../users/activate-account.php");
        }      
    }
    
    //Restaurant Login
    else if(mysqli_num_rows($userResult2) == 1){ 

        $userRow = mysqli_fetch_array($userResult2);
        checkSession();  //create sessions
        $_SESSION["name"] = $userRow['res_name'];
        $_SESSION["resID"] = $userRow['res_id'];
        $_SESSION["userType"] = 'Restaurant';
        $active_status= $userRow['active_status'];
        $_SESSION["email"] = $email;

        if($active_status == 1){
            $log_res_sql = "INSERT INTO log (user_id, user_type, date_time, activity) 
            VALUES ('".$_SESSION["resID"]."','".$_SESSION["userType"]."',NOW(),'Login Successfully')";

            $execute_querry = mysqli_query($connection, $log_res_sql);

            header( "Location:../users/restaurant/restaurant-home.php" );
        }
        else{
            header("Location:../users/activate-account.php");
        }    
    }
     
    

    
}

mysqli_close($connection);
     
?>