<?php 
$to = 'mike@plantedtree.net';
$from = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['message'];
$subject = 'Maxim Comment';
if( !empty( $from && $email && $msg ) ) { 
	// To send HTML mail, the Content-type header must be set
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	 
	// Create email headers
	$headers .= 'From: '.$from."\r\n".
	    'Reply-To: '.$from."\r\n" .
	    'X-Mailer: PHP/' . phpversion();
	 
	// Compose a simple HTML email message
	$message = '<html><body>';
	$message .= '<p>Name: '.$from.'</p>';
	$message .= '<p>Email: '.$email.'</p>';
	$message .= '<p>Message: '.$msg.'</p>';
	$message .= '</body></html>';
	 
	// Sending email
	if( mail( $to, $subject, $message, $headers) ) {
	    echo '<span style="color:green;">Your mail has been sent successfully.</span>';
	} else{
	    echo '<span style="color:red;">Unable to send email. Please try again.</span>';
	}
}
