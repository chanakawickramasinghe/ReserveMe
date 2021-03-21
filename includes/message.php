<?php

if(isset($_GET['msg'])){		
    echo urldecode(base64_decode(($_GET['msg'])));
}
if(isset ($_GET['msg2'])){
    echo urldecode(base64_decode(($_GET['msg2'])));
}
if(isset ($_GET['menuSubMsg'])){
    
    $menuSubMsg=urldecode(base64_decode(($_GET['menuSubMsg'])));
    echo '<script>alert("'.$menuSubMsg.'")</script>';
}

?>