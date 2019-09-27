<?php 
require_once("core/functions/init.php");

start_registering();

// queries to the db if email is found
function check_if_email_is_found($email){
// returns 1 or zero 
	global $db ;	
	$query = 'SELECT * FROM users WHERE email = :email' ; 
	$statement = $db->prepare($query);
	$statement->bindValue(':email', $email);
	$statement->execute();
	$user = $statement->fetch();
	$statement->closeCursor();
	return $user;

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

$email = $_POST['email'];
$full_name = $_POST['full_name'];
$pwd = $_POST['password'];
$confirm_password = $_POST['confirm'];
// if passed then 
if (isset($email) && isset($full_name) && isset($pwd) && isset($confirm_password)) {
// if password is not the same as confirm_password
	if ($pwd != $confirm_password) {
// take note that we would want to still put the form fields of the previous registration..
		redirect('index.php');
	}	

	// if passwords are matched..
	else {
// returns 1 if email is found and 0 if it's not
		$status = check_if_email_is_found($_POST['email']);
		//  if he is not available to be registered.. then redirect back
		if (is_bool($status) === false) {
			echo "Yes, this is a false boolean";
			redirect('index') ; 
		}
		//  if he is available to be registered.. 
		elseif (is_bool($status) === true) {
			// then send a mail to the user

			$this->send_email($email, $status); 

			// send_mail($email, $status);

			// save_user($email) ; 


		}
		else {
			echo "Yes, this is a non boolean";
		}
	}
}
else {
	print "complete the form fields";
}
}


function sign_up()
{


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