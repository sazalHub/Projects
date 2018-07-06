<?php

	$roll = $_GET['roll'];

	$connection = mysqli_connect('localhost', 'userName','Password','databaseName') or die(mysqli_error());

	$sql = "select * from contact where roll=".$roll;
	$res = mysqli_query($connection,$sql);
	if ($res){
		$row=mysqli_fetch_array($res);
		$email = $row['email'];
		$phone = $row['phone_number'];
		$facebook_id = $row['facebook_id'];
		$instagram_id = $row['instagram_id'];
		$skype_id = $row['skype_id'];
		$twitter_id = $row['twitter_id'];
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

			<a class="explore" onclick="set_contact();">CONTACT</a>

			
		</div>

		<div class="form_container clear" >

			<!-- contact form -->
			<div id="contact">
				
				<header>CONTACT</header>
				<hr>
				<form class="form4" method="POST" action="EditContact.php?roll=<?php echo $roll; ?>">
					<div class="row">
					      <div class="col-25">
				        <label for="f4_roll">Roll  :  </label>
				      </div>
				      <div class="col-25">
				        <p style="font-size: 20px;font-weight: bold;margin-top: 10px;"><?php echo $roll;?><p>
				      </div>
					  </div>

					 <div class="row">
					      <div class="col-25">
					        <label for="f4_email">Email</label>
					      </div>
					      <div class="col-25">
					        <input type="text" id="f4_email" name="CEmail" value="<?php echo $email; ?>">
					      </div>
					   
					      <div class="col-25">
					        <label for="f4_phone">Phone Number</label>
					      </div>
					      <div class="col-25">
					        <input type="text" id="f4_phone" name="Phone" value="<?php echo $phone; ?>">
					      </div>
					</div>

					<div class="row">
					      <div class="col-25">
					        <label for="f4_fb">FACEBOOK</label>
					      </div>
					      <div class="col-25">
					        <input type="text" id="f4_fb" name="Fb" value="<?php echo $facebook_id; ?>">
					      </div>
					   
					      <div class="col-25">
					        <label for="f4_ins">INSTAGRAM</label>
					      </div>
					      <div class="col-25">
					        <input type="text" id="f4_ins" name="Ins" value="<?php echo $instagram_id; ?>">
					      </div>
					</div>

					<div class="row">
					      <div class="col-25">
					        <label for="f4_skype">SKYPE</label>
					      </div>
					      <div class="col-25">
					        <input type="text" id="f4_skype" name="Skype" value="<?php echo $skype_id; ?>">
					      </div>
					   
					      <div class="col-25">
					        <label for="f4_twitter">TWITTER</label>
					      </div>
					      <div class="col-25">
					        <input type="text" id="f4_twitter" name="Twitter" value="<?php echo $twitter_id; ?>">
					      </div>
					</div>

					<div class="row">
						   <input type="submit" id="f4_submit" name="submit4" value="Submit">
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
