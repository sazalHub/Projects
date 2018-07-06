<?php

	if (isset($_POST['set_password'])){

		$connection = mysqli_connect('localhost', 'id6300094_alumni','alumni','id6300094_alumni') or die(mysqli_error());
		
		$code_reciever = $_POST['code_reciever'];
		$code = $_POST['code'];
		$pass1 = $_POST['pass1'];
		$pass2 = $_POST['pass2'];

		
		///Error Handling///
		///Checking if empty
		if (empty($code_reciever) || empty($code) || empty($pass1) || empty($pass2)){
			header("Location:SetPassword.php?result=all_inputs_are_not_filled");
			exit();
		}
		
		$query = "select * from activation_codes where roll='$code_reciever';";
		$res = mysqli_query($connection, $query);

		if ($res){
			$row = mysqli_fetch_array($res);

			if ($row['code'] == $code){

				if ($pass1 == $pass2){
					$roll = $row['roll'];
					$hashedPass = password_hash($pass1, PASSWORD_DEFAULT);
					$info = date("Ymd").','.time();
					
					$query = "select * from users where user_roll='$roll';";
					$res = mysqli_query($connection, $query);
					$save = false;

					if (mysqli_num_rows($res)>0){
						$query = "update users set user_pass='$hashedPass', info='$info' where user_roll='$roll';";
						$save = true;
					}else{
						$query = "insert into users(user_roll, user_pass, info) values('$roll', '$hashedPass','$info');";
					}
					
					$res = mysqli_query($connection, $query);

					if ($res){
						$query = "delete from activation_codes where roll='$code_reciever';";
						$res = mysqli_query($connection, $query);
						
						if ($save==false){
    						$query = "INSERT INTO professional(roll, designation, company_or_organization, branch, city, state, zip, country) VALUES ('$roll','','','','','','','')";
    						$res = mysqli_query($connection, $query);
    						
    						$query = "INSERT INTO contribution(roll, job_posts, advices, blog_posts) VALUES ('$roll',0,0,0)";
    						$res = mysqli_query($connection, $query);
    						
    						$query = "INSERT INTO contact(roll, email, phone_number, facebook_id, instagram_id, skype_id, twitter_id) VALUES ('$roll','','','','','','')";
    						$res = mysqli_query($connection, $query);
    						
    						$query = "INSERT INTO address(roll, present_street, present_city, present_state, present_zip, present_country, permanent_street, permanent_city, permanent_state, permanent_zip, permanent_country) VALUES ('$roll','','','','','','','','','','')";
    						$res = mysqli_query($connection, $query);
    						
    						$query = "INSERT INTO activities(roll, github, github_id, quora, quora_id, stack_overflow, stack_overflow_id, youtube, youtube_channel, uva, uva_id, spoj, spoj_id, cf, cf_id, hackerrank, hackerrank_id, hackerearth, hackerearth_id) VALUES ('$roll','','','','','','','','','','','','','','','','','','')";
    						$res = mysqli_query($connection, $query);
						}
						header("Location:Login.php");
						exit();
					}
					else{
						header("Location:SetPassword.php?result=not_inserted");
						exit();
					}

				}
				else{
					header("Location:SetPassword.php?result=password_not_match");
					exit();
				}
				
			}
			else{
				header("Location:SetPassword.php?result=code_not_match");
				exit();
			}
		}
		else{
			header("Location:SetPassword.php?result=no_code");
			exit();
		}
	}
	else{
		header("Location:SetPassword.php?result=not_selected");
		exit();
	}

 ?>