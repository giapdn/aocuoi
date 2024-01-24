<?php
require_once "Models/env.php";
class Data
{
	protected $con;
	public function __construct()
	{
		$this->con = new PDO(
			"mysql:host=" . DBHOST . ";dbname=" . DBNAME,
			DBUSER,
			DBPASS
		);
		return $this->con;
		// try {
		// 	$this->con = new PDO("mysql:host=localhost;dbname=aocuoi;charset=utf8", "root", "root");
		// 	return $this->con;
		// } catch (PDOException $e) {
		// }
	}
}
