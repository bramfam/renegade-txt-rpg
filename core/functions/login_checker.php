<?php

require_once "core/helpers.php";
// if there's no logged on user-> redirect to the login page right away

function check_if_user_is_already_logged_on(){
	if((isset($_SESSION['login']) && $_SESSION['login'] != '')) {
		redirect('Location: '.$_SERVER['PHP_SELF']);
	}
}

function view_missions_if_there_is_a_logged_on_user(){
	// if there's no logged on user redirect to the login page
	if(!isset($_SESSION["login"])) {    
	// notify("please login first");
		header('Location:login.php');
		exit; 
	} 
	else { 
		header('Location:browse-missions.php');
	}
}

