<?php
/**
*This module will be loaded in every load
*/
require_once("constants.php");
// you can now then use the CONSTANTS for the app here..

/*returns the character `/` only */
$uri = filter_input(INPUT_SERVER, 'REQUEST_URI',FILTER_SANITIZE_STRING);
// get_required_files()files()once("./core/helpers.php");

// Database Connection Constants
require_once("connect.php");
// try to connect to the database.
require_once("db.php");
// this contains the methods that will be queried into the DB 
require_once("db_methods.php");
require_once "core/model/account.php";
// remember : send_mail is the module be included when sending email
require_once("send_mail.php");
// loads the method that returns if module is found. 	
require_once("autoloader.php");
require_once("session.php");
require_once("user.php");

// module_is_found_checker('Account');
		