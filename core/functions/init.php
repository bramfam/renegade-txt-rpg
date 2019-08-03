<?php

require_once("constants.php");
// you can now then use the CONSTANTS for the app here..

/*returns the character `/` only */
$uri = filter_input(INPUT_SERVER, 'REQUEST_URI',FILTER_SANITIZE_STRING);
// get_required_files()once("./core/helpers.php");

require_once("autoloader.php");
require_once("connect.php");
require_once("db.php");
require_once("db_methods.php");
require_once("account.php");
// remember : send_mail is the module be included when sending email
require_once("send_mail.php");

// module_is_found_checker('Account');
