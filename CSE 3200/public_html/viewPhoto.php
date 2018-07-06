<!doctype html>

<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>RUET Alumni</title>
		<link rel="stylesheet" href="home.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	
	<body>
		
		<div class="big clear">

			<div class="nav_div pullDown clear">
			
				<nav  class="menu clear">
					<a onclick="nnext()">&#9776;</a>
					<a href="home.php">Home</a>
					<a href="alumni.php">Alumni</a>
					<a href="gallery.php" class="active clear">Gallery</a>
					<a href="allEvents.php">Event</a>
					<a href="notices.php">Notice</a>
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

			</br></br></br>

				
			<div class="main_div view clear">

				<?php
					
					$photo_id = $_GET['photo_id'];
					$connection = mysqli_connect('localhost', 'userName','Password','databaseName') or die(mysqli_error());
					$sql = "select * from gallery where image_id="."'".$photo_id."'";
					$res = mysqli_query($connection,$sql);

					while($row=mysqli_fetch_array($res)){ ?>

						<div class="viewedImage clear">
								
							<img src="<?php echo $row['source']; ?>" width="600px" height="400px">

						</div>

						<div class="image_adder clear">

							<div class="adder_detail clear">
								<p style="font-size: 25px;color: white;font-weight: bolder;padding: 10px;background: lightslategray;">This image is added by</p><hr>

								<?php

									$sql = "select * from personal where roll=".$row['added_by'];
									$res1 = mysqli_query($connection,$sql);

									$adder_roll = "";
									$adder_name = "";
									$adder_image = "images1.png";

									$row1 = mysqli_fetch_array($res1);

									$adder_roll = $row1['roll'];
									$adder_name = $row1['name'];
									$adder_image = $row1['image'];

								?>
									
								<div class="adder clear">
									
									<p style="text-align: left;padding: 10px;"><strong>ROLL : </strong><?php echo $adder_roll; ?></p>
									<p style="text-align: left; padding: 10px;"><strong>NAME : </strong><?php echo $adder_name; ?></p>

								</div>
									

								<div class="adder_image clear">
									
									<img src="<?php echo "userImages/".$adder_image; ?>" width="200px" height="300px">

								</div>

							</div>
								
						</div>

					<?php } 
				?>
			
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
