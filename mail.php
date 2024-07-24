<?php

$to		 = $_GET['to'];
$from	 = $_GET['from'];
$subject = urldecode($_GET['subject']);
$message = urldecode($_GET['message']);
		
$params  = 'From: ' . $from . "\r\n" .
		   'Reply-To: ' . $from . "\r\n" .
		   'X-Mailer: PHP/' . phpversion();

$bool	 = mail($to, $subject, $message, $params);

echo $bool;

?>