<?php

    $roll = $_GET['roll'];

	$connection = mysqli_connect('localhost', 'userName','Password','databaseName') or die(mysqli_error());

					if (isset($_POST['submit2'])){

						$pstreet = $_POST['Pstreet'];
						$pcity = $_POST['Pcity'];
						$pstate = $_POST['Pstate'];
						$pzip = $_POST['Pzip'];
						$pcountry = $_POST['Pcountry'];

						$prstreet = $_POST['PRstreet'];
						$prcity = $_POST['PRcity'];
						$prstate = $_POST['PRstate'];
						$przip = $_POST['PRzip'];;
						$prcountry = $_POST['PRcountry'];

						$query = "update address set present_street='".$pstreet."',present_city='".$pcity."',present_state='".$pstate."',
						present_zip='".$pzip."',present_country='".$pcountry."' where roll=".$roll;
						$res = mysqli_query($connection,$query);
						
						$query = "update address set permanent_street='".$prstreet."',permanent_city='".$prcity."',permanent_state='".$prstate."',permanent_zip='".$przip."',permanent_country='".$prcountry."' where roll=".$roll;
						$res = mysqli_query($connection,$query);
						
					}
					header("Location:viewMember.php?roll=$roll");

				?>
