<?php include 'add-menu-submit.php'; ?>

<!DOCTYPE html>
<html lang = "en" dir = "ltr">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add menu</title>
    <link rel="stylesheet" href="../../CSS/main.css">
    <script src="https://kit.fontawesome.com/20026fc328.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../../CSS/nav.css">
    <link rel="stylesheet" href="../../CSS/search.css">
    <link rel="stylesheet" href="../../CSS/footer.css">
</head>

<body class="login-body">

    <!--Start of nav-->
    <div class="topnav" id="myTopnav">
        <a href="../../index.php">Logout</a>
        <a href="restaurant-profile.php">My Profile</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
        <img class = "logo" src="../../images/logo.jpg">
    </div>
    <!--End of nav-->

    <!--Start of getting photos-->
    <div class="container">
    
        <form action="add-menu-submit.php" method="post" enctype="multipart/form-data">
        <c>
            <h2 class="error-msg" style="font-size:14px"><?php include_once('../../includes/message.php'); ?></h2>
            <br><br>
                <h1 align="center">Add Menu</h1>
                <br><br><br>
                <div class="login-box" style="height:450px;padding:10px 30px">
                
                    <p><h3>Insert five images of your Restaurant Menu</h3></p>
                    <br><br><br>
                    <input type="file" name="fileToUpload" id="fileToUpload" multiple>

                    <button type="submit" name="submit" value="UPLOAD" style="margin-left:220px;margin-top:-25px" class="search-btn hover" >Submit</button>
        </c>
        </form>
    </div>
    
<!--display images from db-->
    <div class="gallery">
        <?php
        include_once 'Connection.php';
        $query =$db->query("SELCT * FROM menu_image ORDER BY menu_id");

        if ($query->num_row > 0){
            while($row = $query->fetch_assoc()){
                $imageURL = 'uploads/'.$row['file_name'];
        ?>
                <img src="<?php echo $imageURL; ?>/>
        <?php
            }
        }else{
            echo'<p>No Image or Images</p>';
        }
        ?>
    </div>
</div>
</body>
</html>
