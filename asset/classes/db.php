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

	public function addUser($data){
		$this->stmt = $this->conn->query("INSERT INTO instructor(uid, surname, firstname, midname, gender, department, vocation) VALUES('{$data->user_id}','{$data->surname}','{$data->firstname}','{$data->midname}','{$data->gender}','{$data->department}','{$data->vocation}')");
		return $this->stmt;
	}

	public function updateUser($data){
		$this->stmt = $this->conn->query("UPDATE instructor SET surname = '{$data->surname}', firstname = '{$data->firstname}', midname = '{$data->midname}', gender = '{$data->gender}', department = '{$data->department}', vocation = '{$data->vocation}' WHERE uid = '{$data->user_id}'");
		return $this->stmt;
	}
}

?>