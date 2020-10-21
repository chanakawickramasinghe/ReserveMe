
<html>  
<head>
    <title>Add Employee</title>
    <link rel="stylesheet" type="text/css" href="../../CSS/add-employee.css">   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/20026fc328.js" crossorigin="anonymous"></script>
	    <link rel="stylesheet" href="../../CSS/nav.css">
        <link rel="stylesheet" href="../../CSS/search.css">
        <link rel="stylesheet" href="../../CSS/footer.css">
        <link href="../../images/logo.png" rel="shortcut icon"/> 
</head>
    
<body >


    <!--Start of nav-->
    <div class="topnav" id="myTopnav">
            <a href="../../index.php">Logout</a>
            <a href="customer-profile.php">My Profile</a>
            <a href="#contact">Contact</a>
            <a href="#about">About</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
            <img class = "logo" src="../../images/logo.png">
        </div>
        <!--End of nav-->

        <?php
        include('../../includes/connection.php');
        include('../../includes/session.php');
        checkSession();
        echo "<table border=1 class=\"user\">";
        
        $resID = $_SESSION["resID"]; //have to add session id
        $sql = "SELECT * FROM employee WHERE res_id='$resID'";
        
        $userquery = mysqli_query($connection,$sql);
        echo " <b><tr>                  
                <th>Name</th><th>Email</th><th>Contact No</th>
                </tr></b>";
        while($row = mysqli_fetch_assoc($userquery)){
        // echo"</br></br><h1 class=div-c>Welcome " .$row['emp_name']."</h1>";

            echo "          
                <tr>
                <td>".$row['emp_email']."</td><td>".$row['emp_name']."</td><td>".$row['emp_mobile']."</td> <td><button value=\"delete\" >Delete </button></td> <td><button value=\"delete\" >Edit</button></td>
                </tr>
                ";
        } 
        echo "</table>";
        ?>

        <div class="row-100">
            <div class="login-box" style="width:400px" style="height:">
               
            <img src="../../images/profile.png" style="margin-top:50px"class="avatar">
            <br><br>
            <h1 align="center">Employee Registration</h1>
        
            <h2 class="error-msg"><?php include_once('../../includes/message.php'); ?></h2>

                <form action="employee-add.php" method="post">                   
                <div>   
                    <table style="width:500px">
                        <td>
                            <p><b>Name</p>
                            <input type="text" class="type-feild" name="name" placeholder="Employee name" required>   

                            <p><b>Email</p>
                            <input type="email" class="type-feild" name="email" placeholder="Email Address" required> 

                            <p>Contact number</p>
                            <input type="tel" name="contact" class="type-feild" placeholder="Mobile number" pattern='^\+?\d{0,13}' required>

                            <p>Password</p>
                            <input type="password" name="password" class="type-feild" placeholder="Enter Password" id="password"  required>

                            <p>Confirm Password</p>
                            <input type="password" name="password2" class="type-feild" placeholder="Re-Enter Password" id="confirm_password" onkeyup='check()' required>
                            <P id='message' ></P>
                        </td>
                    </table>          
                    <br>
                   
                <p align="center"> <input type="submit" name="submit"  class="search-btn hover" value="Register"  onclick="alertbox()" required></p>
                </div>
                </form>    
            </div>
        </div>
        <?php

// include('../../includes/connection.php');
// include('../../includes/session.php');

    if(isset($_POST['submit'])){
	
    // Assign input data from form to variables
    $name = $_POST['name'];
    $email= $_POST['email'];
    $contact = $_POST['contact'];
    $password = md5($_POST['password']);
	$password2 = md5($_POST['password2']);
    
        //Check if email already exists in both tables
        $selectmail= "SELECT * FROM customer WHERE email ='$email' " ;
        $allmailquery = mysqli_query($connection, $selectmail ) ;  
        $num = mysqli_num_rows($allmailquery);

        $selectmail2="SELECT * FROM restaurant WHERE res_email='$email'";
        $allmailquery2 = mysqli_query($connection, $selectmail2 ) ;  
        $num2 = mysqli_num_rows($allmailquery2);

        $selectmail3="SELECT * FROM  employee WHERE emp_email='$email'";
        $allmailquery3 = mysqli_query($connection, $selectmail3 ) ;  
        $num3 = mysqli_num_rows($allmailquery3);


        
        if($num > 0 || $num2 > 0 || $num3 >0){
        $message = base64_encode(urlencode("Email already exists"));
        header('Location:employee-add.php?msg=' . $message);
        exit();
        }
        
        //Insert to Database
        else {

            // checkSession(); 
            // $res_id=$_SESSION['resID'];
            $registrationQuery = "INSERT INTO employee (emp_id, res_id, emp_name, emp_email, emp_mobile, emp_password) VALUES (NULL,$resID,'$name','$email','$contact','$password')";
            if (mysqli_query($connection,$registrationQuery) == TRUE) {
                //echo "inside TRUE";
                $message = base64_encode(urlencode("Registration Successful"));
                header('Location:employee-add.php?msg=' . $message);
				exit();
            } 
            
            else {
                // echo "Inside FALSE";
                $message = base64_encode(urlencode("SQL Error while Registering"));
                // header('Location:employee-add.php?msg=' . $message);
				exit();
            }
        }
    }
mysqli_close($connection);
?>
    
        <script>
        var check = function() {
            if (document.getElementById('password').value == document.getElementById('confirm_password').value){
                    document.getElementById('message').style.color = 'green';
                    document.getElementById('message').innerHTML = 'Password is matching';
            } 
            else{
                document.getElementById('message').style.color = 'red';
                // document.getElementById('message').style.backgroundColor = 'initial';
                document.getElementById('message').innerHTML = 'Password does not match';
            }
        }
    
        </script>

        <!--Include footer.php-->
   <div><?php include "../../includes/footer.php" ?></div>
    
    <!--script for onClickNav() for the navigation menu-->
    <script src="../../js/onClickNav.js"></script>
</body>

</html>