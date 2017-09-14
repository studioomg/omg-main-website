<?php

		$name = 'Erik';
		$email = 'eriklopes01@hotmail.com';
		$message = 'teste de email php';
		$msg = wordwrap($message,70);
		$from = 'SITE ST.OMG'; 
		$to = 'atendimento@studioomg.com.br'; 
		$subject = 'Email de ST.OMG';
		
		$body = "From: $name\n E-Mail: $email\n Message:\n $msg";
		
		
		
		mail ($to, $subject, $body, $from);
        
        if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Mesagem enviada! Entrarei em contato assim que possível.</div>';
	} else {
		$result='<div class="alert alert-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> Erro: Tente novamente mais tarde.</div>';
	}
	
	echo $result;
?>