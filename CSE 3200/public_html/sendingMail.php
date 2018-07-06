<?php

	if (isset($_POST['code_submit'])){

		$identity = $_POST['send_code_to'];

		$connection = mysqli_connect('localhost', 'id6300094_alumni','alumni','id6300094_alumni') or die(mysqli_error());
		$query = "select * from personal where roll='$identity';";
		$res = mysqli_query($connection,$query);

		if ($res){
			$row = mysqli_fetch_array($res);

			$digits = 10;
			$dt = date("Ymd");
			$tm = time();
			$codes = $dt.str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT).$tm;
			$to = $row['email'];
			$subject = "Account Activation";
			$message = "Dear ".$row['name'].", here is your account activation code.Go submit it and follow the next steps...'$codes'";
			$headers = "From: sazalsarkar24_7@gmail.com";

			///echo $to;

			if (mail($to, $subject, $message, $headers)){
			    
				$query = "select * from activation_codes where roll='$identity'";
				$rs = mysqli_query($connection,$query);
				
				if (mysqli_num_rows($rs)>0){
				    $query = "update activation_codes set code='$codes', info='$dt,$tm' where roll='$identity';";
				}
				else{
				    $query = "insert into activation_codes(roll,code,info) values('$identity','$codes','$dt,$tm');";
				}
				
				$rs = mysqli_query($connection,$query);
				
				if ($rs){
				    header("Location:SetPassword.php");
				    ///echo $query;
				    exit();
				}
				else{
				    header("Location:Active.php?result=error");
				    exit();
				}
			}
			else{
				header("Location:Active.php?result=error");
			}
		}
		else{
				header("Location:Active.php?result=error");
				exit();
		}
	}
	else{
		header("Location:Active.php?result=error");
		exit();
	}

?>