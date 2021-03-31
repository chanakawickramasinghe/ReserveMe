<?php include('res-session.php'); ?>
<?php include('../../config/connection.php'); 
include('../../public/includes/message.php');?>

<!-- Database update for insert a new menu -->
<?php
$msg = "";

if(isset($_POST['submit'])){
    $item_cat = $_POST['item_cat'];
    $item_name = $_POST['item_name'];
    $item_price = $_POST['price'];

    $sql_add_menu="INSERT INTO menu(item_cat,item_name,item_price) VALUES ('$item_cat','$item_name','$item_price')";

    if($results=$connection->query($sql_add_menu)){
        // $message = base64_encode(urlencode("Menu updated successfully"));
        header('Location:add-menu.php');
        // header('Location:add-menu.php?msg=' . $message);

        exit();
    }

}
// mysqli_close($connection); 
?>

<!-- Database update for set menu for preorders -->
<?php

    if(isset($_POST['pre_update'])){
        $allow_preorder = $_POST['allow_preorder'];
        $item_name= $_POST['item_name'];

        if($allow_preorder==1){
            $sql_add_menu1="UPDATE menu SET allow_preorder=0 WHERE item_name='$item_name'"; 

        if($results1=$connection->query($sql_add_menu1)){
        header('Location:add-menu.php');
        exit();
        }      

        }

        if($allow_preorder==0){
            $sql_add_menu2="UPDATE menu SET allow_preorder=1 WHERE item_name='$item_name'";    
            if($results2=$connection->query($sql_add_menu2)){
                header('Location:add-menu.php');
                exit();
                }  
        }
    }
?>

<!-- Database update for menu details changes -->
<?php

    if(isset($_POST['update'])){
        $item_cat = $_POST['item_cat'];
        $item_name = $_POST['item_name'];
        $price= $_POST['price'];
        $item_id= $_POST['item_id'];

        $sql = "UPDATE menu SET item_cat='$item_cat', item_name='$item_name', item_price='$price' where item_id='$item_id'";
        if($results=$connection->query($sql)){
            header('Location:add-menu.php');
            exit();
            }  else {
                echo "SQL Syntex error";
            }

    }
?>

<!-- Database update for delete the menu -->
<?php

if(isset($_POST['remove'])){
    // echo $_GET['id']; 
    $item_id= $_POST['item_id'];
    
$remove_sql = "DELETE FROM menu WHERE item_id ='$item_id'";
mysqli_query($connection, $remove_sql);

$result = mysqli_query($connection,$remove_sql);

if($result){
    header("Location:add-menu.php");
}
else{
    echo "SQL syntex Error";
    }
}

?>

