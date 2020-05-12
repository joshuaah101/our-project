<?php
	class Methods extends File_processing{

	public function sanitizeString($data){
		$data = filter_var($data, FILTER_SANITIZE_STRING);
		return $data;
	}

	public function sanitizeEmail($data){
		$data = filter_var($data, FILTER_VALIDATE_EMAIL);
		return $data;
	}

	public function testMethodClass(){
		echo "methods loading";
	}

}
?>
