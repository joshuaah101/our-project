<?php
	/**
	This is the database connection class
		 */
	class Eed extends Db
	{
		
		public function baseurl(){
			// $base = $_SERVER['DOCUMENT_ROOT'];
			$base = dirname(__FILE__);
			// $base = basename($base);

			echo $base;
		}

		public function test(){
			echo "eed class working";
	}
}
?>