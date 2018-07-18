<?php 

/**
* 
*/
class Database
{
	private $db_host = "localhost";
	private $db_user = "root";
	private $db_password = "";
	private $db_name = "test";
	public $pdo;
	public function __construct()
	{
		if (!isset($this->pdo)) {
			try {
				$link = new PDO("mysql:host=".$this->db_host.";dbname=".$this->db_name,$this->db_user, $this->db_password);
				$link -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$link -> exec("SET CHARACTER SET utf8");
				$this -> pdo = $link;

			} catch (PDOException $e) {
				die("Failed to connect DB".$e -> getMessage());
				
			}
		}

		
	}

}

 ?>