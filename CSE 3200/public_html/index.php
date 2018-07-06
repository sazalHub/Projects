<?php

	session_start();
	
	
	$connection = mysqli_connect('localhost', 'id6300094_alumni','alumni','id6300094_alumni');
?>

<!doctype html>

<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>RUET Alumni</title>
		<link rel="stylesheet" href="home.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	</head>
	
	<body>

		<!--<div class="headline clear">
			<p style="font-size: 30px;color: white;margin: 5px;">Rajshahi University of Engineering & Technology</p>
		</div>-->

		<div class="big clear">

			<div class="nav_div pullDown clear">
			
				<nav  class="menu clear">
					<a onclick="nnext()">&#9776;</a>
					<a href="home.php" class="active clear">Home</a>
					<a href="alumni.php">Alumni</a>
					<a href="gallery.php">Gallery</a>
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
				
			<div class="main_div clear">
			    
			    <div class="slider clear" style="height:180px;display:flex;justify-content:space-between;">
			        <img src="defaultImages/ruet-logo.png" style="width:20%;height:100%;">
			        <img src="defaultImages/cse.png" style="width:77%;height:100%;">
			    </div>
				
				<div class="slider clear">
					
					<figure>
						
						<div class="slider_content clear">
							
							<img src="defaultImages/ruet1.jpg">

							<div class="slider_desc clear">
								<p style="width: 50%;font-size: 20px;">The RUET CSE ALUMNI ASSOCIATION (RUETCSEAA) is an association of CSE graduates of Rajshahi University of Engineering and Technology.It is our pride.</p>
								<button onclick="document.location.href='alumni.php'" style="width: 160px;height: 55px;border: 2px solid gray;font-size: 18px;">VIEW MEMBERS</button>
							</div>

						</div>
						

						<div class="slider_content clear">
							
							<img src="defaultImages/album.jpg">

							<div class="slider_desc clear" style="transform: rotate(3deg);">
								<p style="width: 50%;font-size: 20px;transform: rotate(-3deg);">We are separated from each other, but our stories are binded together here.To see our stories explore the albums.</p>
								<button onclick="document.location.href='gallery.php'" style="width: 220px;height: 55px;border: 2px solid gray;font-size: 18px;transform: rotate(-3deg);">EXPLORE OUR STORIES</button>
							</div>

						</div>

						<div class="slider_content clear">
							
							<img src="defaultImages/EVENT.jpg">

							<div class="slider_desc clear">
								<p style="width: 50%;font-size: 20px;">These are the time when we meet each other and go to the past like as we were the students again.The feeling of sharing the past moments is beyond description.</p>
								<button onclick="document.location.href='allEvents.php'" style="width: 200px;height: 55px;border: 2px solid gray;font-size: 18px;">EXPLORE EVENTS</button>
							</div>

						</div>

						<div class="slider_content clear">
							
							<img src="defaultImages/Notice_board.jpg">

							<div class="slider_desc clear" style="transform: rotate(3deg);">
								<p style="width: 50%;font-size: 20px;transform: rotate(-3deg);">Keep track of our everyday updates and stay connected with us.</p>
								<button onclick="document.location.href='notices.php'" style="width: 160px;height: 55px;border: 2px solid gray;font-size: 18px;transform: rotate(-3deg);">VIEW UPDATES</button>
							</div>

						</div>

						<div class="slider_content clear">
							
							<img src="defaultImages/Careers.jpg">

							<div class="slider_desc clear">
								<p style="width: 50%;font-size: 20px;">Find your opportunities recommended by our members.It a helpful section that provides our new graduates an easy and communicative way to find their opportunities and career advices.</p>
								<button onclick="document.location.href='careers.php'" style="width: 250px;height: 55px;border: 2px solid gray;font-size: 18px;">CAREER OPPORTUNITIES</button>
							</div>

						</div>


					</figure>
					
				</div>

				<hr>

				<div class="gallery_and_profile clear">
					
					<div class="gallery_slide clear" onmouseover="set_gallery_top();" onmouseout="reset_gallery_top();">
						
						<div class="gallery_top clear" style="height: 0;width: 100%;background:brown;">
							<p style="font-family: 'Waiting for the Sunrise', cursive; width: 100%;height: 30px;text-align: center;padding: 5px;font-size: 30px;border: 0px;color: white;">GALLERY</p>
						</div>

						<script type="text/javascript">
							
							function set_gallery_top(){
								///document.getElementsByClassName("notice_top")[0].innerHTML = "NOTICE";
								document.getElementsByClassName("gallery_top")[0].style.height = "50px";
								document.getElementsByClassName("gallery_top")[0].style.transition = "0.5s ease";
							}
							function reset_gallery_top(){
								document.getElementsByClassName("gallery_top")[0].style.height = "0px";
							}

						</script>

						<div class="gallery_slider clear" id="slideshow">
							
							<?php

								$query = "select * from gallery order by image_id desc";

								$res = mysqli_query($connection, $query);

								if ($res){
									while($row=mysqli_fetch_array($res)){ ?>

										<img src="<?php echo $row['source']; ?>" style="width: 100%;height: 300px;">

									<?php }

								}

							?>

							<script>
								(function(){
							        var imgLen = document.getElementById('slideshow');
							        var images = imgLen.getElementsByTagName('img');
							        var counter = 1;

							        if(counter <= images.length){
							            setInterval(function(){
							                images[0].src = images[counter].src;
							                console.log(images[counter].src);
							                counter++;

							                if(counter === images.length){
							                    counter = 1;
							                }
							            },3000);
							        }
								})();
							</script>

						</div>

					</div>

					<?php

						if (isset($_SESSION['user'])){ ?>

							<div class="login_logout_profile clear" onmouseover="set_login_logout_profile_top();" onmouseout="reset_login_logout_profile_top();">

									<div class="login_logout_profile_top clear" style="height: 0;width: 100%;display: inline-flex;">
										<a href="viewMember.php?roll=<?php echo $_SESSION['user']; ?>" style="text-decoration: none; font-family: 'Waiting for the Sunrise', cursive; width: 50%;height: 30px;text-align: center;padding: 5px;font-size: 20px;border: 0px;color: white;background: green;">YOUR PROFILE</a>
										<form method="POST" action="logout.php" style="width: 50%;height: 30px;padding: 5px;background: green;">
											<button type="submit" name="logout" style="font-family: 'Waiting for the Sunrise', cursive;width: 60%;height: 30px;border-radius: 5px;font-size: 20px;">LOGOUT</button>
										</form>
									</div>

									<script type="text/javascript">
							
										function set_login_logout_profile_top(){
											///document.getElementsByClassName("notice_top")[0].innerHTML = "NOTICE";
											document.getElementsByClassName("login_logout_profile_top")[0].style.height = "50px";
											document.getElementsByClassName("login_logout_profile_top")[0].style.transition = "0.5s ease";
										}
										function reset_login_logout_profile_top(){
											document.getElementsByClassName("login_logout_profile_top")[0].style.height = "0px";
										}

									</script>
									
									<?php

										$user = $_SESSION['user'];

										$sql = "select * from personal where roll='$user'";
										$res = mysqli_query($connection,$sql);

										if ($res){
											$row = mysqli_fetch_array($res);
										}
									?>

									<img src="userImages/<?php echo $row['image'] ?>" style="width: 300px;height: 250px;">
									<p style="font-family: 'Waiting for the Sunrise', cursive; width: 50%;height: 30px;text-align: center;padding: 5px;font-size: 20px;border: 0px;color: white;background: green;"><?php echo $row['name']; ?></p>

								</div>
								
							</div>

						<?php	}
						else{ ?>
							<div class="login_logout_profile clear" style="display: table;">
								<div class="home_login clear">
									<p style="height: 35px;font-size: 26px;font-weight: bolder; color: white;background: brown;">LOGIN</p>
									<hr>
									<form method="POST" action="loginInto.php">
										
										<input type="text" name="uid" placeholder="Roll">
										<input type="password" name="pwd" placeholder="Password">

										<button type="submit" name="loginInto">LOGIN</button>

									</form>
								</div>
								<div class="home_login forget_active clear">
									<form method="POST" action="Active.php">
										<button type="submit" name="loginInto">FORGET PASSWORD</button>
										<button type="submit" name="loginInto">ACTIVE YOUR ACCOUNT</button>
									</form>
								</div>
							</div>
						<?php	}

					?>

				</div>
		
				<div class="ad_sec clear">
				
					<div class="allNotices clear" onmouseover="set_notice_top();" onmouseout="reset_notice_top();">
						
						<div class="top clear" style="transition: 1s ease;background:brown;">
							<p class="notice_top clear" style="font-family: 'Waiting for the Sunrise', cursive; width: 175px;height: 30px;text-align: center;padding: 5px;font-size: 30px;border: 0px;color: white;">NOTICE</p>
						</div>

						<script type="text/javascript">
							
							function set_notice_top(){
								///document.getElementsByClassName("notice_top")[0].innerHTML = "NOTICE";
								document.getElementsByClassName("top")[0].style.height = "50px";
							}
							function reset_notice_top(){
								document.getElementsByClassName("top")[0].style.height = "0px";
							}

						</script>

						<?php
							$sql = "select * from notices";
							$res = mysqli_query($connection,$sql);
							$cnt = 0;
							while(true){
								?>

								<div class="wrap_notice clear">

									<?php
										$row=mysqli_fetch_array($res);
										if ($row){ ?>
										<a href="viewNotice.php?noticeId=<?php echo $row['notice_id']; ?>" class="notice fade clear"> 
											<div class="published_date clear">
												
												<p> <?php echo $row['date']."-".$row['month']."-".$row['year']; ?> </p>
												<p> <?php echo $row['day']; ?> </p>

											</div>
											
											<div class="notice_title clear">
												
												<p style="color: black;white-space: nowrap;margin: 5px;"> <?php echo $row['title']; ?> </p>

											</div>

										</a>

										<?php }
											else
												break;
										 ?>

									<?php
										$row=mysqli_fetch_array($res);
										if ($row){ ?>
										<a href="viewNotice.php?noticeId=<?php echo $row['notice_id']; ?>" class="notice fade clear"> 
											<div class="published_date clear">
												
												<p> <?php echo $row['date']."-".$row['month']."-".$row['year']; ?> </p>
												<p> <?php echo $row['day']; ?> </p>

											</div>
											
											<div class="notice_title clear">
												
												<p style="color: black;white-space: nowrap;margin: 5px;"> <?php echo $row['title']; ?> </p>

											</div>

										</a>

										<?php }
											else
												break;
										 ?>

									<?php
										$row=mysqli_fetch_array($res);
										if ($row){ ?>
										<a href="viewNotice.php?noticeId=<?php echo $row['notice_id']; ?>" class="notice fade clear"> 
											<div class="published_date clear">
												
												<p> <?php echo $row['date']."-".$row['month']."-".$row['year']; ?> </p>
												<p> <?php echo $row['day']; ?> </p>

											</div>
											
											<div class="notice_title clear">
												
												<p style="color: black;white-space: nowrap;margin: 5px;"> <?php echo $row['title']; ?> </p>

											</div>

										</a>

										<?php }
											else
												break;
										 ?>

									<?php
										$row=mysqli_fetch_array($res);
										if ($row){ ?>
										<a href="viewNotice.php?noticeId=<?php echo $row['notice_id']; ?>" class="notice fade clear"> 
											<div class="published_date clear">
												
												<p> <?php echo $row['date']."-".$row['month']."-".$row['year']; ?> </p>
												<p> <?php echo $row['day']; ?> </p>

											</div>
											
											<div class="notice_title clear">
												
												<p style="color: black;white-space: nowrap;margin: 5px;"> <?php echo $row['title']; ?> </p>

											</div>

										</a>

										<?php }
											else
												break;
										 ?>

								</div>

							<?php }
						?>

						</div>

						<!-- Next and previous buttons -->
  						<a class="prev clear" onclick="plusSlides(-1)">&#10094;</a>
  						<a class="next clear" onclick="plusSlides(1)">&#10095;</a>

  						<script type="text/javascript">
  							
  							var slideIndex = 1;
							showSlides(slideIndex);

							// Next/previous controls
							function plusSlides(n) {
							  showSlides(slideIndex += n);
							}

							// Thumbnail image controls
							function currentSlide(n) {
							  showSlides(slideIndex = n);
							}

							function showSlides(n) {
							  var i;
							  var slides = document.getElementsByClassName("wrap_notice");
							  if (n > slides.length) {slideIndex = 1}
							  if (n < 1) {slideIndex = slides.length}
							  for (i = 0; i < slides.length; i++) {
							      slides[i].style.display = "none";
							      ///slides[i].style.transition = "0.5s ease";
							  }
							  slides[slideIndex-1].style.display = "block";
							} 

  						</script>

					
				</div>
				
				</br>
				</br>

				<div class="events clear">
				
					<div class="upcoming_events clear" onmouseover="set_upevent_top();" onmouseout="reset_upevent_top();">

						<div class="upevent_top top clear" style="background:brown;">
							<p style="font-family: 'Waiting for the Sunrise', cursive; width: 100%;height: 30px;text-align: center;padding: 5px;font-size: 30px;border: 0px;color: white;">UPCOMING EVENTS</p>
						</div>

						<script type="text/javascript">
							
							function set_upevent_top(){
								///document.getElementsByClassName("notice_top")[0].innerHTML = "NOTICE";
								document.getElementsByClassName("upevent_top")[0].style.height = "50px";
								document.getElementsByClassName("upevent_top")[0].style.transition = "0.5s ease";
							}
							function reset_upevent_top(){
								document.getElementsByClassName("upevent_top")[0].style.height = "0px";
							}

						</script>

						<?php
							$sql = "select * from events order by year desc";
							$res = mysqli_query($connection,$sql);
							$cnt = 0;
							while($row=mysqli_fetch_array($res)){
							$cnt = $cnt + 1; 
							if ($cnt>3)
								break; ?>
								<a href="viewEvent.php?event_id=<?php echo $row['event_id']; ?>" class="event revent clear" style="margin: 5px;">
									<div class="calendar_block">
								    	<p class="calendar_day"><?php echo $row['day']; ?></p>
									    <p class="calendar_date" style="font-weight: bold;"><?php echo $row['date']; ?></p>
									     <p class="calendar_year"><span class="calendar_month"><?php echo $row['month']; ?></span> <span><?php echo $row['year']; ?></span></p>
									</div>

									<div class="event_details_block">
									   	<p class="event_name"><?php echo $row['title']; ?></p>
									   	</br>
									   	<div class="event_details_extra">
									     		<p class="event_venue">Venue: <?php echo $row['venue']; ?></p>
									   	</div>
									 </div>
								</a>

								<?php }
							?>
					</div>

					<div class="ongoing_events clear" onmouseover="set_onevent_top();" onmouseout="reset_onevent_top();">

						<div class="onevent_top top clear" style="background:brown;">
							<p style="font-family: 'Waiting for the Sunrise', cursive; width: 100%;height: 30px;text-align: center;padding: 5px;font-size: 30px;border: 0px;color: white;">ONGOING EVENTS</p>
						</div>

						<script type="text/javascript">
							
							function set_onevent_top(){
								///document.getElementsByClassName("notice_top")[0].innerHTML = "NOTICE";
								document.getElementsByClassName("onevent_top")[0].style.height = "50px";
								document.getElementsByClassName("onevent_top")[0].style.transition = "0.5s ease";
							}
							function reset_onevent_top(){
								document.getElementsByClassName("onevent_top")[0].style.height = "0px";
							}

						</script>

						<?php
							$sql = "select * from events order by year desc";
							$res = mysqli_query($connection,$sql);
							$cnt = 0;
							while($row=mysqli_fetch_array($res)){
							$cnt = $cnt + 1; 
							if ($cnt>3)
								break; ?>
								<a href="viewEvent.php?event_id=<?php echo $row['event_id']; ?>" class="event revent clear" style="margin: 5px;">
									<div class="calendar_block">
								    	<p class="calendar_day"><?php echo $row['day']; ?></p>
									    <p class="calendar_date" style="font-weight: bold;"><?php echo $row['date']; ?></p>
									     <p class="calendar_year"><span class="calendar_month"><?php echo $row['month']; ?></span> <span><?php echo $row['year']; ?></span></p>
									</div>

									<div class="event_details_block">
									   	<p class="event_name"><?php echo $row['title']; ?></p>
									   	</br>
									   	<div class="event_details_extra">
									     		<p class="event_venue">Venue: <?php echo $row['venue']; ?></p>
									   	</div>
									 </div>
								</a>

								<?php }
							?>
					</div>
				</div>

				</br>
				</br>

				
				
				<div class="top_administration top clear" style="transition: 1s ease;background:brown;">
						<p class="notice_top clear" style="font-family: 'Waiting for the Sunrise', cursive; width: 100%x;height: 30px;text-align: center;padding: 5px;font-size: 30px;border: 0px;color: white;">MEMBERS</p>
					</div>
				<div class="administration clear" onmouseover="set_notice_top_administration();" onmouseout="reset_notice_top_administration();" style="height: 340px;">
					<?php
						$sql = "select * from panel order by rank";
						$res = mysqli_query($connection,$sql);
						while($row=mysqli_fetch_array($res)){?>

							<div class="panel clear">
								
								<img src="<?php echo $row['image']; ?>" style="height: 150px;width: 200px;"></br></br>

								<p style="font: small-caption;"><?php echo $row['name']; ?></p></br>

								<p class="status clear" style="border:10px solid green;border-top-left-radius:20px;background:green;color:white;"><?php echo $row['status']; ?></p>

							</div>
						<?php }
					?>

					<script type="text/javascript">
							
							function set_notice_top_administration(){
								///document.getElementsByClassName("notice_top")[0].innerHTML = "NOTICE";
								document.getElementsByClassName("top_administration")[0].style.height = "50px";
							}
							function reset_notice_top_administration(){
								document.getElementsByClassName("top_administration")[0].style.height = "0px";
							}

						</script>
				</div>
				

				<div class="top_contact top clear" style="transition: 1s ease;background:brown;">
					<p class="notice_top clear" style="font-family: 'Waiting for the Sunrise', cursive; width: 100%x;height: 30px;text-align: center;padding: 5px;font-size: 30px;border: 0px;color: white;">CONTACT WITH US AT...</p>
				</div>
				
				<div class="contact clear" style="margin-bottom:0px;" onmouseover="set_notice_top_contact();" onmouseout="reset_notice_top_contact();">
					<div class="contact_elements clear" >
						<p style="padding-top:50px;"></p>
						<div class="det clear">
							<i class="fa fa-phone" style="font-size: 50px;"></i><br><br>
							<p>01521211539</p>
						</div>
					</div>
					<div class="contact_elements clear">
						<p style="padding-top:50px;"></p>
						<div class="det clear">
							<i class="fa fa-envelope" style="font-size: 50px;"></i><br><br>
							<p>ruetalumni@ruet.ac.bd</p>
						</div>
					</div>
					<div class="contact_elements clear">
						<p style="padding-top:35px;">Visit Us On</p></br>
						<i class="fa fa-facebook-square" style="font-size: 50px;"></i>
						<i class="fa fa-twitter-square" style="font-size: 50px;"></i>
						<i class="fa fa-youtube-square" style="font-size: 50px;"></i>
					</div>

					<script type="text/javascript">
							
							function set_notice_top_contact(){
								///document.getElementsByClassName("notice_top")[0].innerHTML = "NOTICE";
								document.getElementsByClassName("top_contact")[0].style.height = "50px";
							}
							function reset_notice_top_contact(){
								document.getElementsByClassName("top_contact")[0].style.height = "0px";
							}

						</script>

				</div>

				<br>

				<div class="contact clear" style="margin-bottom:0px;width: 100%;">
					<div class="msg clear" onmouseover="set_title();" onmouseout="reset_title();">
						<p class="msg_title clear" style="opacity:0;color:white;width:0%;height:280px;background:darkorange;padding:5px;font:16px bold tahoma;transition: 2s ease;">S</br>e</br>n</br>d</br></br>a</br></br>M</br>e</br>s</br>s</br>a</br>g</br>e</p>
						<form style="width: 95%;" method="POST" action="SendingMessage.php">
							<input placeholder="Enter Your Name Here" type="text" name="sender"></input>
							<input placeholder="Enter Your Email Here" type="text" name="sender_mail"></input></br>
							<textarea type="textarea" rows="10" cols="80" name="message"></textarea></br>
							<input type="submit" name="send_message" value="Send Message" style="cursor:pointer;margin-left:515px;padding:5px;margin-top:10px;width:150px;background:green;border:0px;color:white;font:15px bold tahoma;height:30px;">
							<input type="submit" id="f3_submit" name="submit3" value="Submit">
						</form>
					</div>

					<script type="text/javascript">
							
							function set_title(){
								///document.getElementsByClassName("notice_top")[0].innerHTML = "NOTICE";
								document.getElementsByClassName("msg_title")[0].style.opacity = "1";
								document.getElementsByClassName("msg_title")[0].style.width = "1.6%";
							}
							function reset_title(){
								document.getElementsByClassName("msg_title")[0].style.opacity = "0";
								document.getElementsByClassName("msg_title")[0].style.width = "0%";
							}

						</script>
				</div>
				
			</div>
			
		</div>

		<!--body ends here-->
		
		<div class="map_location clear" style="margin-bottom: -5px;">
					<p style="color:white;margin:-10px;width:15px;height:170px;background:darkorange;padding:5px;font-size:20px;position:absolute;top:9px;left:10px;z-index: 1;">F</br>i</br>n</br>d</br></br>U</br>s</br></p>

					<div id="map" style="width:100%;height: 100%;background: white;">  </div>

						 <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQrcCYnUpT1SAgBDqWJ6Ge8_xJxP93DiY&callback=initMap" type="text/javascript"></script>

					   <script>    
					        function initMap(address) {

					            var geocoder = new google.maps.Geocoder();
					            var address = "CSE building,RUET,Rajshahi";

					            geocoder.geocode( { 'address': address}, function(results, status) {

					                if (status == google.maps.GeocoderStatus.OK) {
					                    var latitude = results[0].geometry.location.lat();
					                    var longitude = results[0].geometry.location.lng();
					                }

					                console.log(latitude);
					                console.log(longitude);

					                var myLatLng = {lat: latitude, lng: longitude};

					                var map = new google.maps.Map(document.getElementById('map'), {
					                    zoom: 10,
					                    center: myLatLng,
					                    styles: [
								            {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
								            {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
								            {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
								            {
								              featureType: 'administrative.locality',
								              elementType: 'labels.text.fill',
								              stylers: [{color: '#d59563'}]
								            },
								            {
								              featureType: 'poi',
								              elementType: 'labels.text.fill',
								              stylers: [{color: '#d59563'}]
								            },
								            {
								              featureType: 'poi.park',
								              elementType: 'geometry',
								              stylers: [{color: '#263c3f'}]
								            },
								            {
								              featureType: 'poi.park',
								              elementType: 'labels.text.fill',
								              stylers: [{color: '#6b9a76'}]
								            },
								            {
								              featureType: 'road',
								              elementType: 'geometry',
								              stylers: [{color: '#38414e'}]
								            },
								            {
								              featureType: 'road',
								              elementType: 'geometry.stroke',
								              stylers: [{color: '#212a37'}]
								            },
								            {
								              featureType: 'road',
								              elementType: 'labels.text.fill',
								              stylers: [{color: '#9ca5b3'}]
								            },
								            {
								              featureType: 'road.highway',
								              elementType: 'geometry',
								              stylers: [{color: '#746855'}]
								            },
								            {
								              featureType: 'road.highway',
								              elementType: 'geometry.stroke',
								              stylers: [{color: '#1f2835'}]
								            },
								            {
								              featureType: 'road.highway',
								              elementType: 'labels.text.fill',
								              stylers: [{color: '#f3d19c'}]
								            },
								            {
								              featureType: 'transit',
								              elementType: 'geometry',
								              stylers: [{color: '#2f3948'}]
								            },
								            {
								              featureType: 'transit.station',
								              elementType: 'labels.text.fill',
								              stylers: [{color: '#d59563'}]
								            },
								            {
								              featureType: 'water',
								              elementType: 'geometry',
								              stylers: [{color: '#17263c'}]
								            },
								            {
								              featureType: 'water',
								              elementType: 'labels.text.fill',
								              stylers: [{color: '#515c6d'}]
								            },
								            {
								              featureType: 'water',
								              elementType: 'labels.text.stroke',
								              stylers: [{color: '#17263c'}]
								            }
								        ]
					                });

					                var marker = new google.maps.Marker({
					                    position: myLatLng,
					                    map: map
					                });

					            });

					   }

					</script>
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