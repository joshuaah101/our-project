<?php
	require "../init.php";
	session_start();
	$response = null;
	if(isset($_POST)){
		$username = $eed->sanitizeString($_POST['username']);
		$password = $eed->sanitizeString($_POST['password']);
		//setting admin key to 1 and otherwise instructor
		$_SESSION['is_admin'] = 1;
		$_SESSION['login_id'] = $username;

		$login = array(
			"username" => $username,
			"password" =>$password
		);

		$login = (object)$login;

		$send_login = $eed->userLogin($login);
		if($send_login->rowCount() == 1){
			$response .= 200;
		}else{
			$response .= 404;
		}
		echo $response;
	}
?>