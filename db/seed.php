<?php
require_once('../vendor/fzaninotto/faker/src/autoload.php');
require_once("connect.php");
require_once("db.php");	
require_once("db_methods.php");

$faker = Faker\Factory::create();

define(NO_OF_USERS_TO_SEED,5);

seedUsers($faker);

function seedUsers($faker){
	global $database;
	$properties = $this->clean_properties();	
	$sql = "INSERT INTO " users."(".implode(",", array_keys($properties)).")";
	$sql .= "VALUES ('".  implode("','", array_values($properties))        ."')";
	if($database->query($sql)) {
		$this->id = $database->the_insert_id();
		return true;
	}
	 else {
		return false;	
	}
}

// echo $faker->name ; 
