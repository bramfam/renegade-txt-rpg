<?php
// Debugging tools. Only turn these on in your development environment.

function send_html_email(){
	$mail = new PHPMailer();
	$mail->From = "from@example.com"; 
	$mail->FromName = "Full Name"; 
	$mail->addReplyTo("reply@example.com", "Reply Address"); 
	$mail->	addAddress("recepient1@example.com", "Recepient Name"); 
	$mail->ddAddress("recepient2@example.com"); 
	$mail->addCC("cc@example.com"); 
	$mail->addBCC("bcc@example.com"); 
	$mail->Subject = "Subject Text"; 
	$mail->isHTML(true); 
	$mail->Body = emailBodyHTML();
	$mail->AltBody = "This paragraph is not bold.\n\nThis text is not italic.";
		if($mail->send()) { 
		// Success! Redirect to a thank you page. Use the    // POST/REDIRECT/GET pattern to prevent form resubmissions    // when a user refreshes the page.

		}
}


function emailBodyHTML()
{
	return "<html>
	<body><p><b>This paragraph is bold.</b></p><p><i>This text is italic.</i></p></body></html>"; 

}