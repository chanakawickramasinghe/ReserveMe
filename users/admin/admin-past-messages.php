<?php include('../../includes/session.php') ?>
<?php include('../../includes/connection.php') ?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ReserveMe - Admin</title>
	    <link rel="stylesheet" href="../../CSS/admin-nav.css">
        <link href="../../images/logo.png" rel="shortcut icon"/>
        <link rel="stylesheet" href="../../CSS/admin-dashboard.css"/>
        <script src="../../js/manage-user-search.js"></script>
        <link rel="stylesheet" href="../../CSS/footer.css">
    </head>
    <body>

        <!--Start of nav-->
        <div class="topnav" id="myTopnav">
        <a href="../../index.php"><img class = "logo" src="../../images/logo.png"></a>
            <a class="navtab" href="../../index.php">Logout</a>
            <a class="navtab" href="admin-home.php">Home</a>
            <a class="navtab" href="messages.php">Messages</a>
        </div>
        <!--End of nav-->

        <h1><font color="black">Past</font> Messages</h1>

        <div class="search-user-container">
            <!-- <form name="form-display-selected"> -->
                <!--heading-->
		        <h3>Search From Name</h3>
		        <!--Input-------->
		        <div class="search-input">
                    <input type="text" id="myInput" onkeyup="myFunctionPastPromos()" 
                    placeholder="Enter Name"/>
                    <br>
                </div>    
        </div>

        <?php

        $past_msg_sql = "SELECT contact_us.comment, contact_us.message, contact_us.name, 
        contact_us.email, contact_us.date_time, contact_us.msg_id, 
        replies.reply, replies.date_time_sent, replies.reply_id
        FROM contact_us INNER JOIN replies ON contact_us.msg_id=replies.msg_id WHERE replied='1'"; //check whether replied

        $past_msg_query = mysqli_query($connection,$past_msg_sql);
        $num_msg = mysqli_num_rows($past_msg_query);

        if ($num_msg == 0){ //if there are no messages
            echo"<br/><br/><br/>
            <h1><font color=\"grey\">No Past Messages to Display</font></h1>
            <center><img class=\"img-promo\" src=\"../../images/zero-messages.jpg\" alt=\"zero messages image\"></center>";
        }
        else { //to see new messages
            while($row = mysqli_fetch_assoc($past_msg_query)){  
            echo"

                <table class=\"message-table\">
                <tr><th>".$row['comment']."</th></tr>
                <tr><td>".$row['message']."</td></tr>
                <tr><td>from <b>".$row['name']."</b> (".$row['email'].") on <b>".$row['date_time']."</b> (Message Id = ".$row['msg_id'].")<br/><br/></td></tr>
                <tr><td class=\"sent-reply\">".$row['reply']."</td></tr>
                <tr><td class=\"sent-reply\">Reply sent on <b>".$row['date_time_sent']."</b> by <b>Admin</b> (Reply Id = ".$row['reply_id'].")
                
                <tr><td><br/><hr></td></tr>

            ";

            // in case replying is needed here
            // <tr><td class=\"txt-area\"><textarea placeholder=\"Enter Your Reply...\" class=\"reply-area\"></textarea></td></tr>
            // <tr><td class=\"txt-area\"><button type=\"submit\" class=\"btn-reply\">Send</button></td></tr>

            }
        }
            echo "</table>";
        ?>

        <span><?php include('../../includes/footer.php'); ?></span>

    </body>
</html>
