<?php
class Data{
	protected $con;
	public function __construct()
	{
		try
		{
			$this->con = new PDO("mysql:host=localhost;dbname=tutorial;charset=utf8", "root", "root");
			return $this->con;
		}
		catch (PDOException $e){}
	}
}
?>