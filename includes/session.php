<?php

function checkSession(){
	if(empty(session_id())){
        session_start();
    }
}
?>

<?php 
	// session_start();
	// if(isset($_POST['logout'])) {
	// 	$_SESSION['login'] = false;
    //     unset($_SESSION['login']);
    //     unset($_SESSION['orgID']);
	// }
	// if(isset($_SESSION['login']) && $_SESSION['login'] == true && $_SESSION['userType'] == 5) {
	
	// } else {
	// 	header("Location:../../pages/advertiser/AdvertLogin.php");
	// }
?>