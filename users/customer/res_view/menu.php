<?php include('../../../includes/connection.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta content="IE-edge" http-equiv="X-UA-Compatible"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <!--stylesheet-->
    <link href="../../../css/menu_floorplan.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="../../../CSS/preorder.css">
</head>
<body>
    <!--Start of menu-->

	<div class="title_text">
            <h3>Me<font>nu</font></h3>
        </div>
        <form method="post" action="checkout.php">  
        <table class="preorder" id="" border="0">
			<!-- <tr>
				<th>Item</th>
				<th>Price (Rs.)</th>
			</tr> -->
                
        <?php

            $search_cat = "SELECT * FROM menu_category WHERE cat_avail='1' ORDER BY cat_name ASC";
            $result_cat = mysqli_query($connection,$search_cat);
            while($row = mysqli_fetch_assoc($result_cat)){
                echo "
                <tr>
                    <th>".$row['cat_name']."</th>               
                </tr>";
                
                $search_menu = "SELECT * FROM menu WHERE item_avail='1' AND item_cat='$row[cat_name]'";
                $result_menu = mysqli_query($connection,$search_menu);
                while($row = mysqli_fetch_assoc($result_menu)){
                    echo "
                    <tr>
                        <td>".$row['item_name']."</td>
                        <td>".$row['item_price']."</td> 
                    </tr>
                    ";
                }
            }

		?>


	<!-- <div id="content-wrapper">
		<div class="column1">		
			<?php 
			/*	if(isset($_GET['res_id'])){
					$sql = "SELECT * FROM restaurant WHERE res_id = ".$_GET['res_id'];
					$resultProduct = mysqli_query($connection,$sql);
					while($rowProduct  = mysqli_fetch_assoc($resultProduct)){  
						echo"<img id=\"featured\" class=\"thumbnail active\" src= \"../../../images/restaurant/{$rowProduct['res_id']}/menu/1.jpg\">";
					}
				}
			?>

			<div id="slide-wrapper" >
				<img id="slideLeft" class="arrow" src="../../../images/arrow-left.png">
				<div id="slider">
					<?php 
						if(isset($_GET['res_id'])){                    
							$retriewMenu = "SELECT * FROM menu WHERE res_id = ".$_GET['res_id'];
							$resultMenu = mysqli_query($connection,$retriewMenu);
							while($rowProduct  = mysqli_fetch_assoc($resultMenu)){  
								echo"<img class=\"thumbnail\" src= \"../../../images/restaurant/{$rowProduct['res_id']}/menu/{$rowProduct['menu_id']}.jpg\">";
							}
						}
					?>					
				</div>
				
				<img id="slideRight" class="arrow" src="../../../images/arrow-right.png">
			</div>
		</div>
		
		<div class="column2">
			<h1>Restaurant Menu</h1>
			<hr>
			<p>ReserveMe offers these types of  menus which are of different varieties of meals in Sri Lanka with the collaboration of a chamber of restaurants. Those menus are available according to the restaurant specified opening hours. Those menus offered here can be used do the reservations which will give value to the user time.</p>			
		</div>
	</div> -->*/
	?> -->

	

	
	
	
	

    

	<script type="text/javascript">
		let thumbnails = document.getElementsByClassName('thumbnail')

		let activeImages = document.getElementsByClassName('active')

		for (var i=0; i < thumbnails.length; i++){

			thumbnails[i].addEventListener('mouseover', function(){
				console.log(activeImages)
				
				if (activeImages.length > 0){
					activeImages[0].classList.remove('active')
				}
				

				this.classList.add('active')
				document.getElementById('featured').src = this.src
			})
		}


		let buttonRight = document.getElementById('slideRight');
		let buttonLeft = document.getElementById('slideLeft');

		buttonLeft.addEventListener('click', function(){
			document.getElementById('slider').scrollLeft -= 180
		})

		buttonRight.addEventListener('click', function(){
			document.getElementById('slider').scrollLeft += 180
		})


	</script>
		
	
</body>
</html>
