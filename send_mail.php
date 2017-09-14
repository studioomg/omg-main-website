<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$msg = wordwrap($message,70);
		$from = 'SITE ST.OMG'; 
		$to = 'atendimento@studioomg.com.br'; 
		$subject = 'Email de ST.OMG';
		
		$body = "From: $name\n E-Mail: $email\n Message:\n $msg";
		
		mail ($to, $subject, $body, $from);
	}
?>