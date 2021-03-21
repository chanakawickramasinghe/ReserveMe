<?php

include("../../includes/connect2.php");
include("../../includes/session.php");

if( isset($_REQUEST['action']) ){
	switch( $_REQUEST['action'] ){
		case "SendMessage":
			checkSession();
			$query = $connection->prepare("INSERT INTO chat SET user=?, message=?");
			$query->execute([$_SESSION["emp_name"], $_REQUEST['message']]);
			echo 1;
		break;

		case "getChat":
			$query = $connection->prepare("SELECT * from chat");
			$query->execute();
			$rs = $query->fetchAll(PDO::FETCH_OBJ);
			$chat = '';
			foreach( $rs as $r ){
				$chat .=  '<div class="siglemessage"><strong>'.$r->user.' says:  </strong>'.$r->message.'</div>';
			}
			echo $chat;

		break;
	}
}
?>