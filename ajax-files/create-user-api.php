<?php
	require '../init.php';
	$response = null;
	if(isset($_POST)){
		$surname = ucfirst($eed->sanitizeString($_POST['surname']));
		$firstname = ucfirst($eed->sanitizeString($_POST['firstname']));
		$midname = ucfirst($eed->sanitizeString($_POST['midname']));
		$gender = $eed->sanitizeString($_POST['gender']);
		$user_id = $eed->sanitizeString($_POST['user_id']);
		$vocation = $eed->sanitizeString($_POST['vocation']);
		$email = $eed->sanitizeEmail($_POST['email']);
		$username = $eed->sanitizeString($_POST['username']);
		$phone = $eed->sanitizeString($_POST['phone']);
		$password = $eed->sanitizeString($_POST['password']);
		
		$inst = array(
			"surname" => $surname,
			"firstname" => $firstname,
			"midname" => $midname,
			"gender" => $gender,
			"user_id" => $user_id,
			"vocation" => $vocation,
			"username" => $username,
			"password" => $password,
			"email" => $email,
			"phone" => $phone
		);

		$inst = (object)$inst;

		$check = $eed->customQuery("SELECT * FROM instructor WHERE uid = '{$inst->user_id}' OR firstname = '{$inst->firstname}'");
		if($check->rowCount() == 1){
			$response .= 502;
		}elseif($check->rowCount() < 1){
			$insert = $eed->addUser($inst);
			if($insert){
				$response .= 200;
			}else{
				$response .= 404;
			}
		}
		echo $response;
	}
?>