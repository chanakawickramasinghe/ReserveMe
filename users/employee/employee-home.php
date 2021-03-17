<?php include('../../includes/connection.php') ?>
<?php include('../../includes/session.php') ?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emploee-Home</title>  
    <link href="../../images/logo.png" rel="shortcut icon"/> 
    <!-- Link the style sheets -->
    <link rel="stylesheet" href="../../CSS/main.css">
    <link rel="stylesheet" href="../../CSS/nav.css">   
    <link rel="stylesheet" href="../../CSS/footer.css">
    <link rel="stylesheet" href="../../CSS/employee.css">

</head> 

<body>
    <span><?php include('navigations.php'); ?></span>
   
    <!-- Start of side bar -->
    <div class="sidebar"> 
      <a href="employee-home.php" class="active">Employee Home</a> 
      <a href="venues.php">Venues</a>    
      <a href="menu.php">Set Menu</a>
      <a href="queries.php">Queries</a>
      <a href="table-reservation.php">Manage Reservation</a>      
    </div>
    <!-- End of side bar -->

    <div class="content">
          
       
        <center><span><h1>Table Availability</h1></span></center>

        <div style="height:370px;width:400px;display:block;padding:30px">
        <div class="contentbox" style="padding:20px">
        <form action="#" method="post">
           <center> <h3>Not Available Table Reservation</h3> </center>

            <label for="date">Add Date</label><br>
            <input type="date" name="date" class="type-feild" placeholder="Date" min="2020-11-19">
            <br>

            <label for="meal">Meal time</label><br>
            <select name="meal" id="meal" class="reg-type-feild">
            <option value="m0" disabled selected value> -- select Session time -- </option>
            <option value="m1">Breakfast</option>
            <option value="m2">Lunch</option>
            <option value="m3">Dinner</option>
            <option value="m4">All Day</option>
            </select>
            <br>

            <!-- <input type="button" value="Set to unavailable" class="emp-button"> -->
            <button class="emp-button" >Set to unavailable</button>
        </form>
        </div>
        </div>

        <div style="margin-left:15vw">
        <h3>Table Reservation Visible</h3>
        <label class="switch">
                <input type="checkbox" checked>
                <span class="slider round"></span>
        </label>
        <h3>Pre orders Visible</h3>
        <label class="switch">
                <input type="checkbox" checked>
                <span class="slider round"></span>
        </label>
        </div>
        <br>
    
        <center> <h3> Not availability on</h3> </center>
        <div style="padding:5vw;padding-top:1vw">
            <div class="contentbox">
            <table class="tab-not-available">
                <tr>
                    <th>Date</th>
                    <th>Meal time</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td colspan="3"><hr></td>
                </tr>
                
                <tr>
                    <td>2020.11.19</td>
                    <td>Lunch</td>
                    <td><button class="emp-button">Remove</button></td>
                </tr>
                <tr>
                    <td colspan="3"><hr></td>
                </tr>
                <tr>
                    <td>2020.11.25</td>
                    <td>Dinner</td>
                    <td><button class="emp-button">Remove</button></td>
                </tr>
                <tr>
                    <td colspan="3"><hr></td>
                </tr>
                <tr>
                    <td>2020.11.23</td>
                    <td>Breakfast</td>
                    <td><button class="emp-button">Remove</button></td>
                </tr>
                <tr>
                    <td colspan="3"><hr></td>
                </tr>
                <tr>
                    <td>2020.12.19</td>
                    <td>All day</td>
                    <td><button class="emp-button">Remove</button></td>
                </tr>
                <tr>
                    <td colspan="3"><hr></td>
                </tr>

            </table>
            </div>  
        </div> 
          
    </div>
    <div class="footer"> <?php include('../../includes/footer.php'); ?> </div>
    <!-- content for 80% -->

  


</body>
</html>
    
