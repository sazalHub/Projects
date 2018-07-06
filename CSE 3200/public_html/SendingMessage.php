<?php

	if (isset($_POST['send_message'])){

		$sender_name = $_POST['sender'];
		$sender_email = $_POST['sender_mail'];
		$message = $_POST['message'];
		
		if (empty($sender_name) || empty($sender_email) || empty($message)){
		    header("Location:index.php?result=empty");
			exit();
		}

		$to = "Admin_Gmail_Address";
		$subject = "Feedback";
		$headers = "From: '$sender_email'('$sender_name')";

		if (mail($to, $subject, $message, $headers)){
			header("Location:index.php?result=success");
			exit();
		}
		else{
				header("Location:index.php?result=error1");
				exit();
		}
	}
	else{
		header("Location:index.php?result=error2");
		exit();
	}

?>
