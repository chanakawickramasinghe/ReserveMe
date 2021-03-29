<?php include('../../../includes/connection.php'); ?>
<?php include('../../../includes/session.php'); ?>

<?php
    if(isset($_POST['cart'])){

        // $item_id=$_POST['2'];
        
        // sql for get the available preorder menu
        $search_menu = "SELECT * FROM menu WHERE item_avail='1' And preorder_avail = '1' AND allow_preorder = '1'";
        $result_menu = mysqli_query($connection,$search_menu);
        while($row = mysqli_fetch_assoc($result_menu)){
            $item_id= $row['item_id'];
            
            // $item_id1= $_POST['$item_id'];
            // echo $item_id1;

        }
    }





?>