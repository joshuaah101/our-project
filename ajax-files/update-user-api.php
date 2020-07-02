<?php
	require '../init.php';
	$response = null;
	if(isset($_POST)){
		$surname = ucfirst($eed->sanitizeString($_POST['surname']));
		$firstname = ucfirst($eed->sanitizeString($_POST['firstname']));
		$midname = ucfirst($eed->sanitizeString($_POST['midname']));
		$gender = $eed->sanitizeString($_POST['gender']);
		$email = $eed->sanitizeString($_POST['email']);
		$vocation = $eed->sanitizeString($_POST['vocation']);
		$phone = $eed->sanitizeString($_POST['phone']);
		$username = $eed->sanitizeString($_POST['username']);
		$password = $eed->sanitizeString($_POST['password']);
		$uid = $eed->sanitizeString($_POST['uid']);
		
		$inst = array(
			"surname" => $surname,
			"firstname" => $firstname,
			"midname" => $midname,
			"gender" => $gender,
			"uid" => $uid,
			"email" => $email,
			"vocation" => $vocation,
			"phone" => $phone,
			"username" => $username,
			"password" => $password
		);

		$inst = (object)$inst;
		$update1 = $eed->updateUser($inst);
		$update2 = $eed->updateUserLogin($inst);
			if($update1 && $update2){
				$response .= 200;
			}else{
				$response .= 300;
			}
		echo $response;
	}
?>