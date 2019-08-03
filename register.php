<?php 
require_once ("core/functions/init.php");

start_registering();

// queries to the db if email is found
function checkIfEmailIsFound($email){
// returns 1 or zero 
	global $db ;
	$query = SELECT COUNT(*) FROM users where email = $email ; 
	try {
		$statement = $db->prepare($query);
		$statement->execute();
		$result = $statement->fetchAll();
		$statement->closeCursor();
		return $result;
	} catch (PDOException $e) {
		$error_message = $e->getMessage();
		display_db_error($error_message);
	}
}

function start_registering(){
/*
var_dump($_POST);
 or 
print_r($_POST);
*/
/*
Array ( [full_name] => Olga Grant [email] => mydomaqajy@mail.com [password] => Pa$$w0rd! [confirm] => Pa$$w0rd! ) 
*/

session_start();

$email = $_POST['email'];

$full_name = $_POST['full_name'];

$pwd = $_POST['password'];

$confirm_password = $_POST['confirm'];

// if passed
if (isset($email) && isset($full_name) && isset($pwd) && isset($confirm_password)) {
// if password is not the same as confirm_password
	if ($pwd != $confirm_password){
			// take note that we would want to still put the form fields of the previous registration..
		redirect('index.php');
	}	

	// if passwords are matched..
	else {
// returns 1 if email is found and 0 if it's not
		$status = checkIfEmailIsFound($_POST['email']);

		var_dump($status)  ;
		// if ( $status == 1){
	// if the email is found then check if email's account is activated or not.
	//  if it's activated already then send a proper response
			// $this->sendEmail(); 
	//  if it's not then send an email that he needs to verify his account.  change the activation status to active then go away.
	// it's not found then send a proper response

	// then check if the user's status is 0 if 
	// then send a proper response to the user..
	}
	// if it's not
	/*else {
		send_mail($email,$status);
		change_account_status();
		Account::register($email,$full_name,$pwd);
	}	*/


}
else {
	print "complete the form fields";
}

}

function display_db_error(){
	
}

function send_mail($email,$status){
	error_reporting(-1);
	ini_set('display_errors', 'On');
	set_error_handler("var_dump");
	// Special mail settings that can make mail less likely to be considered spam // and offers logging in case of technical difficulties.
	ini_set("mail.log", "/tmp/mail.log"); 
	ini_set("mail.add_x_header", TRUE);
	// The components of our email
	$to = $email; 
	$subject = 'Email Subject';
	$message = 'This is the email message body'; 
	$headers = implode("\r\n", [ 
		'From: admin@renegade-rpg.com',   
		'Reply-To: webmaster@example.com',  
		'X-Mailer: PHP/' . PHP_VERSION ]);

	$result = mail($to, $subject, $message, $headers);
	// Check the results and react accordingly
	if ($result) {
	    // Success! Redirect to a thank you page. Use the    // POST/REDIRECT/GET pattern to prevent form resubmissions    // when a user refreshes the page.
		header('Location: http://example.com/path/to/thank-you.php', true, 303);

		exit;
	} else {
	    // Your mail was not sent. Check your logs to see if    // the reason was reported there for you.	
	}
}



/*class Register { 

	function register(){ 
		$user = $_POST['first_name'];
	}
	// $status = $this->checkIfEmailIsFound($_POST['email']); // returns 1 if email is found and 0 if it's not
		//  if it's found
	

}
*/