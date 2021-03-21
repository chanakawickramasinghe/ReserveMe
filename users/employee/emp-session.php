<?php 
	// session_start();
	// if(isset($_POST['logout'])) {
	// 	$_SESSION['login'] = false;
    //     unset($_SESSION['login']);
    //     unset($_SESSION['orgID']);
	// }
    checkSession();
	if(isset($_SESSION['login']) && $_SESSION['login'] == true && $_SESSION['userType'] == 'Employee') {
	
	} else {
		header("Location:../../includes/login.php");
	}
?>