<?php
function checkSession(){
	if(empty(session_id())){
        session_start();
    }
}
?>

<?php 
    checkSession();
	if(isset($_SESSION['login']) && $_SESSION['login'] == true && $_SESSION['userType'] == 'Restaurant') {
	
	} else {
		$message = base64_encode(urlencode("Please Login As a Restaurant"));
		header('Location:../../public/includes/login.php?msg='.$message);
	}
?>