<!DOCTYPE html>
<html>
    <head>
        <title> User Type selection</title>
        <!-- Link style Sheets -->
        <link href="../CSS/main.css" rel="stylesheet" type="text/css"/>        
        <!-- <link href="../CSS/customer-reg.css" rel="stylesheet" type="text/css"/> -->
        <link href="../CSS/nav.css" rel="stylesheet" type="text/css"/>
        <link href="../CSS/footer.css" rel="stylesheet" type="text/css"/>
        <link href="../CSS/login.css" rel="stylesheet" type="text/css"/>
        
        <!--web-icon-->
        <link href="../images/logo.png" rel="shortcut icon"/>
        <!--FontAwesome-------->
        <script crossorigin="anonymous" src="https://kit.fontawesome.com/70a642cd7c.js"></script>
        
        <style>
            a:hover {
	        text-decoration: none;
            color: #ffff;
            }

            .iconimage{
                height:120px;
                width:120px;
            }
            .reservation{
	display: flex;
	width: 100%;
    margin:30px auto;
    margin-left: 10px;
	justify-content: space-around;
	align-items: center;
	padding:30px;
}

.reservation-text{
    padding: 30px;
	width:85%;
    font-family:myriad pro;
  
}
        </style>
     </head>
    <body >
     <div class="row-100">  
     <!--Start of nav-->
    <div class="topnav" id="myTopnav">
        <a href="../index.php"><img class = "logo" src="../images/logo.png"></a>
        <a class="navtab" href="../includes/login.php">Login</a>
        <a class="navtab" href="../includes/contact.php">Contact</a>
		<a class="navtab" href="../includes/about.php">About</a>
		<!--<a href="javascript:void(0);" class="icon" onclick="onClickNav()"><i class="fa fa-bars"></i></a> -->     
    </div>
    <!--End of nav-->

    <table style="height:600px;" >
        <tr>
            <td>
            
            
            <section class="reservation">
            <!--text-->
            <section class="reservation-text">
                <!--heading-->
                <center><img src="../images/form_icons/dish.png" alt="Icon Customer" class="iconimage" ></center>
                <h3>Restaurant Registration</h3>
                <h4>Best places to <font>Dine in</font> </h4>
                <!--details-->
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, sint. Non officiis, architecto exercitationem modi distinctio quaerat at aspernatur omnis nobis et voluptatibus hic veritatis excepturi vel molestias quisquam dicta.</p>
                <br><br>
                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                    <div class="login100-form-bgbtn"></div>
                        <!-- <a href="uers/res_reg.php"></a><button class="login100-form-btn"> Create Account </button></a> -->
                        <a href="restaurant/res_reg.php" type="button" class="login100-form-btn">Create Account</a>
                    </div>
                </div>
            </section>

            </td>
            <td>
            <section class="reservation">
		        <!--text-->
		        <div class="reservation-text">
                <!--heading-->
                <center><img src="../images/form_icons/user.png" alt="Icon Customer" class="iconimage" ></center>
                
			    <h3 >Customer Registration</h3>
			    <h4>Best places to <font>Dine in</font> </h4>
			    <!--details-->
			    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, sint. Non officiis, architecto exercitationem modi distinctio quaerat at aspernatur omnis nobis et voluptatibus hic veritatis excepturi vel molestias quisquam dicta.</p>
                <br><br>
                <div class="container-login100-form-btn">
	                <div class="wrap-login100-form-btn">
		            <div class="login100-form-bgbtn"></div>
                        <a href="customer/customerReg.php" type="button" class="login100-form-btn">Create Account</a>
                    </div>
                </div>
		        </div>
            </section>

            </td>
        </tr>
    </table>
    <!--Include footer.php-->
   <div><?php include "../includes/footer.php" ?></div>
    
    <!--script for onClickNav() for the navigation menu-->
    <script src="../js/onClickNav.js"></script>
</body>
</html>
