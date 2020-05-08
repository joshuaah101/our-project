<?php
class Db{
	private $stmt;
		private $user = 'root';
		private $password = '';
		private $dsn = 'mysql:host=localhost;dbname=compiler_works';
		private $db;

		function __construct()
		{
			try{
				$this->db = new PDO($this->dsn,$this->user,$this->password);
				$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}catch(PDOException $exception){
				die($exception->getMessage());
			}
		}
}

?>