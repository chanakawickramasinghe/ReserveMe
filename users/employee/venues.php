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

    </head>
    <body>  
        
    <?php include('navigations.php'); ?>

    <!-- Start of sidbar -->
    <div class="sidebar"> 
      <a href="employee-home.php" >Employee Home</a>
      <a href="venues.php" class="active">Venues</a>     
      <a href="menu.php">Set Menu</a>
      <a href="queries.php">Queries</a>
      <a href="table-reservation.php">Manage Reservation</a>
    </div>
    <!-- End of sidebar -->
    
    <div class="content">

    <center><h1>Hall <span style="color:orange"> Availability</span></h1></center> 
    
        <div style="height:420px;width:400px;display:block;padding:30px">
        <div class="contentbox">
        <form action="#" method="post">
           <center> <h3>Not Available Hall</h3> </center>

            <label for="date">Hall Name</label><br>
            <!-- <input type="text" name="hall_name" class="reg-type-feild" placeholder="Hall name"> -->
            <select name="hall_name" id="hall_name" class="reg-type-feild">
            <option value="m0" disabled selected value> -- select Hall -- </option>
            <option value="m1">Ball room</option>
            <option value="m2">Party Pool</option>
            </select>
            <br>

            <label for="date">Add Date</label><br>
            <input type="date" name="date" class="reg-type-feild" placeholder="Date" min="2020-11-19">
            <br>

            <label for="meal">Sessions</label><br>
            <select name="meal" id="meal" class="reg-type-feild">
            <option value="m0" disabled selected value> -- select Session time -- </option>
            <option value="m1">Day</option>
            <option value="m2">Night</option>
            </select>
            <br>

            <!-- <input type="button" value="Set to unavailable" class="emp-button"> -->
            <button class="emp-button" >Set to unavailable</button>
        </form>
        </div>
        </div> 


        <h3>Hall Reservation Visible</h3>
        <label class="switch">
                <input type="checkbox" checked>
                <span class="slider round"></span>
        </label>

        <h3> Not availability on</h3>
        <div class="contentbox">
        <table class="tab-not-available">
                <tr><th>Hall name</th>
                    <th>Date</th>
                    <th>Session</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td colspan="4"><hr></td>
                </tr>
                
                <tr><td>Ball room</td>
                    <td>2020.11.19</td>
                    <td>Day</td>
                    <td><button class="emp-button">Remove</button></td>
                </tr>
                <tr>
                    <td colspan="4"><hr></td>
                </tr>
                <tr><td>Party pool</td>
                    <td>2020.11.25</td>
                    <td>Night</td>
                    <td><button class="emp-button">Remove</button></td>
                </tr>
                <tr>
                    <td colspan="4"><hr></td>
                </tr>
                <tr><td>Ball room</td>
                    <td>2020.11.23</td>
                    <td>Day</td>
                    <td><button class="emp-button">Remove</button></td>
                </tr>
                <tr>
                    <td colspan="4"><hr></td>
                </tr>

            </table>
         </div>  
   
    </div>   
        
    <div class="footer"> <?php include('../../includes/footer.php'); ?> </div>   
     
</body>
</html> 