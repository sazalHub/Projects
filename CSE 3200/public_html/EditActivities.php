<?php

    $roll = $_GET['roll'];

	$connection = mysqli_connect('localhost', 'id6300094_alumni','alumni','id6300094_alumni') or die(mysqli_error());

					if (isset($_POST['submit5'])){

						$github = $_POST['Github'];
						$guser = $_POST['Guser'];
						$quora = $_POST['Quora'];
						$quser = $_POST['Quser'];
						$stack0 = $_POST['StackO'];
						$stuser = $_POST['STuser'];
						$youtube = $_POST['Youtube'];
						$yuser = $_POST['Yuser'];
						$uva = $_POST['Uva'];
						$uuser = $_POST['Uuser'];
						$spoj = $_POST['Spoj'];
						$spuser = $_POST['SPuser'];
						$cf = $_POST['CF'];
						$cfuser = $_POST['CFuser'];
						$hr = $_POST['HR'];
						$hruser = $_POST['HRuser'];
						$he = $_POST['HE'];
						$heuser = $_POST['HEuser'];

						$query = "update activities set github='".$github."',github_id='".$guser."' where roll=".$roll;
						$res = mysqli_query($connection,$query);
						if (!$res) die("OOPPS! query failed".mysqli_error($connection));

						$query = "update activities set quora='".$quora."',quora_id='".$quser."' where roll=".$roll;
						$res = mysqli_query($connection,$query);
						if (!$res) die("OOPPS! query failed".mysqli_error($connection));

						$query = "update activities set stack_overflow='".$stack0."',stack_overflow_id='".$stuser."' where roll=".$roll;
						$res = mysqli_query($connection,$query);
						if (!$res) die("OOPPS! query failed".mysqli_error($connection));

						$query = "update activities set youtube='".$youtube."',youtube_channel='".$yuser."' where roll=".$roll;
						$res = mysqli_query($connection,$query);
						if (!$res) die("OOPPS! query failed".mysqli_error($connection));

						$query = "update activities set uva='".$uva."',uva_id='".$uuser."' where roll=".$roll;
						$res = mysqli_query($connection,$query);
						if (!$res) die("OOPPS! query failed".mysqli_error($connection));

						$query = "update activities set spoj='".$spoj."',spoj_id='".$spuser."' where roll=".$roll;
						$res = mysqli_query($connection,$query);
						if (!$res) die("OOPPS! query failed".mysqli_error($connection));

						$query = "update activities set cf='".$cf."',cf_id='".$cfuser."' where roll=".$roll;
						$res = mysqli_query($connection,$query);
						if (!$res) die("OOPPS! query failed".mysqli_error($connection));

						$query = "update activities set hackerrank='".$hr."',hackerrank_id='".$hruser."' where roll=".$roll;
						$res = mysqli_query($connection,$query);
						if (!$res) die("OOPPS! query failed".mysqli_error($connection));

						$query = "update activities set hackerearth='".$he."',hackerearth_id='".$heuser."' where roll=".$roll;
						$res = mysqli_query($connection,$query);
						if (!$res) die("OOPPS! query failed".mysqli_error($connection));


					}
					header("Location:viewMember.php?roll=$roll");

?>