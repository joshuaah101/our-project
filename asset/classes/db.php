<?php
class Db{
		private $stmt;
		private $user = 'root';
		private $password = '';
		private $dsn = 'mysql:host=localhost;dbname=eed';
		private $conn;

	function __construct()
	{
		try{
			$this->conn = new PDO($this->dsn,$this->user,$this->password);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(PDOException $exception){
			die($exception->getMessage());
		}
	}

	public function userLogin($data){
		$this->stmt = $this->conn->query("SELECT * FROM user_login WHERE username = '{$data->username}' AND password = '{$data->password}'");
		return $this->stmt;
	}

	public function customQuery($query){
		$this->stmt = $this->conn->query($query);
		return $this->stmt;
	}
}

?>