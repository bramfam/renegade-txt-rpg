<?php
if(isset($_POST['submit'])) {
	$pin = trim($_POST['pin']);
	$password = trim($_POST['password']);
	echo $pin ;

/// Method to check database user
	$user_found = User::verify_user($pin, $password);    
	
	if($user_found) {
		
		$session->login($user_found);
		redirect("index.php");
		
	} else {
		
		$the_message = "Your password or username are incorrect";     
	}    
}
else {
	$username = "";
	$password = "";
	$the_message = "";
}