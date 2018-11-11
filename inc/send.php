<?php

date_default_timezone_set('Etc/UTC');

require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->isSMTP();

// Server Configuration
$mail->Host = 'smtp.gmail.com'; // Which SMTP server to use.
$mail->Port = 587; // Which port to use, 587 is the default port for TLS security.
$mail->SMTPSecure = 'tls'; // Which security method to use. TLS is most secure.
$mail->SMTPAuth = true; // Whether you need to login. This is almost always required.
$mail->IsHTML(true);
$mail->Username = "your@email.com"; // Your Gmail address.
$mail->Password = "yourPassword"; // Your Gmail login password or App Specific Password.


// Variables to be used;
$msg = '';
$msgClass = '';
$ico = '';
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$subject = htmlspecialchars($_POST['subject']);
$message = nl2br(htmlspecialchars($_POST['message']), false);

// Address Configuration.
$mail->setFrom('sender@email.com', 'display name'); // Set the sender of the message.
$mail->addAddress('reciver@email.com', 'display name'); // Set the recipient of the message.
$mail->Subject = 'Contact Request From - '.$name; // The subject of the message.

//Set headers
$mail->addCustomHeader('MIME-Version: 1.0'. '\r\n');
$mail->addCustomHeader('Content-Type: text/html; charset=UTF-8'. '\r\n');
$mail->addCustomHeader('From: ' .$name. '<'.$email.'>'. '\r\n');

//Message Content - Choose simple text or HTML email.
$mail->Body = '<h2>Contact Request</h2>
	<p><b>Name : </b>'.$name.'</p>
    <p><b>E-mail : </b>'.$email.'</p>
	<p><b>Subject : </b>'.$subject.'</p>
	<h4>Message &rArr;</h4>
	<p>'.$message.'</p>';

if(!$mail->send()) {
    echo ' Message could not be sent!';
} else {
    echo ' Message has been sent!';
}
