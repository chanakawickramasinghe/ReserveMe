<?php 
    checkSession();
	if(isset($_SESSION['login']) && $_SESSION['login'] == true && $_SESSION['userType'] == 'Employee') {
	
	} else {
		header("Location:../../includes/login.php");
	}
?>