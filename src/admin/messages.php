<?php include('admin-session.php') ?>
<?php include('../../config/connection.php') ?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ReserveMe - Admin</title>
	    <link rel="stylesheet" href="../../public/CSS/admin-nav.css">
        <link href="../../public/images/logo.png" rel="shortcut icon"/>
        <link rel="stylesheet" href="../../public/CSS/admin-dashboard.css"/>
        <link rel="stylesheet" href="../../public/CSS/footer.css">
    </head>
    <script>
    function required()
    {
        var empt = document.forms["send-reply"]["submit"].value;
        if (empt == "")
        {
            alert("Please input a Value");
            return false;
        }
        else 
        {
            alert('Code has accepted : you can try another');
            return true; 
        }
    }
    </script>
    <body>

        <!--Start of nav-->
        <?php include('../../public/includes/admin-nav.php'); ?>
        <!--End of nav-->

        <!-- Admin Sidebar Dashboard -->
        
        <div class="sidebar">

            <a href="admin-home.php">Home</a>
            <a href="manage-users.php">Manage Users</a>
            <a href="messages.php" class="active">Messages</a>
            <a href="promotions.php">Promotions</a>
            <a href="log.php">Application Log</a>
            <!-- <hr>
            <a href="coadmins.php">Manage Co-Admins</a> -->
        </div>

        <div class="content-div">
            <h1><font color="black">New</font> Messages</h1>

            <div class="promo-btn-bar">
                <!-- <button type="button" class="btn-promo" onclick="window.location.href='send-new-message.php'">Send Message</button> -->
                <button type="button" class="btn-promo" onclick="window.location.href='admin-past-messages.php'">View Past Messages</button>
            </div>

            <?php

            $new_msg_sql = "SELECT * FROM contact_us WHERE replied='0'"; //check whether replied

            $new_msg_query = mysqli_query($connection,$new_msg_sql);
            $num_msg = mysqli_num_rows($new_msg_query);
            
            if ($num_msg == 0){ //if there are no messages
                echo"<br/><br/><br/>
                <h1><font color=\"grey\">No New Messages to Display</font></h1>
                <center><img class=\"img-promo\" src=\"../../public/images/zero-messages.jpg\" alt=\"zero messages image\"></center>";
            }
            else { //to see new messages
                while($row = mysqli_fetch_assoc($new_msg_query)){  
                echo"
                    <form method=\"POST\" name\"send-reply\"  action=\"message-submit.php\"> 
                        <table class=\"message-table\">
                            <tr><th>".$row['comment']."</th></tr>
                            <tr><td>".$row['message']."</td></tr>
                            <tr><td>from <b>".$row['name']."</b> (".$row['email'].") on <b>".$row['date_time']."</b> (Message Id = ".$row['msg_id'].")</td></tr>

                            <input type=\"hidden\" id=\"msg_id\" name=\"msg_id\" value=".$row['msg_id'].">
                            <tr><td class=\"txt-area\"><textarea placeholder=\"Enter Your Reply...\" name=\"reply\" class=\"reply-area\"></textarea></td></tr>
                            <tr><td class=\"txt-area\"><input type=\"submit\" name=\"submit\" onClick='return confirmSubmit()'  class=\"btn-reply\" value=\"Send\" required></td></tr>
                    </form>
                    
                    <td><hr></td>
                ";
                }
                echo "</table>";
            }
            ?>

        <!-- <span><?php //include('../../public/includes/footer.php'); ?></span> -->
        </div>



    <!--script for onClickNav() for the navigation menu-->
    <script src="../../public/js/onClickNav.js"></script>

<!-- CONFIRM Box -->
<script LANGUAGE="JavaScript">
function confirmSubmit()
{
var agree=confirm("Are you sure you wish to continue?");
    if (agree)
        return true ;
    else
        return false ;
    }
</script>
    </body>
</html>