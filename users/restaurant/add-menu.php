<?php include('add-menu-submit.php') ?>
<?php include('../../includes/connection.php') ?>
<?php include('../../includes/session.php') ?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Menue</title>  
    <link href="../../images/logo.png" rel="shortcut icon"/> 
    <!-- Link the style sheets -->
    <link rel="stylesheet" href="../../CSS/pre-order.css">
    <link rel="stylesheet" href="../../CSS/main.css">
    <link rel="stylesheet" href="../../CSS/nav.css">   
    <link rel="stylesheet" href="../../CSS/footer.css">

</head>

<body>
  <!-- nav bar -->
  <?php include('navigation.php'); ?>
   
    <!-- Start of side bar -->
    <div class="sidebar"> 
      <a href="restaurant-home.php">Home</a> 
      <a href="add-preordermenu.php">Pre - Order Menu</a>    
      <a href="add-menu.php" class="active">Update the Menu</a>
      <a href="res-promo.php">Promotions</a>
      <a href="res-floor-plan.php">Floor Plan</a> 
      <a href="res-reservation.php">Reservations</a>
      <a href="../customer/res_view/review/index.html?res_id=4">View Reviews</a>   
      <a href="res-contactus.php">Help Desk</a>
      <br>
      <hr>
      <a href="mng-emp.php">Manage Employee</a>
      <a href="hall-details.php">Reception Hall</a>
    </div>
    <!-- End of side bar -->

    <div class="content">

    <center><h1 style="color:#ffbb01;"><font color="black">Add</font> Menu</h1><center><br>

    <form action="add-menu-submit.php" method="post" onsubmit="myFunction()">

        <select name="comment" id="comment" class="type-feild" default="How can we help you">
        <option value="q0" disabled selected value> -- Select a category -- </option>
        <?php 
            $sql_options= "SELECT cat_name FROM menu_category";

            $results= $connection ->query($sql_options);

            if($results==true){
                while($row=$results-> fetch_assoc()){
                    $options=$row["cat_name"];
        ?>
        <option value="<?php $options ?>"><?php echo ("$options"); ?></option>
         <?php }} ?>

        

        </select><br><br>

        <input class="type-feild" type="text" name="item_name" placeholder="Food Name" required><br><br>
        <input class="type-feild" type="text" name="price" placeholder="Price" required><br><br>
        <!-- <input class="type-feild" type="text" name="mobile" placeholder="Mobile Number(Optional)" pattern='^\+?\d{9,11}'><br> -->
        <input type="submit" name="submit"  class="hero-button" value="Add" style="margin-left:30px"  required>
    </form>


    <table>
    <tr>
    <th>Food category</th>
    <th>Food name</th>
    <th>Price </th>
    <th>Remove</th>
    </tr>
    
    <?php 
        $sql_menu_table= "SELECT * from menu order by item_cat asc";

        $results2=$connection-> query($sql_menu_table);

        if($results2==true){
            while($row2=$results2->fetch_assoc()){
                $item_cat=$row2["item_cat"];
                $item_name=$row2["item_name"];
                $item_price=$row2["item_price"];
                $item_id=$row2["item_id"];
    ?>
    <tr>
    <td><?php echo("$item_cat"); ?></td>
    <td><?php echo("$item_name"); ?></td>
    <td><?php echo("$item_price"); ?></td>
    <td><a href="add-menu.php" style="color:red;text-decoration:underline" >remove</a></td>
    </tr>
    <?php
            }
        }
    ?>

    
    </table>




    </div>

    

</body>
</html>
