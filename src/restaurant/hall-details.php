<?php include('res-session.php'); ?>
<?php include('../../config/connection.php'); 
include('../../public/includes/message.php');?>

<html>  
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hall Registration</title> 
    <link href="../../public/images/logo.png" rel="shortcut icon"/> 
    <!-- Link the style sheets -->
    <link rel="stylesheet" href="../../public/CSS/pre-order.css">
    <link rel="stylesheet" href="../../public/CSS/main.css">
    <link rel="stylesheet" href="../../public/CSS/nav.css">   
    <link rel="stylesheet" href="../../public/CSS/footer.css">
    <link rel="stylesheet" href="../../public/CSS/hall.css">

 
</head>
<body>

      <!-- nav bar -->
      <?php include('navigation.php'); ?>
   
  <!-- Start of side bar -->
  <div class="sidebar"> 
      <a href="restaurant-home.php">Home</a>     
      <a href="add-menu.php">Update Menu</a>
      <a href="res-promo.php">Promotions</a>
      <a href="res-floor-plan.php">Floor Plan</a> 
      <a href="res-reservation.php">Table Reservations</a>
      <a href="hall-reservation.php">Hall Reservations</a>
      <a href="res-review.php">View Reviews</a>     
      <hr>
      <a href="mng-emp.php"  >Manage Employee</a>
      <a href="chat.php">Chat</a>
      <a href="hall-details.php" class="active">Reception Hall</a>
    </div>
   <!-- End of side bar -->
   
   <div class="content">
    <div style="margin:20px">  
   
    <?php

        $hall_search = "SELECT * FROM reception_hall";

        $hallquery = mysqli_query($connection,$hall_search);
        $num_halls = mysqli_num_rows($hallquery);

        if ($num_halls == 0){
            echo "
            
            <h1 align='center'>Reception <font color=\"orange\">Halls</font></h1>
            <br/>
            <h3 align='center'>No Reception Hall added!</h3>
            <br><br>
            <center>
            <button type=\"button\" name=\"btn-promo\" class=\"btn-promo\" onclick=\"window.location.href='add-hall.php'\" align=\"center\">Add Hall</button></center>";
            
        }
        else{
            echo "
            <center><h1 style=\"color:orange;\"><font color=\"black\">Reception</font> Halls</h1></center>
            <br/>";
            ?>
            <form action="add-hall-submit.php" method="post" enctype="multipart/form-data">
            <table class="hall-add">
                <tr>
                    <td><input class="type-feild-l" type="text" id="h_name" name="hall_name" placeholder="Hall Name" required></td>
                    <td><input class="type-feild-l" type="text" id="addr" name="address" placeholder="Hall Address" required></td>
                    <td><input class="type-feild-l" type="text" id="c_no" name="contact_no" placeholder="Contact No." required></td> 
                    <td><input class="type-feild-s" type="text" id="cap" name="capacity" placeholder="Capacity" required></td>  
                </tr>
                <tr>
                    
                    <td colspan="3"><input class="type-feild-xl" type="text" id="desc" name="description" placeholder="Description" required></td>
                    <td><input class="type-feild-s" type="text" id="adv" name="advance" placeholder="Advance Fee (lkr)" required></td>
                </tr>    
                <tr>
                    <td><input class="type-feild-l" type="file" name="main_image" placeholder="Select Profile Image"></td>
                    <td><input class="type-feild-l" type="file" name="image1" placeholder="Image 1"></td>
                    <td><input class="type-feild-l" type="file" name="image2" placeholder="Image 2"></td>
                </tr>
                <tr>
                    <input type="hidden" id="h_id" name="hall_id">
                    <td></td><td></td>        
                    <td><input type="submit" name="btn-add-hall"  class="hero-button" value="Add" required>
                    <input type="submit" name="update"  class="hero-button" value="Update" required>
                    <input type="submit" name="delete"  class="hero-button" value="Remove" required>
                    </td>

                </tr>

            </table>
            
            </form>
            <br><hr><br/>
            <?php
            echo"
            <table class=\"hall\" id=\"myTable\" border=\"1\" align=\"center\">
            <tr>
                <th>Hall Main Image</th>
                <th>Image 1</th>
                <th>Image 2</th>
                <th>Hall Name</th>
                <th>Contact No.</th>
                <th>Address</th>
                <th>Capacity</th>
                <th>Description</th>
                <th>Advance Fee</th>
                <th style=\"display:none\">hall id</th>
            </tr>";
            while($row = mysqli_fetch_assoc($hallquery)){
            echo"
            <tr> 
                <td><img class=\"hall-img\" src= \"../../images/halls/{$row['main_image']}\"></td>
                <td><img class=\"hall-img\" src= \"../../images/halls/{$row['image1']}\"></td>
                <td><img class=\"hall-img\" src= \"../../images/halls/{$row['image2']}\"></td>
                <td>".$row['hall_name']."</td>  
                <td>".$row['contact_no']."</td>
                <td>".$row['address']."</td>
                <td>".$row['capacity']."</td>
                <td>".$row['description']."</td> 
                <td>".$row['advance_fee']."</td>   
                <td style=\"display:none\">".$row['hall_id']."</td>          
            </tr>
            ";
            }
        }

    ?>

<!-- To get the table details to from -->
<script>
    var table = document.getElementById('myTable');
                
        for(var i = 1; i < table.rows.length; i++)
        {
            table.rows[i].onclick  = function()
            {
                document.getElementById("h_name").value = this.cells[3].innerHTML;
                document.getElementById("addr").value = this.cells[5].innerHTML;
                document.getElementById("c_no").value = this.cells[4].innerHTML;
                document.getElementById("cap").value = this.cells[6].innerHTML;
                document.getElementById("desc").value = this.cells[7].innerHTML;
                document.getElementById("adv").value = this.cells[8].innerHTML;
                document.getElementById("h_id").value = this.cells[9].innerHTML;

            };
        }

</script>

    </body>
</html>
