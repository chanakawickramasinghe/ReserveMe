<?php

include('../../includes/connection.php');

if(isset($_POST['submit'])){
	
    // Assign input data from form to variables
    $item_name = $_POST['item_name'];
	$item_avail = $_POST['item_avail'];
    $preorder_avail = $_POST['preorder_avail'];

        
        //Insert to Database
        if(($preorder_avail=="Book") && ($item_avail==1)){            
                $menuQuery1 ="UPDATE `menu` SET `item_avail`=0 where item_name='$item_name'";
                if (mysqli_query($connection,$menuQuery1) === TRUE) {
                    header('Location:menu.php');        
                    exit();
                } 
                
                else {
                    $message = base64_encode(urlencode("Menu 1 SQL Error while Registering"));
                    header('Location:menu.php?menuSubMsg=' . $message);
                    header('Location:menu.php');
                    exit();
                }

        } elseif (($preorder_avail=="Book") && ($item_avail==0)){
            $menuQuery2 = "UPDATE menu SET item_avail=1 where item_name='$item_name'";

            if (mysqli_query($connection,$menuQuery2) === TRUE) {
                header('Location:menu.php');        
                exit();
            } 
            
            else {
                    $message = base64_encode(urlencode("Menu 2 SQL Error while Registering"));
                    header('Location:menu.php?menuSubMsg=' . $message);
                    header('Location:menu.php');
                exit();
            }

        }
        elseif(($item_avail=="Book") && ($preorder_avail==1)){
                $menuQuery3 = "UPDATE menu SET preorder_avail=0 where item_name='$item_name'";
                if (mysqli_query($connection,$menuQuery3) === TRUE) {
                    header('Location:menu.php');        
                    exit();
                } 
                
                else {
                    $message = base64_encode(urlencode("Pre-order Menu 1 SQL Error while Registering"));
                    header('Location:menu.php?menuSubMsg=' . $message);
                    header('Location:menu.php');
                    exit();
                }


        } 
        elseif(($item_avail=="Book") && ($preorder_avail==0)) {
                $menuQuery4 = "UPDATE menu SET preorder_avail=1 where item_name='$item_name'";
                if (mysqli_query($connection,$menuQuery4) === TRUE) {
                    header('Location:menu.php');        
                    exit();
                } 
                
                else {
                    $message = base64_encode(urlencode("Pre-order Menu 2 SQL Error while Registering"));
                    header('Location:menu.php?menuSubMsg=' . $message);
                    header('Location:menu.php');
                    exit();
                }
        }
}


mysqli_close($connection);
   


?>