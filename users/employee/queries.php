<?php include('../../includes/session.php') ?>
<?php include('../../includes/connection.php') ?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pre-Order Menu</title>
        <link href="../../images/logo.png" rel="shortcut icon"/> 
        <!-- Link the style sheets -->
        <link rel="stylesheet" href="../../CSS/employee.css">
        <link rel="stylesheet" href="../../CSS/main.css">
        <link rel="stylesheet" href="../../CSS/nav.css">   
        <link rel="stylesheet" href="../../CSS/footer.css">
    </head>
    <body>
        <?php include('navigations.php'); ?>

        <!-- Employee Sidebar Dashboard -->
        
    <!-- Start of sidbar -->
    <div class="sidebar">
      <a href="venues.php">Reservation Status</a><hr>    
      <a href="menu.php" >Set Menu</a><hr>
      <a href="queries.php" class="active">Queries</a><hr>
      <a href="table-reservation.php">Manage Reservation</a><hr>
    </div>
    <!-- End of sidebar -->
        


        <div class="content">
            <h1><font color="black">New</font> Queries</h1>

            <div class="promo-btn-bar">
                <!-- <button type="button" class="btn-promo" onclick="window.location.href='send-new-message.php'">Send Message</button> -->
                <button type="button" class="btn-promo" onclick="window.location.href='emp-past-queries.php'">View Past Queries</button>
            </div>

            <?php

            $new_msg_sql = "SELECT * FROM contact_us WHERE replied='0'"; //check whether replied

            $new_msg_query = mysqli_query($connection,$new_msg_sql);
            $num_msg = mysqli_num_rows($new_msg_query);
            
            if ($num_msg == 0){ //if there are no messages
                echo"<br/><br/><br/>
                <h1><font color=\"grey\">No New Messages to Display</font></h1>
                <center><img class=\"img-promo\" src=\"../../images/zero-messages.jpg\" alt=\"zero messages image\"></center>";
            }
            else { //to see new messages
                while($row = mysqli_fetch_assoc($new_msg_query)){  
                echo"
                    <form method=\"POST\" action=\"message-submit.php\"> 
                        <table class=\"message-table\">
                            <tr><th>".$row['comment']."</th></tr>
                            <tr><td>".$row['message']."</td></tr>
                            <tr><td>from <b>".$row['name']."</b> (".$row['email'].") on <b>".$row['date_time']."</b> (Message Id = ".$row['msg_id'].")</td></tr>

                            <input type=\"hidden\" id=\"msg_id\" name=\"msg_id\" value=".$row['msg_id'].">
                            <tr><td class=\"txt-area\"><textarea placeholder=\"Enter Your Reply...\" name=\"reply\" class=\"reply-area\"></textarea></td></tr>
                            <tr><td class=\"txt-area\"><input type=\"submit\" name=\"submit\"  class=\"btn-reply\" value=\"Send\" required></td></tr>
                    </form>
                    
                    <td><hr></td>
                ";
                }
                echo "</table>";
            }
            ?>

        <span><?php include('../../includes/footer.php'); ?></span>
        </div>



    <!--script for onClickNav() for the navigation menu-->
    <script src="../../js/onClickNav.js"></script>

    </body>
</html>