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
				
				<!--<img style="width:1000px;height:100px;" src="images4444.jpg"/></br>
				<img style="width:800px;height:100px;" src="images12.jpg"/>
				-->

				<hr>

				<div class="notices clear" style="position: relative;">
					<?php
						$connection = mysqli_connect('localhost', 'id6300094_alumni','alumni','id6300094_alumni') or die(mysqli_error());
						$sql = "select * from notices";
						$res = mysqli_query($connection,$sql);
						
						while($row=mysqli_fetch_array($res)){ ?>
							<a href="viewNotice.php?noticeId=<?php echo $row['notice_id']; ?>" class="notice fade clear" style="text-decoration: none;"> 
								<div class="published_date clear">
											
									<p> <?php echo $row['date']." ".$row['month']." ".$row['year']; ?> </p>
									<p> <?php echo $row['day']; ?> </p>
								</div>
										
								<div class="notice_title clear">
										
									<p style="color: black;white-space: nowrap;margin: 5px;"> <?php echo $row['title']; ?> </p>

								</div>
									
							</a>

					<?php }
					?>

					<script>
						function set(message,Id){
							document.getElementById("vp"+Id).innerHTML = message;
							document.getElementById("vp"+Id).style.background = "";
							document.getElementById("img"+Id).style.opacity = "0.5";

							document.getElementById("vb"+Id).style.width = "100px";
							document.getElementById("vb"+Id).style.height = "50px";
							document.getElementById("vb"+Id).style.left = "31.5%";
							document.getElementById("vb"+Id).style.top = "40%";
						}

						function reset(message,Id){
							document.getElementById("vp"+Id).innerHTML = message;
							document.getElementById("vp"+Id).style.background = "darkgrey";
							document.getElementById("img"+Id).style.opacity = "1";

							document.getElementById("vb"+Id).style.width = "0px";
							document.getElementById("vb"+Id).style.height = "0px";
							document.getElementById("vb"+Id).style.left = "";
							document.getElementById("vb"+Id).style.top = "";
						}

						function show(Id){
							document.getElementById("fimg").src = document.getElementById(Id).src;
							document.getElementsByClassName("fnotice")[0].style.width = "950px";
							document.getElementsByClassName("fnotice")[0].style.height = "500px";
						}

					</script>

					
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