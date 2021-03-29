<?php
    require '../../config/connection.php';

    $alert='';
    $email=$_POST['cus_email'];
    $name=$_POST['cus_name'];
    $sub = $_POST['subject'];
    $msg = $_POST['msg'];

    date_default_timezone_set('Asia/Colombo');
    $today_date = date("Y-m-d H:i:s");

    // $get_msg_details_sql = "SELECT * FROM contact_us WHERE msg_id = '$msg_id'";
    // $get_msg_details_query = mysqli_query($connection,$get_msg_details_sql);

    // $row = mysqli_fetch_assoc($get_msg_details_query);
        
    //     $email=$row['email'];
    //     $comment=$row['comment'];
    //     $msg=$row['message'];
    //     $name=$row['name'];

    //echo "hello $email";

    if(isset($_POST['send-email'])){
        //echo "hello $email";
            
            //set variables for email
            $to=$email;
            $from='info.reserve.lk@gmail.com';
            $subject="ReserveMe : $sub";
            $message='Dear '.$name.', <br><br> '.$msg;
            $message.='<br><br>';
            $message.='Best Regards <br> ReserveMe.lk';
            $header="From: {$from}\r\nContent-Type: text/html;";

            $send_result=mail($to,$subject,$message,$header);
            if($send_result){
                echo "<script>
                alert('Message sent as an Email!');
                window.location = 'admin-view-customer.php';
                </script>"; 
                // $replied_sql="UPDATE contact_us SET replied='1' WHERE msg_id='$msg_id'";
                // mysqli_query($connection,$replied_sql);

                // $update_reply_sql = "INSERT INTO replies (reply_id, msg_id, reply, date_time_sent)
                // VALUES (NULL, '$msg_id' , '$reply', '$today_date')";
                // mysqli_query($connection,$update_reply_sql);
            }
           
            else {
                // echo "failed";
                // $alert="<div class='failed'>Failed to send the mail!</div>";
                echo "<script>
                alert('Email Send Failed!');
                window.location = 'admin-view-customer.php';
                </script>"; 
            }
                
    }

?>