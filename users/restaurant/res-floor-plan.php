<?php include 'add-menu-submit.php'; ?>

<!DOCTYPE html>
<html lang = "en" dir = "ltr">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Floor Plan</title>
    <link rel="stylesheet" href="../../CSS/main.css">
    <script src="https://kit.fontawesome.com/20026fc328.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../../CSS/nav.css">
    <link rel="stylesheet" href="../../CSS/search.css">
    <link rel="stylesheet" href="../../CSS/pre-order.css">
    <!--web-icon-->
    <link href="../../images/logo.png" rel="shortcut icon"/>
</head>

<body>

  <!--Start of getting photos-->
    <div id="content">
        <form action="add-menu-submit.php" method="post" enctype="multipart/form-data">
            <h2 class="error-msg" style="font-size:14px"><?php include_once('../../includes/message.php'); ?></h2>
                <br><br>
                <center>
                <h1 style="color:#ffbb01;">Add Floor Plan</h1>
                <br>
                <p><h3>Insert images of your Restaurant Floor seperately.</h3></p>
                <p>(Only Five images are allowed)</p>
                <br>
                <!-- <h3>Rename Image</h3>
                <br>
                <input type="text" class="type-feild"   name="item_name" placeholder="RestaurantName_01" required>
                <br><br> -->
                <h3>Floor Plan</h3>
                <br>
                <input class="input-file"  type="file" name="floor-plan">
                <div>
                <br><br>
                <input type="submit" name="submit" style="margin-left:400px; margin-top:-30px" class="btn-promo" value="Enter" required>   
                </div>  
               </center>
               <br><br>
               <table class="promo" id="myTable" border="1">
                <tr>
                    <th>Image 01</th>
                    <th>Image 02</th>
                    <th>Image 03</th>
                    <th>Image 04</th>
                    <th>Image 05</th>
                </tr>
                <tr>
                    <td><img class="img-promo" src="../../images/restaurant/P1.jpg" width="150px" height="250px">
                    <br><button type="button" class="btn-promo-remove">Remove</button>
                    </td>
                    <td><img class="img-promo" src="" >
                    <!-- <br><button type="button" class="btn-promo-remove">Remove</button> -->
                    </td>
                    <td><img class="img-promo" src="">
                    <!-- <br><button type="button" class="btn-promo-remove">Remove</button> -->
                    </td>  
                    <td><img class="img-promo" src="">
                    <!-- <br><button type="button" class="btn-promo-remove">Remove</button> -->
                    </td> 
                    <td><img class="img-promo" src="">
                    <!-- <br><button type="button" class="btn-promo-remove">Remove</button> -->
                    </td>            
                </tr>
            </table>  
        </form>
    </div>
    

</body>
</html>