<?php
/**
* video class
*/
class VideoModel
{
	private $title;
	private $date;
	private $owner;
	private $click;
	private $coin;
	private $barrage;
	private $url;

	function __construct($title,$date,$owner,$click,$coin,$barrage,$url)
	{
		$this->title = $title;
		$this->date = $date;
		$this->owner = $owner;
		$this->click = $click;
		$this->coin = $coin;
		$this->barrage = $barrage;
		$this->url = $url;
	}
	function __get($attr){
		return $this->$attr;
	}
	function __set($attr,$value){
		$this->$attr = $value;
	}
}