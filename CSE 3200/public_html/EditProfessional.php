<?php

	$roll = $_GET['roll'];

	$connection = mysqli_connect('localhost', 'userName','Password','databaseName') or die(mysqli_error());

					if (isset($_POST['submit3'])){

						$branch = $_POST['branch'];
						$city = $_POST['city'];
						$state = $_POST['state'];
						$zip = $_POST['zip'];
						$country = $_POST['country'];
						$podobi = $_POST['Podobi'];
						$company = $_POST['Company'];

						$query = "update professional set designation='".$podobi."',company_or_organization='".$company."',branch='".$branch."',city='".$city."',state='".$state."',zip='".$zip."',country='".$country."' where roll=".$roll;
						$res = mysqli_query($connection,$query);
						
					}
		header("Location:viewMember.php?roll=$roll");

?>
