<?php
spl_autoload_register('module_is_found_checker');


function module_is_found_checker($class){
	$class = strtolower($class);
	$the_path = "includes/{$class}.php";
	if(file_exists($the_path)) {
		require_once($the_path);		
	}
	else {	
		die("The module /  file:{$class}.php wasn't found");
	}
}

