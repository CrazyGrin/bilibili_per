<?php
/**
* Myqsql_view
*/
class Myqsql_view
{

	public $mysql;
	public $req;
	public $result;

	function __construct($database)
	{
		echo "construct";
		$mysql = new PDO($database);
	}

	function select ($statement){

		$req = $mysql->query($statement);
		$result = $req->fetch(PDO::FETCH_ASSOC);

		return $result;
	}
	function insert($statement){

		$mysql->exec($statement) or die(print_r($db->errorInfo(), true));


	}
	function insert($statement){

		$mysql->exec($statement) or die(print_r($db->errorInfo(), true));

	}

	function insert($statement){

		$mysql->exec($statement) or die(print_r($db->errorInfo(), true));

	}
}