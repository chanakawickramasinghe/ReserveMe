<?php
    include('../../../includes/connection.php');
    if(isset($_GET['id'])){
        $cart_id = $_GET['id'];
        echo $cart_id;

        $sql_dlt ="DELETE FROM cart WHERE cart_id=$cart_id";
        if($connection->query($sql_dlt)){
            header('Location:preorder.php');

        } else {
            echo "Check your SQL";
        }
    }

?>