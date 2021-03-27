<?php
session_start();
session_destroy();
unset($_SESSION['login']);
$_SESSION['login'] = false;

header('Location: /ReserveMe/src/customer/index.php')

?>