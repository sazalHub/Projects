<!doctype html>

<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>RUET Alumni</title>
		<link rel="stylesheet" href="home.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	</head>
	
	<body>
		
		<div class="big clear">
			
			<div class="nav_div pullDown clear">
			
				<nav  class="menu clear">
					<a onclick="nnext()">&#9776;</a>
					<a href="index.php">Home</a>
					<a href="alumni.php">Alumni</a>
					<a href="gallery.php">Gallery</a>
					<a href="allEvents.php">Event</a>
					<a href="notices.php">Notice</a>
					<a href="careers.php"  class="active clear">Career</a>
				</nav>
				
				<script>
					closeNav();
					function nnext(){
						if (document.getElementsByClassName("menu")[0].style.height == "50px") openNav();
						else closeNav();
					}
					function openNav() {
						document.getElementsByClassName("menu")[0].style.height = "350px";
						document.getElementsByClassName("menu")[0].style.transition = "1s";
					}

					function closeNav() {
						document.getElementsByClassName("menu")[0].style.height = "50px";
						document.getElementsByClassName("menu")[0].style.transition = "-3s";
					}
				</script>
			</div>
			
			</br>
			</br>
				
			<div class="main_div clear">
				
				<?php
					$idn = $_GET['id'];
					$connection = mysqli_connect('localhost', 'userName','Password','databaseName') or die(mysqli_error());
					$sql = "select * from jobs where id='$idn'";

					$res = mysqli_query($connection,$sql);

					$answer = mysqli_fetch_array($res);

				?>

				<div class="event_detail clear">
					<header style="text-align: left;">JOB DETAILS</header>
					<hr>

    					<div class="event_des clear" style="">
    					    <div class="detail_des clear" style="text-align: left;width: 510px;background: white;float: left;margin: 10px;font-size: 20px;">
    							<p style="margin: 10px;text-align: justify;">COMPANY : <?php echo nl2br($answer['company']); ?> </p>
						</div>
						<div class="detail_des clear" style="text-align: left;width: 510px;background: white;float: left;margin: 10px;font-size: 20px;">
							<p style="margin: 10px;text-align: justify;">PLACE : <?php echo nl2br($answer['place']); ?> </p>
						</div>
						
						<div class="detail_des clear" style="text-align: left;width: 510px;background: white;float: left;margin: 10px;font-size: 20px;">
							<p style="margin: 10px;text-align: justify;">JOB : <?php echo nl2br($answer['title']); ?> </p>
						</div>
						
						<div class="detail_des clear" style="text-align: left;width: 510px;background: white;float: left;margin: 10px;font-size: 20px;">
							<p style="margin: 10px;text-align: justify;">POST : <?php echo nl2br($answer['post']); ?> </p>
						</div>
						
						<div class="detail_des clear" style="text-align: left;width: 510px;background: white;float: left;margin: 10px;font-size: 20px;">
							<p style="margin: 10px;text-align: justify;">VACANCY : <?php echo nl2br($answer['vacancy']); ?> </p>
						</div>
						
						<div class="detail_des clear" style="text-align: left;width: 510px;background: white;float: left;margin: 10px;font-size: 20px;">
							<p style="margin: 10px;text-align: justify;">SALARY : <?php echo nl2br($answer['salary']); ?> </p>
						</div>
						
						<div class="detail_des clear" style="text-align: left;width: 510px;background: white;float: left;margin: 10px;font-size: 20px;">
							<p style="margin: 10px;text-align: justify;">REQIREMENTS:<br><?php echo nl2br($answer['requirements']); ?> </p>
						</div>
						
						<div class="detail_des clear" style="text-align: left;width: 510px;background: white;float: left;margin: 10px;font-size: 20px;">
							<p style="margin: 10px;text-align: justify;">DEADLINE : <?php echo $answer['date'].' '.$answer['month'].','.$answer['year']; ?> </p>
						</div>
					    
					</div>
				</div>
				
			
			</div>
			
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
