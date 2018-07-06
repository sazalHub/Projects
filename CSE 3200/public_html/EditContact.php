<?php

    $roll = $_GET['roll'];

	$connection = mysqli_connect('localhost', 'userName','Password','databaseName') or die(mysqli_error());

					if (isset($_POST['submit4'])){

						$email = $_POST['CEmail'];
						$phone = $_POST['Phone'];
						$fb = $_POST['Fb'];
						$ins = $_POST['Ins'];
						$skype = $_POST['Skype'];
						$twitter = $_POST['Twitter'];

						$query = "update contact set email='".$email."',phone_number='".$phone."',facebook_id='".$fb."',instagram_id='".$ins."',skype_id='".$skype."',twitter_id='".$twitter."' where roll=".$roll;
						$res = mysqli_query($connection,$query);
						if (!$res) die("OOPPS! query failed".mysqli_error($connection));
					}
					header("Location:viewMember.php?roll=$roll");

				?>
