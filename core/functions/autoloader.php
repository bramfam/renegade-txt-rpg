<?php

// loads the method that returns if module is found. 	
spl_autoload_register('module_is_found_checker');

// method that checks if the module / file / a class exists
function module_is_found_checker($class){
	$class = strtolower($class);
	
	$the_path = "includes/{$class}.php";

	if(file_exists($the_path)) {
		require_once($the_path);		
	} 
	
	else {	
		die("This file name {$class}.php was not found man....");
	}
}

function redirect($path){
	session_write_close();
	header("Location:".$path);
	exit ; 
}