<?php
	require '../init.php';
	$response = null;
	if(isset($_POST)){
		$surname = ucfirst($eed->sanitizeString($_POST['surname']));
		$firstname = ucfirst($eed->sanitizeString($_POST['firstname']));
		$midname = ucfirst($eed->sanitizeString($_POST['midname']));
		$gender = $eed->sanitizeString($_POST['gender']);
		$user_id = $eed->sanitizeString($_POST['user_id']);
		$department = $eed->sanitizeString($_POST['department']);
		$vocation = $eed->sanitizeString($_POST['vocation']);
		
		$inst = array(
			"surname" => $surname,
			"firstname" => $firstname,
			"midname" => $midname,
			"gender" => $gender,
			"user_id" => $user_id,
			"department" => $department,
			"vocation" => $vocation
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