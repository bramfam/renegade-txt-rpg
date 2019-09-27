<?php
/* 
you can use this as of php 7 
if DS constant variable is null then define it
*/
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR); // returns \ or a directory separator like '\'; 

// defining a site root the main directory of the project.
defined('SITE_ROOT') ? null : define('SITE_ROOT', 'E:'.DS.'www'.DS.'php-projects'.DS.'project-renegade'); // E:\www\php-projects\project-renegade

// returns the functions directory OF THE PROJECt.
defined('FUNCTIONS_PATH') ? null : define('FUNCTIONS_PATH', SITE_ROOT.DS.'core'.DS.'functions'); 
// E:\www\php-projects\project-renegade\core\functions