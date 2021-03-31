<?php include('emp-session.php') ?>


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

    <?php include('navigations.php'); ?>

    <!-- Start of sidbar -->
    <div class="sidebar"> 
      <!-- <a href="venues.php">Reservation Status</a><hr>      -->
      <a href="menu.php">Set Menu</a><hr>
      <a href="#" class="active">Chat</a><hr>
      <a href="table-reservation.php" >Table Reservation</a><hr>
      <a href="menu-reservation.php" >Pre Orders</a><hr>
      <a href="hall-reservation.php" >Hall Reservation</a><hr>
    </div>
    <!-- End of sidebar -->

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