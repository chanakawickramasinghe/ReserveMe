<script>localStorage.clear();</script>

<?php
session_start();
session_destroy();
unset($_SESSION['login']);
$_SESSION['login'] = false;

header('Location:../../index.php');

?>