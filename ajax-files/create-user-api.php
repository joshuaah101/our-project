<?php
	require '../init.php';
	$response = null;
	if(isset($_POST)){
		$surname = ucfirst($eed->sanitizeString($_POST['surname']));
		$firstname = ucfirst($eed->sanitizeString($_POST['firstname']));
		$midname = ucfirst($eed->sanitizeString($_POST['midname']));
		$gender = $eed->sanitizeString($_POST['gender']);
		$uid = $eed->sanitizeString($_POST['uid']);
		$vocation = $eed->sanitizeString($_POST['vocation']);
		$email = $eed->sanitizeEmail($_POST['email']);
		$username = $eed->sanitizeString($_POST['username']);
		$phone = $eed->sanitizeString($_POST['phone']);
		$password = $eed->sanitizeString($_POST['password']);
		$role = $eed->sanitizeString($_POST['role']);
		
		$inst = array(
			"surname" => $surname,
			"firstname" => $firstname,
			"midname" => $midname,
			"gender" => $gender,
			"uid" => $uid,
			"vocation" => $vocation,
			"username" => $username,
			"password" => $password,
			"email" => $email,
			"phone" => $phone,
			"role" => $role
		);

		$inst = (object)$inst;

		$check = $eed->customQuery("SELECT * FROM users WHERE uid = '{$inst->uid}' OR firstname = '{$inst->firstname}'");
		if($check->rowCount() == 1){
			$response .= 502;
		}elseif($check->rowCount() < 1){
			$insert1 = $eed->addUser($inst);
			$insert2 = $eed->addUserLogin($inst);

			if($insert1 && $insert2){
				$response .= 200;
			}else{
				$response .= 404;
			}
		}
		echo $response;
	}
?>