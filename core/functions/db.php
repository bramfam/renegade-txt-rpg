<?php 
require_once "connect.php";
$dsn = 'mysql:host=localhost;dbname=renegade';
$username = DB_USER;
$password = DB_PASS;

$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

try {
	$db = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {	
	$error_message = $e->getMessage();
	die($error_message);
	// include('../core/views/db_error_connect.php');
	exit();
}		
/*
$database = new Database();
$db =& $database;
*/