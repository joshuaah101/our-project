<?php
	class File_processing extends Db{
		
	//PROCESSING UPLOAD FILES
	public function get_file_name($action,$file_ref){
		if(isset($_POST[$action])){
			return $name = $_FILES[$file_ref]['name'];
		}
	}

	public function get_extension($action,$file_ref){
			if(isset($_POST[$action])){
			$upload = $_FILES[$file_ref]['name'];
			$file_extension = pathinfo($upload, PATHINFO_EXTENSION);
			return $file_extension;
		}
	}

	public function get_size($action,$file_ref){
		if(isset($_POST[$action])){
			$size = $_FILES[$file_ref]['size'];
			$size = $size * 0.001; // to kilobyte
			
			return round($size);
		}
	}

	public function get_tmp_name($action,$file_ref){
		if(isset($_POST[$action])){
			return $tmp_name = $_FILES[$file_ref]['tmp_name'];
		}
	}

}
?>