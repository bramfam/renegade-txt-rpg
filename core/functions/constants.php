<?php
/* 
you can use this as of php 7 
if DS constant variable is null then define it
*/
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
// defining a site root the main directory of the project.
defined('SITE_ROOT') ? null : define('SITE_ROOT', 'E:'.DS.'www'.DS.'php-projects'.DS.'project-renegade');
// returns the functions directory.
defined('FUNCTIONS_PATH') ? null : define('FUNCTIONS_PATH', SITE_ROOT.DS.'core'.DS.'functions');
