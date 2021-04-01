<?php include('res-session.php'); ?>
<?php include('../../config/connection.php'); 
include('../../public/includes/message.php');?>


<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Queries</title>  
        <link href="../../public/images/logo.png" rel="shortcut icon"/> 
        <!-- Link the style sheets -->
        <link rel="stylesheet" href="../../public/CSS/employee.css">
        <link rel="stylesheet" href="../../public/CSS/main.css">
        <link rel="stylesheet" href="../../public/CSS/nav.css">   
        <link rel="stylesheet" href="../../public/CSS/footer.css">

        <!-- jquery for message -->
        <script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous">
        </script>

    </head>


    <body >

    <?php include('navigation.php'); ?>

  <!-- Start of side bar -->
  <div class="sidebar"> 
      <a href="restaurant-home.php">Home</a>     
      <a href="add-menu.php">Update Menu</a>
      <a href="res-promo.php">Promotions</a>
      <!-- <a href="res-floor-plan.php">Floor Plan</a>  -->
      <a href="res-reservation.php">Table Reservations</a>
      <a href="hall-reservation.php">Hall Reservations</a>
      <a href="res-review.php">View Reviews</a>     
      <hr>
      <a href="mng-emp.php"  >Manage Employee</a>
      <a href="#" class="active">Chat</a>
      <a href="hall-details.php" >Reception Hall</a>
    </div>
   <!-- End of side bar -->

    <div class="content">

        	<div class="centeralised">
	
                <div class="chathistory"></div>
                                    
                    <form action="" method="POST">
                        
                        <textarea class="txtarea" id="message" name="message"></textarea>

                    </form>

            </div>

            
    </div>
    
    <div class="footer"> <?php include('../../public/includes/footer.php'); ?> </div>
    <!--script for onClickNav() for the navigation menu-->
    <script src="../../public/js/onClickNav.js"></script>

    <script>
        $(document).ready(function(){
            loadChat();
        });
        $('#message').keyup(function(e){
            var message = $(this).val();
            if( e.which == 13 ){
                $.post('../../public/includes/ajax.php?action=SendMessage&message='+message, function(response){                    
                    loadChat();
                    $('#message').val('');
                });
            }
        });

        function loadChat(){
            $.post('../../public/includes/ajax.php?action=getChat', function(response){                
                $('.chathistory').html(response);
            });
        }

        setInterval(function(){
            loadChat();
        }, 2000);

    </script>

    </body>
</html>