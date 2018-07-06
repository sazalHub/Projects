<?php

	$roll = $_GET['roll'];

	$connection = mysqli_connect('localhost', 'userName','Password','databaseName') or die(mysqli_error());
	
	$sql = "select * from activities where roll=".$roll;
	$res = mysqli_query($connection,$sql);
	if ($res){
		$row=mysqli_fetch_array($res);
		$github = $row['github'];
		$guser = $row['github_id'];
		$quora = $row['quora'];
		$quser = $row['quora_id'];
		$stack0 = $row['stack_overflow'];
		$stuser = $row['stack_overflow_id'];
		$youtube = $row['youtube'];
		$yuser = $row['youtube_channel'];
		$uva = $row['uva'];
		$uuser = $row['uva_id'];
		$spoj = $row['spoj'];
		$spuser = $row['spoj_id'];
		$cf = $row['cf'];
		$cfuser = $row['cf_id'];
		$hr = $row['hackerrank'];
		$hruser = $row['hackerrank_id'];
		$he = $row['hackerearth'];
		$heuser = $row['hackerearth_id'];
	}

?>

<!doctype html>

<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>RUET Alumni</title>
		<link rel="stylesheet" href="input_page.css">
		<link rel="stylesheet" href="home.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	</head>
	
	<body onload="begin();">

		<div class="selecte clear" style="display:flex;justify-content:space-around;">
			<!--<a><i class="fa" style="font-size:36px;">&#xf0fe;</i>PERSONAL</a>
			<a><i class="fa" style="font-size:36px;">&#xf0fe;</i>ADRESS</a>
			<a><i class="fa" style="font-size:36px;">&#xf0fe;</i>PROFESSIONAL</a>
			<a><i class="fa" style="font-size:36px;">&#xf0fe;</i>CONTACT</a>
			<a><i class="fa" style="font-size:36px;">&#xf0fe;</i>ACTIVITIES</a>-->

			<a class="explore" onclick="set_activities();">ACTIVITIES</a>

			
		</div>

		<div class="form_container clear" >

			<!-- activities form -->
			<div id="activities">
				<header>ACTIVITIES</header>
				<hr>
				<form class="form5" method="POST" action="EditActivities.php?roll=<?php echo $roll; ?>">
					
					<div class="row">
					      <div class="col-25">
				        <label for="f5_roll">Roll  :  </label>
				      </div>
				      <div class="col-25">
				        <p style="font-size: 20px;font-weight: bold;margin-top: 10px;"><?php echo $roll;?><p>
				      </div>
					  </div>

					<div class="row">
				      <div class="col-25">
				        <label for="github">GITHUB</label>
				      </div>
				      <div class="col-25">
				        <input type="text" id="github" name="Github" value="<?php echo $github; ?>">
				      </div>
				   
				      <div class="col-25">
				        <label for="guser">Username</label>
				      </div>
				      <div class="col-25">
				        <input type="text" id="guser" name="Guser" value="<?php echo $guser; ?>">
				      </div>
					</div>

					<div class="row">
					      <div class="col-25">
					        <label for="quora">QUORA</label>
					      </div>
					      <div class="col-25">
					        <input type="text" id="quora" name="Quora" value="<?php echo $quora; ?>">
					      </div>
					   
					      <div class="col-25">
					        <label for="quser">Username</label>
					      </div>
					      <div class="col-25">
					        <input type="text" id="quser" name="Quser" value="<?php echo $quser; ?>">
					      </div>
					</div>

					<div class="row">
					      <div class="col-25">
					        <label for="stackO">STACK-OVERFLOW</label>
					      </div>
					      <div class="col-25">
					        <input type="text" id="stackO" name="StackO" value="<?php echo $stack0; ?>">
					      </div>
					   
					      <div class="col-25">
					        <label for="stuser">Username</label>
					      </div>
					      <div class="col-25">
					        <input type="text" id="stuser" name="STuser" value="<?php echo $stuser; ?>">
					      </div>
					</div>

					<div class="row">
					      <div class="col-25">
					        <label for="youtube">YOUTUBE</label>
					      </div>
					      <div class="col-25">
					        <input type="text" id="youtube" name="Youtube" value="<?php echo $youtube; ?>">
					      </div>
					   
					      <div class="col-25">
					        <label for="yuser">Username</label>
					      </div>
					      <div class="col-25">
					        <input type="text" id="yuser" name="Yuser" value="<?php echo $yuser; ?>">
					      </div>
					</div>

					<div class="row">
					      <div class="col-25">
					        <label for="uva">UVA</label>
					      </div>
					      <div class="col-25">
					        <input type="text" id="uva" name="Uva" value="<?php echo $uva; ?>">
					      </div>
					   
					      <div class="col-25">
					        <label for="uuser">Username</label>
					      </div>
					      <div class="col-25">
					        <input type="text" id="uuser" name="Uuser" value="<?php echo $uuser; ?>">
					      </div>
					</div>

					<div class="row">
					      <div class="col-25">
					        <label for="spoj">SPOJ</label>
					      </div>
					      <div class="col-25">
					        <input type="text" id="spoj" name="Spoj" value="<?php echo $spoj; ?>">
					      </div>
					   
					      <div class="col-25">
					        <label for="spuser">Username</label>
					      </div>
					      <div class="col-25">
					        <input type="text" id="spuser" name="SPuser" value="<?php echo $spuser; ?>">
					      </div>
					</div>

					<div class="row">
					      <div class="col-25">
					        <label for="cf">CODEFORCES</label>
					      </div>
					      <div class="col-25">
					        <input type="text" id="cf" name="CF" value="<?php echo $cf; ?>">
					      </div>
					   
					      <div class="col-25">
					        <label for="cfuser">Username</label>
					      </div>
					      <div class="col-25">
					        <input type="text" id="cfuser" name="CFuser" value="<?php echo $cfuser; ?>">
					      </div>
					</div>

					<div class="row">
					      <div class="col-25">
					        <label for="hr">HACKERRANK</label>
					      </div>
					      <div class="col-25">
					        <input type="text" id="hr" name="HR" value="<?php echo $hr; ?>">
					      </div>
					   
					      <div class="col-25">
					        <label for="hruser">Username</label>
					      </div>
					      <div class="col-25">
					        <input type="text" id="hruser" name="HRuser" value="<?php echo $hruser; ?>">
					      </div>
					</div>

					<div class="row">
					      <div class="col-25">
					        <label for="he">HACKEREARTH</label>
					      </div>
					      <div class="col-25">
					        <input type="text" id="he" name="HE" value="<?php echo $he; ?>">
					      </div>
					   
					      <div class="col-25">
					        <label for="heuser">Username</label>
					      </div>
					      <div class="col-25">
					        <input type="text" id="heuser" name="HEuser" value="<?php echo $heuser; ?>">
					      </div>
					</div>

					<div class="row">
						      <input type="submit" id="f5_submit" name="submit5" value="Submit">
						    </div>
				</form>

			</div>
			<!---->
		</div>
		
		<!--footer starts here-->
		<div class="foot clear">

			<div class="lftt clear">
				<header style="font-size: 20px;padding-top: 10px;color:black;font-weight: bold;">ABOUT RUETCSEAA</header><br><hr>
				<p>The RUET CSE ALUMNI ASSOCIATION (RUETCSEAA) is an association of CSE graduates of Rajshahi University of Engineering and Technology. The organization seeks to promote fellowship among CSE graduates, to assist members to develop careers that use their abilities and education, and to maintain a database of skills that can be furnished to domestic and international users.</p>
			</div>

			<div class="majhe clear">
				<div class="fclass clear"><a href="http://www.ruet.ac.bd"><br>RUET</a></div><hr>
				<div class="fclass clear"><a href="http://www.iebbd.org/"><br>IEBBD</a></div><hr>
				<div class="fclass clear"><a href="http://www.educationboard.gov.bd/"><br>EDUCATION BOARD</a></div><hr>
			</div>

			<div class="rgt clear">

				<div class="fclass clear"><a href="index.php"><br>HOME</a></br></a></div><hr>
				<div class="fclass clear"><a href="alumni.php"><br>ALUMNI</a></br></a></div><hr>
				<div class="fclass clear"><a href="gallery.php"><br>GALLERY</a></div><hr>
				<div class="fclass clear"><a href="allEvents.php"><br>EVENTS</a></div><hr>
				<div class="fclass clear"><a href="notices.php"><br>NOTICE</a></div><hr>
				<div class="fclass clear"><a href="careers.php"><br>CAREER</a></div><hr>

			</div>

			<div class="lstt clear">
						
				<div class="fclass clear"><a href=""><i class="fa fa-facebook-square" style="font-size: 30px;"></i></a></div>
				<div class="fclass clear"><a href=""><i class="fa fa-twitter-square" style="font-size: 30px;"></i></div>
				<div class="fclass clear"><a href=""><i class="fa fa-youtube-square" style="font-size: 30px;"></i></div>

			</div>
			
		</div>

		<!--footer ends here-->
	
	</body>

</html>
