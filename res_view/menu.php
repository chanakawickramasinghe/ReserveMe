<?php include('../includes/connection.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta content="IE-edge" http-equiv="X-UA-Compatible"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <!--stylesheet-->
    <link href="../css/menu_floorplan.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <!--Start of menu-->
	<div id="content-wrapper">
		<div class="column1">		
			<?php 
				if(isset($_GET['res_id'])){
					$sql = "SELECT * FROM restaurant WHERE res_id = ".$_GET['res_id'];
					$resultProduct = mysqli_query($connection,$sql);
					while($rowProduct  = mysqli_fetch_assoc($resultProduct)){  
						echo"<img id=\"featured\" class=\"thumbnail active\" src= \"../images/restaurant/{$rowProduct['res_id']}/menu/1.jpg\">";
					}
				}
			?>

			<div id="slide-wrapper" >
				<img id="slideLeft" class="arrow" src="../images/arrow-left.png">
				<div id="slider">
					<?php 
						if(isset($_GET['res_id'])){                    
							$retriewMenu = "SELECT * FROM menu WHERE res_id = ".$_GET['res_id'];
							$resultMenu = mysqli_query($connection,$retriewMenu);
							while($rowProduct  = mysqli_fetch_assoc($resultMenu)){  
								echo"<img class=\"thumbnail\" src= \"../images/restaurant/{$rowProduct['res_id']}/menu/{$rowProduct['menu_id']}.jpg\">";
							}
						}
					?>					
				</div>
				
				<img id="slideRight" class="arrow" src="../images/arrow-right.png">
			</div>
		</div>
		
		<div class="column2">
			<h1>Restaurant Menu</h1>
			<hr>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>			
		</div>
	</div>
	<!--End of menu-->

	

	
	
	
	

    

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
