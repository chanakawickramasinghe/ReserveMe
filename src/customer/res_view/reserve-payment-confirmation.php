<?php
 include('../../../config/connection.php');
 include('../../../public/includes/session.php');
 ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script>


     $.ajax({

     url: 'reserve-confirm-submit.php',
     data: {  

       cus_id:localStorage.getItem('cus_id'),
       table_id:localStorage.getItem('table_id'),
       guests2:localStorage.getItem('guests2'),
       date2:localStorage.getItem('date2'),
       time2:localStorage.getItem('time2'),           
             
     },

     type: 'POST'
     }).done(function(resp) {

     if (resp) {
        localStorage.clear();
        alert("Your reservation succesfull!!! You will recive an email with payment details!!!");
        window.location.href ='../reservation_details.php';
     } else {
       alert("Error in Reservation..! please Contact our support Team");
       window.location.href = "../reservation_details.php";
     }
     });

    </script>