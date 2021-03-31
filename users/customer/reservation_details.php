<?php include('../../includes/connection.php'); ?>
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
    <link rel="stylesheet" href="../../CSS/main.css">
    <link rel="stylesheet" href="../../CSS/reservation_details.css">
</head>

<body>
    <!--Start of nav-->
    <div class="topnav" id="myTopnav">
        <a href="customer-home.php"><img class = "logo" src="../../images/logo.png"></a>
		<a class="navtab" href="../../index.php">Logout</a>
		<a class="navtab" href="customer-profile.php">Profile</a>
		<a class="navtab active" href="reservation_details.php">Reservations</a>
		<a class="navtab" href="../../includes/logged_contact.php">Contact</a>
		<a class="navtab" href="../../includes/logged_about.php">About</a>
		<a class="navtab" href="javascript:void(0);" id="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a>
	</div>
    <!--End of nav-->
    
    <!--Start of Ongoing Card Section-->
    <div class="title_text">
        <p class="success-msg"><?php include_once('../../includes/message.php'); ?></p>            
    </div>

    <div class="title_text">
        <h3>Table <font color="orange">Reservations</font></h3>
    </div>
    <section class="food">
            <?php
                include('../../includes/connection.php');
                include('../../includes/session.php'); 

                checkSession();
                $cus_id= $_SESSION["userID"];
                

                $sql = "SELECT * FROM reservation WHERE cus_id=$cus_id ORDER BY date";
                $result = ($connection->query($sql));

                if($result){
                    while($row= mysqli_fetch_assoc($result)){
                        $reservation_id = $row['reservation_id'];
                        $table_id = $row['table_id'];
                        $no_of_guests = $row['no_of_guests'];
                        $date = $row['date'];
                        $time = $row['time'];
                        $reservation_date = $row['reservation_date'];

                        echo "<div class=\"food-container\">
                        <div class=\"food-box\">
                            <i class=\"fas fa-map-marker-alt\">$table_id</i>
                            <br>
                            <h4 class=\"\"><i class=\"far fa-calendar\"></i>$date</h4>
                            <h4 class=\"\"><i class=\"far fa-clock\"></i>$time</h4>
                            <h4 class=\"\"><i class=\"fas fa-users\"></i>$no_of_guests</h4>";
                        if($date>= date("Y-m-d")){
                            echo "
                            <form action=\"reservation-cancel.php\" method=\"POST\">
                            <input type=\"hidden\" id=\"\" name=\"reservation_id\" value=\"$reservation_id\" required>
                            <button type=\"submit\" name=\"cancel\" class=\"food-btn\" onclick=\"return myFunction()\" style=\"cursor: pointer;\">Cancel</button>
                            </form> ";
                        }   else {
                            echo "<br><p>Done </p>";
                        }                    
                        echo "    
                        </div>
                    </div>";            
                    }
                } else {
                    echo "SQL syntex Error..!";
                }


            ?>
    </section> 

    <div class="title_text">
        <h3>Hall <font color="orange">Reservations</font></h3>
    </div>
    <section class="food">
            <?php                

                $sql = "SELECT * FROM hall_reservation WHERE customer_id=$cus_id ORDER BY reservation_date";
                $result = ($connection->query($sql));

                if($result){
                    while($row= mysqli_fetch_assoc($result)){
                        $reservation_id = $row['reservation_id'];
                        $hall_id = $row['hall_id'];
                        $capacity = $row['capacity'];
                        $payment = $row['payment'];
                        $reservation_date = $row['reservation_date'];
                        $reservation_time = $row['reservation_time'];

                        echo "<div class=\"food-container\">
                        <div class=\"food-box\">
                            <i class=\"fas fa-map-marker-alt\">$hall_id</i>
                            <br>
                            <h4 class=\"\"><i class=\"far fa-calendar\"></i>$reservation_date</h4>
                            <h4 class=\"\"><i class=\"far fa-clock\"></i>$reservation_time</h4>
                            <h4 class=\"\"><i class=\"fas fa-users\"></i>$capacity</h4>
                            <h4 class=\"\"><i class=\"far fa-money-bill-alt\"></i>$payment</h4>";
                            
                        if($reservation_date>= date("Y-m-d")){
                            echo "
                            <form action=\"reservation-cancel.php\" method=\"POST\">
                            <input type=\"hidden\" id=\"\" name=\"reservation_id\" value=\"$reservation_id\" required>
                            <button type=\"submit\" name=\"cancel\" class=\"food-btn\" onclick=\"return myFunction()\" style=\"cursor: pointer;\">Cancel</button>
                            </form> ";
                        }   else {
                            echo "<br><p>Done </p>";
                        }                    
                        echo "    
                        </div>
                    </div>";            
                    }
                } else {
                    echo "SQL syntex Error..!";
                }


            ?>
   </section>       
    <!--End of Ongoing Card Section-->


    <!--Include footer.php-->
    <div><?php include "../../includes/footer.php" ?></div>

    <!--script for onClickNav() for the navigation menu-->
    <script src="../../js/onClickNav.js"></script>
    
    <script>
        function myFunction() {
        var x = confirm("Are you sure want to cancel...!");
        if (x){
            return true;
        } else {
            return false;
        }
        }

</script>
</body>
</html>
