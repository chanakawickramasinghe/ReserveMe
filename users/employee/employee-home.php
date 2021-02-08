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
    <link rel="stylesheet" href="../../CSS/employee.css">
    <link rel="stylesheet" href="../../CSS/main.css">
    <link rel="stylesheet" href="../../CSS/nav.css">   
    <link rel="stylesheet" href="../../CSS/footer.css">

</head>

<body>
   <!--Start of nav-->
    <div class="topnav">
        <a href="../../index.php"><img class = "logo" src="../../images/logo.png"></a>
        <a  href="employee-profile.php"><img class="profile-icon" src="../../images/form_icons/user.png" alt="profile"></a>
        <a class="navtab" href="../../index.php">Logout</a>
		<a class="navtab" href="../../includes/contact.php">Contact</a>
		<a class="navtab" href="../../includes/about.php">About</a>
        
    </div>
    <!--End of nav-->
   

    <div class="sidebar"> 
      <a href="employee-home.php" class="active">Employee Home</a>     
      <a href="pre-order-menu.php">Pre - Order Menu</a>
      <a href="queries.php">Queries</a>
      <a href="table-reservation.php">Manage Reservation</a>
      <a href="reception-hall.php">Reception Hall</a>
    </div>

    <div class="content">
    <div style="margin:20px">      
        <!-- Adding the table with current user details -->
        <?php
        checkSession();
        
        $userID = $_SESSION["emp_id"]; //have to add session id
        $sql = "SELECT * FROM employee WHERE emp_id='$userID'";

        $resID= $_SESSION["res_id"]; //Get the Restaurent Name
        $sql2 = "SELECT * FROM restaurant WHERE res_id='$resID'";

        $resquery = mysqli_query($connection,$sql2);
        $row2 = mysqli_fetch_assoc($resquery);
        
        $userquery = mysqli_query($connection,$sql);
        $row = mysqli_fetch_assoc($userquery);
        echo"<center><h1 class=div-c>Welcome <span style=\"color:orange\"> ".$row['emp_name']." </span> , Employee of <span style=\"color:orange\"> ".$row2['res_name']." </span> </h1></center>";
    
       
        ?>

        <br>
        <table class="tab-emp">
        <tr>
        <td>Name : </td>
        <td><?php echo $row['emp_name'];?></td>
        </tr>
        <tr>
            <td>Email : </td>
            <td><?php echo $row['emp_email'];?></td>
        </tr>
        <tr>
            <td>Contact No :</td>
            <td><?php echo $row['emp_mobile'];?></td>
        </tr>
        
        </table>
       
        
        <img src="../../images/deco/restaurant-staff.jpg" alt="feedback" class="resimage">
       
        <center><h2>Table <span style="color:orange">Availability</span></h2></center>
        <div style="height:370px;width:400px;display:block;padding:30px">
        <div class="contentbox" style="padding:20px">
        <form action="#" method="post">
           <center> <h3>Not Available Table Reservation</h3> </center>

            <label for="date">Add Date</label><br>
            <input type="date" name="date" class="reg-type-feild" placeholder="Date" min="2020-11-19">
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

            <input type="button" value="Set to unavailable" class="hero-button">
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
                    <td><button class="hero-button">Remove</button></td>
                </tr>
                <tr>
                    <td colspan="3"><hr></td>
                </tr>
                <tr>
                    <td>2020.11.25</td>
                    <td>Dinner</td>
                    <td><button class="hero-button">Remove</button></td>
                </tr>
                <tr>
                    <td colspan="3"><hr></td>
                </tr>
                <tr>
                    <td>2020.11.23</td>
                    <td>Breakfast</td>
                    <td><button class="hero-button">Remove</button></td>
                </tr>
                <tr>
                    <td colspan="3"><hr></td>
                </tr>
                <tr>
                    <td>2020.12.19</td>
                    <td>All day</td>
                    <td><button class="hero-button">Remove</button></td>
                </tr>
                <tr>
                    <td colspan="3"><hr></td>
                </tr>

            </table>
            </div>  
        </div> 

            
    </div>    

    <?php include('../../includes/footer.php'); ?>
  </div>  
  <!-- content for 80% -->

  


</body>
</html>
    
