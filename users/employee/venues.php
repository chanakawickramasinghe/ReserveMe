<?php include('../../includes/connection.php') ?>
<?php include('../../includes/session.php') ?>

<html>
    <head>
        <title>Employee Profile</title>
        <link href="../../images/logo.png" rel="shortcut icon"/> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Link the style sheets -->
        <link rel="stylesheet" href="../../CSS/employee.css">
        <link rel="stylesheet" href="../../CSS/main.css">
        <link rel="stylesheet" href="../../CSS/nav.css">   
        <link rel="stylesheet" href="../../CSS/footer.css">

        <style>
            table{
                /* border:1px solid black; */
                width:100%;
                justify-content: center;
                align-items: center;
            }
        </style>

    </head>
    <body>  
        
    <?php include('navigations.php'); ?>

    <!-- Start of sidbar -->
    <div class="sidebar"> 
      <!-- <a href="employee-home.php" >Employee Home</a> -->
      <a href="venues.php" class="active">Reservation status</a>     
      <a href="menu.php">Set Menu</a>
      <a href="queries.php">Queries</a>
      <a href="table-reservation.php">Manage Reservation</a>
    </div>
    <!-- End of sidebar -->
    
    <div class="content">

    <table>
    <tr>
    <td>
        <!--Start of reservationform section-->
        <section class = "banner">
            <div class = "card-container">
                <div class = "card-content">
                    <h3>Hall Booking</h3>
                    <form class="reservation_form" action="checkout.php">
                        <div class = "form-row">
                            <!-- <input type = "text" placeholder="Hall Name"> -->
                            <select name="hall_name" id="hall_name" class="reg-type-feild">
                            <option value="m0" disabled selected value>Select Hall -- </option>
                            <option value="m1">Ball room</option>
                            <option value="m2">Party Pool</option>
                            </select>
                            <input type = "date" placeholder="Select Date">
                        </div>

                        <div class = "form-row">
                            <input type = "number" placeholder="How Many Persons?" min = "1">
                            <select name = "hours">
                                <option value = "session-select">Select Session</option>
                                <option value = "1">Morning</option>
                                <option value = "1">Evening</option>
                            </select>
                        </div>
                        <div class = "form-row">
                            <button href="#" class="emp-button" type=""  name="submit">Reserve</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!--End of reservationform section--> 
    
    
    </td>

    <td>
    <!--Start of reservationform section-->
    <section class = "banner">
            <div class = "card-container">
                <div class = "card-content">
                    <h3>Table Reservation</h3>
                    <div class="reservation_form">
                        <div class = "form-row">
                            <input type = "date" placeholder="Select Date">

                            <select name = "hours">
                                <option value = "session-select">Select Session</option>
                                <option value = "1">Breakfast</option>
                                <option value = "1">Lunch</option>
                                <option value = "1">Dinner</option>
                            </select>
                        </div>

                        <div class = "form-row">
                            <input type = "number" placeholder="How Many Persons?" min = "1">
                            <input type = "time" placeholder="Arrival time?">
                        </div>
                        <div class = "form-row">
                            <button onclick="onClickOpenForm()"  class="emp-button" type=""  name="submit">Reserve</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Start of reservationform section-->
    
    
    </td>
    </tr>
    <td>
        <h3>Hall Reservation Visible</h3>
        <label class="switch">
                <input type="checkbox" checked>
                <span class="slider round"></span>
        </label>
    </td>
    <td>
        <h3>Table Reservation Visible</h3>
        <label class="switch">
                <input type="checkbox" checked>
                <span class="slider round"></span>
        </label>
    </td>
    
    
    </table>






   
    </div>   
        
    <div class="footer"> <?php include('../../includes/footer.php'); ?> </div>   
     
</body>
</html> 