<?php
// initial files to load.. 
require_once "core/functions/init.php" ;
require_once "core/functions/constants.php";
require_once "core/classes/fields.php";
require_once "core/functions/validate.php";
include_once "partials/header.php";
require_once "core/functions/login_checker.php";
// validating the login 2

// checks if user is already set up.
check_if_user_is_already_logged_on() ; 
/*
$validate = new Validate() ; 	
$fields = $validate->get_fields() ;
*/

/*if user tried to login*/
if(isset($_POST['submit'])) {
	$pin = filter_input(INPUT_POST, 'pin');
	$field = filter_var($pin, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
	$password = filter_input(INPUT_POST, 'password');
/**
* Try to validate the request if the pin is ok..
*/
// $validate->pin('email',$pin);
	Account::attempt_login($pin, $field, $password);  
}
/*if not*/
else {
	$username = "";
	$password = "";
	$the_message = "";
}
include_once "partials/nav.php";
?>

<section id="body-content">
	<div id="container" class="">
		<div id="main-content">
			<div class="">
				<h3 class="text-center mb-6 text-4xl font-serif">User Login</h3>
				<div class="w-full user-account-output font-sans">
					<section id="registerUser" class="flex items-center justify-center">
						<form name="login" action="" class="max-w-half w-full" id="registerForm" method="POST">
							<div class="input-group mb-4">
								<input placeholder="Username / Email " name="pin" type="text" class="items-center text-black font-normal bg-inputcolor text-xl p-4 w-full">
							</div>		

							<div class="input-group mt-4">
								<input type="password" required name="password" placeholder="Password" class="items-center text-black font-normal bg-inputcolor text-xl p-4 w-full">
							</div>

							<div class="input-group mt-4">
								<input value="Enter" name="submit" type="submit" class="hover:text-green text-white font-normal bg-buttoncolor text-xl p-4 w-full">
							</input>
						</div>

						<div class="input-group mt-2 relative">
							<div class="flex">
								<input class="h-4 w-4 mt-2 mr-1" type="checkbox">
								<p class="text-xl font-sans">Remember me
								</p>
							</div>
						</div>
					</form>
				</section>
			</div>
		</div>
	</div>
</div>
</section>