<?php
/*used for manipulating the users table.*/
require_once "core/model/login_db.php";
require_once "core/helpers.php";

class Account { 
	public static function attempt_login($pin, $field, $password){		
		if (is_a_verified_user($pin,$field,$password) === true) {
			redirect('.././pages/admin');
		} else {
			redirect('.');
		}
	}
	
	public function register($pin, $field, $pwd ){

	}

	
	public function toggleActiveStatus(){}

}
