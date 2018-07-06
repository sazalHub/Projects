<?php

	session_start();

	if (isset($_POST['loginInto'])){
		$connection = mysqli_connect('localhost', 'id6300094_alumni','alumni','id6300094_alumni') or die(mysqli_error());

		$user = $_POST['uid'];
		$pass = $_POST['pwd'];

		if (empty($user) || empty($pass)){
			header("Location:index.php?result=empty");
			exit();
		}
		else{
			$query = "select * from users where user_roll='$user'";

			$res = mysqli_query($connection, $query);

			$resCheck = mysqli_num_rows($res);

			if ($resCheck==0){
				header("Location:index.php?result=No_Such_User");
				exit();
			}
			else{
				$row = mysqli_fetch_array($res);

				$hashedPwdCheck = password_verify($pass, $row['user_pass']);

				if ($hashedPwdCheck == false){
					header("Location:index.php?result=Wrong_Password");
					exit();
				}
				else{
					$_SESSION['user'] = $user;
					header("Location:index.php?result=Login_Success");
					exit();
				}
			}
		}
	}
	else{
		header("Location:index.php?result=ERROR");
		exit();
	}

?>