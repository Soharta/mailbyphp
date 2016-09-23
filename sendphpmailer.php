<?php

function mailer($name, $email, $sub, $text) {

	require 'PHPMailer/PHPMailerAutoload.php';

	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->SMTPSecure = 'ssl';
	$mail->SMTPAuth = true;
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 465;
	$mail->CharSet = "UTF-8";
	$mail->Username = 'yegor.tikhanin@gmail.com';
	$mail->Password = 'hamhamham';
	$mail->setFrom('alohawind@mail.ru');
	$mail->addAddress('soharta@list.ru');
	$mail->Subject = 'Письмо от: '.$name;
	// $mail->Body = 'Письмо';
	$mail->Body = "<div>Письмо от: $name<br>Обратный адрес: $email<br>$text</div>";
	//send the message, check for errors
	if (!$mail->send()) {
	    echo "ERROR: " . $mail->ErrorInfo;
	} else {
	    echo "SUCCESS";
	}

}

?>