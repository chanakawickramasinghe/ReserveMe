<?php
function checkSession(){
	if(empty(session_id())){
        session_start();
    }
}
?>

<?php 
    checkSession();
	if(isset($_SESSION['login']) && $_SESSION['login'] == true && $_SESSION['userType'] == 'Employee') {
	
	} else {
		$message = base64_encode(urlencode("Please Login As a employee"));
		header('Location:../../includes/login.php?msg'.$message);
	}
?>