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
        <script src="../../public/js/manage-user-search.js"></script>
        <link rel="stylesheet" href="../../public/CSS/footer.css">
    </head>
    <body>

        <!--Start of nav-->
        <div class="topnav" id="myTopnav">
        <a href="admin-home.php"><img class = "logo" src="../../public/images/logo.png"></a>
            <a class="navtab" href="../../public/includes/logout.php">Logout</a>
            <a class="navtab" href="admin-home.php">Home</a>
            <a class="navtab" href="messages.php">Messages</a>
        </div>
        <!--End of nav-->

        <h1><br/><br/><font color="black">Past</font> Messages</h1>
        <br/>
        <!-- <div class="search-user-container">
            <form name="form-display-selected">
    
		        <h3>Search From Name</h3>
	
		        <div class="search-input">
                    <input type="text" id="myInput" onkeyup="searchPastMessages()" 
                    placeholder="Enter Name"/>
                </div> 
                <br/>   
        </div> -->

        <?php

        $past_msg_sql = "SELECT contact_us.comment, contact_us.message, contact_us.name, 
        contact_us.email, contact_us.date_time, contact_us.msg_id, 
        replies.reply, replies.date_time_sent, replies.reply_id
        FROM contact_us INNER JOIN replies ON contact_us.msg_id=replies.msg_id WHERE replied='1' ORDER BY replies.date_time_sent"; //check whether replied

        $past_msg_query = mysqli_query($connection,$past_msg_sql);
        $num_msg = mysqli_num_rows($past_msg_query);

        if ($num_msg == 0){ //if there are no messages
            echo"<br/><br/><br/>
            <h1><font color=\"grey\">No Past Messages to Display</font></h1>
            <center><img class=\"img-promo\" src=\"../../public/images/zero-messages.jpg\" alt=\"zero messages image\"></center>";
        }
        else { //to see new messages
            while($row = mysqli_fetch_assoc($past_msg_query)){  
            echo"

                <table class=\"message-table\" id=\"myTableMsg\">
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

        <!-- <span><?php //include('../../public/includes/footer.php'); ?></span> -->

    </body>
</html>
