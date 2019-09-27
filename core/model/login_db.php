<?php 
require_once "core/functions/db.php" ; 
function is_a_verified_user($pin, $email, $password){
	global $db;
	// $password = sha_1($password,PASSWORD_DEFAULT);
	$password = sha1($email . $password);
	// $query = 'SELECT * FROM users WHERE :field = :pin AND password = :password';
	$query = "SELECT * FROM users WHERE username = :pin OR email = :pin AND password= :password";	
	$statement = $db->prepare($query);
	$statement->bindValue(':pin', $pin);
	$statement->bindValue(':password', $password);
	$statement->execute();
	$valid = ($statement->rowCount() == 1);
	$statement->closeCursor();
	return $valid;
}


function calls_the_user_if_there_is()
{
	
}

var_dump(is_a_valid_login("zturner@example.net","email","secret"));
