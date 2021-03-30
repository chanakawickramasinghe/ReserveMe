<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReserveMe</title>
    <!--web-icon-->
    <link href="../../images/logo.png" rel="shortcut icon"/>
    <!--fontawesome-------------------->
    <script src="https://kit.fontawesome.com/20026fc328.js" crossorigin="anonymous"></script>
    <!--stylesheet-------------------->
	<link rel="stylesheet" type="text/css" href="../../CSS/nav.css">
    <link rel="stylesheet" href="../../CSS/footer.css">   
    <link rel="stylesheet" href="../../CSS/preorder.css">
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
    <!--End of nav-->
    
    <!--Start of Ongoing Card Section-->
        <!--Start of Ongoing Card Section-->
        <div class="title_text">
            <h3>Reservation successfull!</h3>
            <img class="success-img" src= "../../images/success.png">
        </div>
            
        <div class="title_text2">
            <h3>Ongoing <font>Reservaions</font></h3>
        </div>

        <section class="food">
            <div class="food-container">
                <div class="food-box">
                    <h3 class="name">KFC</h3> 
                    <img class="food-img" src= "../../images/4.jpg">
                    <br>
                    <i class="fas fa-map-marker-alt">Colombo</i>
                    <br>
                    <h4 class="">2020 Dec 04</h4>
                    <h4 class="">8.00pm</h4>
                    <h4 class="">For 2</h4>
                    <h4 class="">Table</h4>
                    <button type="button" class="food-btn" onclick="" style="cursor: pointer;">Cancel</button>  
                </div>
            </div>

            <div class="food-container">
                <div class="food-box">
                    <h3 class="name">KFC</h3> 
                    <img class="food-img" src= "../../images/10.jpg">
                    <br>
                    <i class="fas fa-map-marker-alt">Colombo</i>
                    <br>
                    <h4 class="">2021 Feb 19</h4>
                    <h4 class="">8.00pm</h4>
                    <h4 class="">For 4</h4>
                    <h4 class="">Hall</h4>
                    <button type="button" class="food-btn" onclick="" style="cursor: pointer;">Cancel</button>  
                </div>
            </div>

            <div class="food-container">
                <div class="food-box">
                    <h3 class="name">Fab</h3> 
                    <img class="food-img" src= "../../images/8.jpg">
                    <br>
                    <i class="fas fa-map-marker-alt">Negombo</i>
                    <br>
                    <h4 class="">2020 Apr 14</h4>
                    <h4 class="">10.00am</h4>
                    <h4 class="">For 6</h4>
                    <h4 class="">Hall</h4>
                    <button type="button" class="food-btn" onclick="" style="cursor: pointer;">Cancel</button>  
                </div>
            </div>
        </section>           
        <!--End of Ongoing Card Section-->
    <!--End of Ongoing Card Section-->

    <?php

include('../../includes/connection.php');
include('../../includes/session.php');

if(isset($_GET['order_id'])){
    $order_id = $_GET['order_id'];
    $reservation_sql = "SELECT * from temp_hall_reservation WHERE temp_reservation_id = $order_id ";
    $reservation_result  = mysqli_fetch_assoc(mysqli_query($connection,$reservation_sql));
	checkSession();
    $userID = $_SESSION["userID"]; //session id
	
    $reservation_insert_sql = "INSERT INTO hall_reservation(hall_id,customer_id,capacity,reservation_date,reservation_time,advance_fee,status_code) 
    VALUES ('". $reservation_result['hall_id'] ."','$userID','". $reservation_result['capacity'] ."','". $reservation_result['reservation_date'] ."','". $reservation_result['reservation_time'] ."','". $reservation_result['advance_fee'] ."','1')";
  

    if (mysqli_query($connection,$reservation_insert_sql) == TRUE) {
        $delete_temp_reservation_sql = "DELETE from temp_hall_reservation WHERE temp_reservation_id = $order_id ";
        $delete_reservation_query  = mysqli_fetch_assoc(mysqli_query($connection,$delete_temp_reservation_sql));
        
        
    }else{
            //need to show error message
        }
     
}
?>  

    <!--Include footer.php-->
    <div><?php include "../../includes/footer.php" ?></div>

    <!--script for onClickNav() for the navigation menu-->
    <script src="../../js/onClickNav.js"></script>
</body>
</html>


