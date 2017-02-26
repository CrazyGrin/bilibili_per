<?php
/**
* user class
*/
class UserModel
{
	private $name;
	private $level;
	private $exp;
	private $coin;

	function __construct($name,$level,$exp,$coin)
	{
		$this->name = $name;
		$this->level = $level;
		$this->exp = $exp;
		$this->coin = $coin;
	}
	function __get($attr){
		return $this->$attr;
	}
	function __set($attr,$value){
		$this->$attr = $value;
	}
}
