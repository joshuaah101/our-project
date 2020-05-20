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
		$position = $eed->sanitizeString($_POST['position']);
		
		$inst = array(
			"surname" => $surname,
			"firstname" => $firstname,
			"midname" => $midname,
			"gender" => $gender,
			"user_id" => $user_id,
			"department" => $department,
			"position" => $position
		);

		$inst = (object)$inst;
		$update = $eed->updateUser($inst);
			if($update){
				$response .= 200;
			}else{
				$response .= 300;
			}
		echo $response;
	}
?>