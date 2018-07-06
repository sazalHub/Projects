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
					<a href="allEvents.php"  class="active clear">Event</a>
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
			
			</br>
			</br>
				
			<div class="main_div clear">
				
				<?php
					$event_id = $_GET['event_id'];
					$connection = mysqli_connect('localhost', 'id6300094_alumni','alumni','id6300094_alumni') or die(mysqli_error());
					$sql = "select * from events where event_id='$event_id'";
					$res = mysqli_query($connection,$sql);
					$res = mysqli_fetch_array($res);

				?>
				
				<div class="slide clear" style="height: 300px;position: relative;margin-left:0px;">

					<img src="defaultImages/st3.jpg" style="opacity: 0.5;">

					<div class="slide_detail clear" style="position: absolute;left: 10%;top: 55%;">
						<p style="font-size: 30px;color: white;font-weight: bolder;"> <?php echo $res['title']; ?> </p>
						<p style="font-size: 30px;color: white;"> <?php echo $res['date']," ",$res['month'],",",$res['year']; ?> </p>
					</div>
					
				</div>

				<div class="event_detail clear">
					<header style="text-align: left;">DETAILS</header>
					<hr>

					<div class="event_des clear" style="">
						
						<div class="detail_des clear" style="text-align: left;width: 510px;background: white;float: left;margin: 10px;font-size: 20px;">
							<p style="margin: 10px;text-align: justify;"><?php echo nl2br($res['details']); ?> </p>
						</div>

						<div id="map" style="width: 460px;height: 300px;margin: 10px;background: white;">  </div>
						<div class="time clear" style="width: 200px;min-height: 10px;margin: 10px;background: white;text-align: center;">
							
							<p style="margin: 10px;text-align: justify;">WILL START AT: <?php echo $res['shour'],":",$res['smin']; ?></p>
							<p style="margin: 10px;text-align: justify;">&nbsp; &nbsp; WILL END AT: <?php echo $res['ehour'],":",$res['emin']; ?></p>

						</div>
					    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQrcCYnUpT1SAgBDqWJ6Ge8_xJxP93DiY&callback=initMap" type="text/javascript"></script>

					    <script>    
					        function initMap(address) {

					            var geocoder = new google.maps.Geocoder();
					            var address = "<?php echo $res['venue']; ?>";

					            geocoder.geocode( { 'address': address}, function(results, status) {

					                if (status == google.maps.GeocoderStatus.OK) {
					                    var latitude = results[0].geometry.location.lat();
					                    var longitude = results[0].geometry.location.lng();
					                }

					                console.log(latitude);
					                console.log(longitude);

					                var myLatLng = {lat: latitude, lng: longitude};

					                var map = new google.maps.Map(document.getElementById('map'), {
					                    zoom: 15,
					                    center: myLatLng
					                });

					                var marker = new google.maps.Marker({
					                    position: myLatLng,
					                    map: map
					                });

					            });

					        }

					    </script>

					    <div class="event_links clear" style="width: 460px;height: 300px;margin: 10px;">
					    	<p style="text-align: center;font-size: 25px;">Stay Connected With the Event</p>
							<hr>

							<div class="event_follow_links">
								<p style="text-align: center;font-size: 20px;margin: 10px;">Follow the Event On</p>
						    	<a href="http://www.<?php echo $res['links']; ?>"><i class="fa fa-facebook-square"></i></a>
						    	<a href="http://www.<?php echo $res['links']; ?>"><i class="fa fa-instagram"></i></a>
						    	<a href="http://www.<?php echo $res['links']; ?>"><i class="fa fa-twitter"></i></a>
					    	</div>
					    	

					    	<div class="event_follow_links">
								<p style="text-align: center;font-size: 20px;margin: 10px;">Other Links</p>
					    		<a href="http://www.<?php echo $res['links']; ?>"><i class="fa fa-registered" style="font-size: 33px;"></i></a>
					    		<a href="http://www.<?php echo $res['links']; ?>"><i class="fa fa-question-circle"></i></a>
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