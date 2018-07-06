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
					<a href="notices.php"  class="active clear">Notice</a>
					<a href="careers.php">Career</a>
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
					$noticeId = $_GET['noticeId'];
					$connection = mysqli_connect('localhost', 'userName','Password','databaseName') or die(mysqli_error());
					$sql = "select * from notices order by year desc";
					$res = mysqli_query($connection,$sql);

					$row;

					while($row=mysqli_fetch_array($res)){
						if ($row['notice_id']==$noticeId){
							break;
						}
					}

				?>
			
				
				<div class="slide clear" style="height: 300px;position: relative;margin-left:0px;">

					<img src="defaultImages/noticeboard.jpg" style="opacity: 0.3;">

					<div class="slide_detail clear" style="position: absolute;left: 10%;top: 55%;">
						<p style="font-size: 30px;color: white;font-weight: bolder;text-align: left;color: maroon;"> <?php echo $row['title']; ?> </p>
						<p style="font-size: 30px;color: black;text-align: left;"> <?php echo $row['date'],"-",$row['month'],"-",$row['year']; ?> </p>
					</div>
					
				</div>

				<div class="event_detail clear">
					<header style="text-align: left;">DETAILS</header>
					<hr>

					<div class="event_des clear" style="">
						
						<div class="detail_des clear" style="text-align: left;width: 70%;background: white;float: left;margin: 10px;font-size: 20px;">
							<img src="Notices/<?php echo $row['content']; ?>" style="width: 100%;">
						</div>

					    <div class="event_links clear" style="width: 25%;height: 300px;margin: 10px;background: inherit;">

							<div class="event_follow_links">
						    	<a href="http://www.<?php echo $answer['links']; ?>"><i class="fa fa-facebook-square"></i></a>
						    	<a href="http://www.<?php echo $answer['links']; ?>"><i class="fa fa-instagram"></i></a>
						    	<a href="http://www.<?php echo $answer['links']; ?>"><i class="fa fa-twitter"></i></a>
					    	</div>
					    	
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
