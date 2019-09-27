<?php

require "core/classes/PHPMailer.php";

$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPAuth();
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';
$mail->isHTML();
$mail->username = 'abrham.bas17@hotmail.com';
$mail->password = '$2y$10$kwK0jpoSniZy0ErCitBVFuHsSXr97tPCT7rg/kfLj02ghC5mnctPC' ; 
$mail->setFrom('no-reply@howcode.org');
$mail->subject = "A test email";
$mail->addAddress('abrhambas02@gmail.com');
?>


<!-- 
$mail->From  = "aib@example.com";
$mail->FromName = "Full Name";
$mail->addReplyTo("reply@example.com", "Reply Address");
$mail->addAddress("recepient1@example.com", "Recepient Name"); $mail->addAddress("recepient2@example.com"); $mail->addCC("cc@example.com"); $mail->addBCC("bcc@example.com"); $mail->Subject  = "Subject Text"; $mail->Body     = "This is a sample basic text email using PHPMailer.";
if($mail->send()) {    // Success! Redirect to a thank you page. Use the    // POST/REDIRECT/GET pattern to prevent form resubmissions    // when a user refreshes the page.
 
    header('Location: http://example.com/path/to/thank-you.php', true, 303);    exit; } else {    echo "Error: " . $mail->ErrorInfo; }  -->