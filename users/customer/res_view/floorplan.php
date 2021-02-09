<?php include('../../../includes/connection.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta content="IE-edge" http-equiv="X-UA-Compatible"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <!--stylesheet-->
    <link href="../../../css/menu_floorplan.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <!--Start of floorplan-->
	<div id="content-wrapper">
		<div class="column1">
			<?php 
				if(isset($_GET['res_id'])){
					$sql = "SELECT * FROM restaurant WHERE res_id = ".$_GET['res_id'];
					$resultProduct = mysqli_query($connection,$sql);
					while($rowProduct  = mysqli_fetch_assoc($resultProduct)){  
						echo"<img id=\"featured\" class=\"thumbnail active\" src= \"../../../images/restaurant/{$rowProduct['res_id']}/floorplan/1.jpg\">";
					}
				}
			?>

			<div id="slide-wrapper" >
				<img id="slideLeft" class="arrow" src="../../../images/arrow-left.png">
				<div id="slider">
					<?php 
						if(isset($_GET['res_id'])){							
							$retriewMenu = "SELECT * FROM floorplan WHERE res_id = ".$_GET['res_id'];
							$resultMenu = mysqli_query($connection,$retriewMenu);
							while($rowProduct  = mysqli_fetch_assoc($resultMenu)){  
								echo"<img class=\"thumbnail\" src= \"../../../images/restaurant/{$rowProduct['res_id']}/floorplan/{$rowProduct['floorplan_id']}.jpg\">";
							}						  
						}
					?>					
				</div>

				<img id="slideRight" class="arrow" src="../../../images/arrow-right.png">
			</div>
		</div>
		
		<div class="column2">
			<h1>Restaurant Floorplan</h1>
			<hr>
			<p>Here we have given the opportunity to reserve a table on the preference on them before going to the restaurant. So the customer has to select the table number from the floor plan so that they can get their meal at that particular table. It avoids the customer's waiting time at restaurant.</p>
		</div>

	</div>
	<!--End of floorplan-->

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
