
<?php
    require '../../includes/connection.php';
    $alert='';
    $reply=$_POST['reply'];
    $msg_id=$_POST['msg_id'];

    date_default_timezone_set('Asia/Colombo');
    $today_date = date("Y-m-d H:i:s");

    $get_msg_details_sql = "SELECT * FROM contact_us WHERE msg_id = '$msg_id'";
    $get_msg_details_query = mysqli_query($connection,$get_msg_details_sql);

    $row = mysqli_fetch_assoc($get_msg_details_query);
        
        $email=$row['email'];
        $comment=$row['comment'];
        $msg=$row['message'];
        $name=$row['name'];

    //echo "hello $email";

    if(isset($_POST['submit'])){
        //echo "hello $email";
            
            //send token to the email
            $to=$email;
            $from='info.reserve.lk@gmail.com';
            $subject="Reply : $comment";
            $message='Dear '.$name.', <br><br> We have got your message: <br>'.$msg;
            $message.='<br><br>';
            $message.='Reply from admin : <br>'.$reply;
            $header="From: {$from}\r\nContent-Type: text/html;";

            $send_result=mail($to,$subject,$message,$header);
            if($send_result){
                echo "<script>
                alert('Message sent as an Email!');
                window.location = 'messages.php';
                </script>"; 
                $replied_sql="UPDATE contact_us SET replied='1' WHERE msg_id='$msg_id'";
                mysqli_query($connection,$replied_sql);

                $update_reply_sql = "INSERT INTO replies (reply_id, msg_id, reply, date_time_sent)
                VALUES (NULL, '$msg_id' , '$reply', '$today_date')";
                mysqli_query($connection,$update_reply_sql);
            }
           
            else {
                echo "failed";
                $alert="<div class='failed'>Failed to send the mail!</div>";
            }
                
    }

?>