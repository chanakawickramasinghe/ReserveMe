<?php include('../../../config/connection.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta content="IE-edge" http-equiv="X-UA-Compatible"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <!--stylesheet-->
    <link rel="stylesheet" type="text/css" href="../../../public/css/menu_floorplan.css">
	<link rel="stylesheet" type="text/css" href="../../../public/CSS/preorder.css">
</head>

<body>
    <!--Start of menu-->
	<center>
    <h2>Me<span style="color:orange">nu</span></h2><br>
    </center>
        
    
    <form method="post" action="checkout.php">  
        <table class="preorder" id="" border="0px" >
			<tr >
				<th >Item</th>
				<th >Price (Rs.)</th>
			</tr>
        <?php
            $search_cat = "SELECT * FROM menu_category WHERE cat_avail='1' ORDER BY cat_name ASC";
            $result_cat = mysqli_query($connection,$search_cat);
            while($row = mysqli_fetch_assoc($result_cat)){
                echo "
                <tr>
                    <th>".$row['cat_name']."</th>
                    <th></th>
                </tr>";
				
                $search_menu = "SELECT * FROM menu WHERE item_avail='1' AND item_cat='$row[cat_name]'";
                $result_menu = mysqli_query($connection,$search_menu);
                while($row = mysqli_fetch_assoc($result_menu)){
                    echo "
                    <tr>
                        <td>".$row['item_name']."</td>
                        <td>".$row['item_price']."</td> 
                    </tr>";
                }
            }
		?>

        </table>
	
	
			
</body>
</html>
