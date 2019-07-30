<?php
require "./functions/db";
class Character {

	// should return the logged on characters name
	public $character_name;
	
	// returns the characters real name
	public $real_full_name;

	function __construct(){
		$this->character_name = $character_name ;
		$this->real_full_name = $real_full_name ;
	}

	function returns_rank_of_the_character(){
		
	}

	public static function display_characters_info()
	{
		$this->character_name = $_GLOBAL['AUTH'];
	}

}