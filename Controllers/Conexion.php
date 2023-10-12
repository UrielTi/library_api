<?php
	class Conexion{ 
	private $host = "localhost";
	private $user = "root";
	private $password = "mysql";
	private $db = "library_api";
	private $conn;

	public function __construct() {
		$connStr = "mysql:hos=".$this->host.";dbname=".$this->db.";charset=utf8";
	
		try{
			$this->conn = new PDO($connStr,$this->user,$this->password);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(Exception $e){
			$this->conn ='Ups, intenta mas tarde';
			echo "ERROR: ". $e->getMessage();
		}
	} 
	public function connect()
	{
		return $this->conn;
	}
}
?>