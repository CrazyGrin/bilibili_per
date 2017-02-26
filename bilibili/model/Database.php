<?php
/**
* 
*/
class Datebase
{
	private $DBaddress;
	private $DBname;
	private $DBusername;
	private $DBpassword;
	private $pdo;
	private $query;
	private $request;
	private $data;
	function __construct($DBaddress,$DBname,$DBusername,$DBpassword)
	{
		$this->$pdo = new PDO('mysql:host=$DBaddress;dbname=$DBname','$DBusername','$DBpassword');
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	function __get($attr){
		return $this->$attr;
	}
	function __set($attr,$value){
		$this->$attr = $value;
	}
}