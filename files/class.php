<?php
class Database
{
	private $db_login = "root";
	private $db_host = "localhost";
	private $db_name = "test";
	private $db_pass = "";
	private $mysqli;
	private $res;


	public function __construct()
	{
		$this->connect();
	}

	private function connect()
	{
		if(isset($this->mysqli)) {
			return $this->mysqli;
		} else {
			$this->mysqli = new mysqli($this->db_host,$this->db_login,$this->db_pass,$this->db_name);
		}

	}

	public function query($query)
	{
		if(empty($query)) {
			return false;
		}

		return $this->res = $this->mysqli->query($query);
	}

	public function results() 
	{
		while ($res = $this->res->fetch_object()) {
			$results[] = $res;
		}
		return $results;
	}
}

$db = new Database();
$q = "SELECT * FROM user";
$db->query($q);
$res = $db->results();
print_r($res);