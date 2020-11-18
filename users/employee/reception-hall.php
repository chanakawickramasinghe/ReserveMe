<?php include('../../includes/connection.php') ?>
<?php include('../../includes/session.php') ?>

<html>
    <head>
        <title>Employee Profile</title>
        <link href="../../images/logo.png" rel="shortcut icon"/> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script crossorigin="anonymous" src="https://kit.fontawesome.com/70a642cd7c.js"></script>
        <!-- Link style Sheets -->
        <link rel="stylesheet" href="../../CSS/nav.css">
        <link rel="stylesheet" href="../../CSS/footer.css">
        <link rel="stylesheet" href="../../CSS/employee.css">
        <link rel="stylesheet" href="../../CSS/customer-reg.css">


        
    </head>
    <body>        
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
        // echo"<center><h1 class=div-c>Welcome ".$row['emp_name']." , Employee of ".$row2['res_name']."</h1></center>";
    
       
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
       
        
        <img src="../../images/deco/restaurant-staff.jpg" alt="feedback" class="resimage"><hr style="width:90%">
        <br> <br>


            
        <form action="#" method="post">
            <h3>Not Available Hall</h3>

            <label for="date">Hall Name</label><br>
            <input type="text" name="hall_name" class="reg-type-feild" placeholder="Date">
            <br>

            <label for="date">Add Date</label><br>
            <input type="date" name="date" class="reg-type-feild" placeholder="Date">
            <br>

            <label for="meal">Sessions</label><br>
            <select name="meal" id="meal" class="reg-type-feild">
            <option value="m0" disabled selected value> -- select Session time -- </option>
            <option value="m1">Morning</option>
            <option value="m2">Later in the day</option>
            <option value="m3">Night</option>
            </select>
            <br>

            <input type="button" value="Set to unavailable" class="hero-button">

        </form>
        <br>
        <div class="subbody">
        <h2> Hall Availability </h2>
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
                    <td>Morning</td>
                    <td><button class="hero-button">Remove</button></td>
                </tr>
                <tr>
                    <td colspan="4"><hr></td>
                </tr>
                <tr><td>Party pool</td>
                    <td>2020.11.25</td>
                    <td>Later in the day</td>
                    <td><button class="hero-button">Remove</button></td>
                </tr>
                <tr>
                    <td colspan="4"><hr></td>
                </tr>
                <tr><td>Ball room</td>
                    <td>2020.11.23</td>
                    <td>Night</td>
                    <td><button class="hero-button">Remove</button></td>
                </tr>
                <tr>
                    <td colspan="4"><hr></td>
                </tr>
                <tr><td>Party pool</td>
                    <td>2020.12.19</td>
                    <td>Morning</td>
                    <td><button class="hero-button">Remove</button></td>
                </tr>
                <tr>
                    <td colspan="4"><hr></td>
                </tr>

            </table>
            </div>  
        
            </div>
    </div>    
    </body>
</html> 