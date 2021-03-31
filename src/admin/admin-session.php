<?php
function checkSession(){
	if(empty(session_id())){
        session_start();
    }
}
?>

<?php 
    checkSession();
	if(isset($_SESSION['login']) && $_SESSION['login'] == true && $_SESSION['userType'] == 'admin') {
	
	} else {
		$message = base64_encode(urlencode("Please Login as an Admin"));
		header('Location:../../public/includes/login.php?msg='.$message);
	}
?>