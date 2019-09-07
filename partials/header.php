<?php 
// maybe add this as a separate module..
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
// defining a site root the main directory of the project.
defined('SITE_ROOT') ? null : define('SITE_ROOT', DS.'E:'.DS.'www'.DS.'php-projects'.DS.'renegade');
// the core/functions path.. 
defined('INCLUDES_PATH') ? null : define('INCLUDES_PATH', SITE_ROOT.DS.'core'.DS.'functions');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Renegade RPG <?php $pageTitle; ?> </title>
	<!-- <link href="../public/css/reset.css" rel="stylesheet"> -->
	<link href="../public/css/fonts.css" rel="stylesheet">
	<link href="../public/css/app.css" rel="stylesheet">
</head>
<body class="bg-black text-white h-full">
	<div id="app">

