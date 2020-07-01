<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	$tel = strip_tags($_POST['tel']);
	
	$res = array();
	
	if(empty($tel)) {
		$res['error'] = "Нужно добавить номер телефона!";
		echo json_encode($res);
		
		exit();
	}
	
	require 'vendor/autoload.php';
	
	$message = Swift_Message::newInstance();
	
	$message->setSubject('Обратный звонок');
	
	$message->setFrom(array('' => 'Shop'));
	
	$message->setTo(array(''));
	
	$message->setBody('Перезвоните мне по номеру - '. $tel);
	
	$transport = Swift_MailTransport::newInstance();
	
	$mailer = Swift_Mailer::newInstance($transport);
	
	$result = $mailer->send($message);
	
	if($result) {
		$res['success'] = '';
	}
	
	echo json_encode($res);
		
	exit();

}

exit();