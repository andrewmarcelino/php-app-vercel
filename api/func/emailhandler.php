<?php
	require(dirname(__FILE__) ."/PHPMailer/PHPMailer.php");
	require(dirname(__FILE__) ."/PHPMailer/SMTP.php");
	require(dirname(__FILE__) ."/PHPMailer/Exception.php");
	include_once("globals.php");
	function SendEmail($title, $body){
		global $globalSettings;
		try {
			$mail = new PHPMailer\PHPMailer\PHPMailer();
			$mail->IsSMTP(); // enable SMTP
			$mail->SMTPOptions = array(
				'ssl' => array(
				'verify_peer' => false,
				'verify_peer_name' => false,
				'allow_self_signed' => true
				)
				);
			$mail->SMTPDebug = false; // debugging: 1 = errors and messages, 2 = messages only ,false = Disable 
            $mail->Host = $globalSettings['mailhost'];
            $mail->Port = $globalSettings['mailport'];
			$mail->SMTPAuth = true; // enable 
			$mail->IsHTML(true);
			$mail->AuthType = 'LOGIN';
			$mail->Username = $globalSettings['mailusername']; //from@domainname.com
			$mail->Password = $globalSettings['mailpassword'];
			$mail->SetFrom($globalSettings['mailusername'], $globalSettings['mailname']);
			$mail->Subject = $title;
			$mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
			$mail->MsgHTML($body);
			$mail->AddAddress("gbicitra@gmail.com");
			$mail->addCC("gbicitra@gmail.com");
		
			$sent= $mail->Send();
			if(!$sent){
				$error = $mail->ErrorInfo;
				//var_dump($error);
				if($error=='You must provide at least one recipient email address.' || 
					strpos($error,"The following recipients failed")){
					$errordata['error']=0;
					return $errordata;
				}
				return 0;
			}else{
				return -1;
			}
		} catch (Exception $e) {
			$errordata['error']=1;
			return $errordata;
		}
	}
?>