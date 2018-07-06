<?php
	
	session_start();
	$roll = $_GET['roll'];
	
	$connection = mysqli_connect('localhost', 'id6300094_alumni','alumni','id6300094_alumni') or die(mysqli_error());

?>

<!doctype html>

<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>RUET Alumni</title>
		<link rel="stylesheet" href="home.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	</head>
	
	<body>
		
		<div class="big clear">
			
			<div class="nav_div pullDown clear">
			
				<nav  class="menu clear">
					<a onclick="nnext()">&#9776;</a>
					<a href="index.php">Home</a>
					<a href="alumni.php"  class="active clear">Alumni</a>
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
			
			</br>
			</br>
			</br>
			</br>
				
			<div class="main_div clear">
				
				<?php

					if (isset($_SESSION['user']) && $roll == $_SESSION['user'] ){ ?>
					
					    <div style="width:100%;display:flex;justify-content:space-between;">
    						<a href="editPersonal.php?roll=<?php echo $roll; ?>" style="width: 115px;height: 20px;float: left;background: green;border: none;color: white;font-size: 15px;border-radius: 5px;padding: 10px;text-decoration: none;">PERSONAL</a>
    						
    						<a href="editProfessional.php?roll=<?php echo $roll; ?>" style="width: 115px;height: 20px;float: left;background: green;border: none;color: white;font-size: 15px;border-radius: 5px;padding: 10px;text-decoration: none;">PROFESSINAL</a>
    						
    						<a href="editAddress.php?roll=<?php echo $roll; ?>" style="width: 115px;height: 20px;float: left;background: green;border: none;color: white;font-size: 15px;border-radius: 5px;padding: 10px;text-decoration: none;">ADDRESS</a>
    						
    						<a href="editContact.php?roll=<?php echo $roll; ?>" style="width: 115px;height: 20px;float: left;background: green;border: none;color: white;font-size: 15px;border-radius: 5px;padding: 10px;text-decoration: none;">CONTACT</a>
    						
    						<a href="editActivities.php?roll=<?php echo $roll; ?>" style="width: 115px;height: 20px;float: left;background: green;border: none;color: white;font-size: 15px;border-radius: 5px;padding: 10px;text-decoration: none;">ACTIVITIES</a>
						</div>
				<?php } ?>
				
				<div class="member_fixed_detail member_details clear">
						
						<?php
							$sql = "select * from personal where roll=".$roll;
							$res = mysqli_query($connection,$sql);

							if ($res){
								$row=mysqli_fetch_array($res);?>
								<img src="userImages/<?php echo $row['image']; ?>">
								<p style="max-width: 85%;min-width:50%;top: 55%;"><?php echo $row['roll'];?></p>
								<p style="width: 97%;top: 63%;"> <?php echo $row['name'];?> </p>
							<?php }
						?>

						<?php
							$sql = "select * from professional where roll=".$roll;
							$res = mysqli_query($connection,$sql);

							if ($res){
								$row=mysqli_fetch_array($res);?>
								<p class="designation clear" style="width: 93%;height: 50px;background: grey;left: 2%;top: 71%;text-align: center;padding: 5px;"> <?php echo $row['designation'];?> </p><br>
								<p class="job_details clear" style="width: 93%;height: 100px;background: brown;left: 2%;top: 78%;padding: 5px;text-align: center;padding-top: 20px;"> <?php echo $row['company_or_organization'];?> </p>
							<?php }
						?>
						

				</div>
					
				<div class="know_member clear">

								
					<div class="member_contact clear" style="display:flex;flex-wrap:wrap;">

						<?php
							$sql = "select * from contact where roll=".$roll;
							$res = mysqli_query($connection,$sql);
							$row;
							$email = "";
							$fb = "";
							$ins = "";
							$skype = "";
							$twitter = "";

							if ($res){
								$row=mysqli_fetch_array($res);
								if ($row['email']!="") $email = $row['email'];
								if ($row['facebook_id']!="") $fb = $row['facebook_id'];
								if ($row['instagram_id']!="") $ins = $row['instagram_id'];
								if ($row['skype_id']!="") $skype = $row['skype_id'];
								if ($row['skype_id']!="") $twitter = $row['skype_id'];
							}
						?>

						<div style="width:250px;" class="medium clear"><i class="fa fa-envelope" style="font-size:40px"></i><a style="font-size:20px;"><?php echo $email;  ?></a></div>
						<div style="width:250px;"  class="medium clear"><i class="fa fa-phone" style="font-size:40px"></i><br><a style="font-size:20px;"><?php echo $email;  ?></a></div>
						<div class="medium clear"><a href="<?php echo $fb;  ?>"><i class="fa fa-facebook-square"></i></a></div>
						<div class="medium clear"><a href="<?php echo $ins;  ?>"><i class="fa fa-instagram"></i></a></div>
						<div class="medium clear"><a href="<?php echo $skype;  ?>"><i class="fa fa-skype"></i></a></div>
						<div class="medium clear"><a href="<?php echo $twitter;  ?>"><i class="fa fa-twitter-square"></i></a></div>

					</div>

					<div class="member_activities clear">

						<?php
							$sql = "select * from activities where roll=".$roll;
							$res = mysqli_query($connection,$sql);
							$row;

							if ($res){
								$row=mysqli_fetch_array($res);
								
								if ($row['github']!=""){?>

									<a href="<?php echo $row['github']; ?>" class="online_judge clear">
										<i class="fa fa-github"></i><br><hr>
										<div>
											<p>gitHub</p>
											<p> <?php echo $row['github_id']; ?> </p>
										</div>
									</a>

								<?php }
								if ($row['quora']!=""){?>

									<a href="<?php echo $row['quora']; ?>" class="online_judge clear">
										<i class="fa fa-quora"></i><br><hr>
										<div>
											<p>Quora</p>
											<p><?php echo $row['quora_id']; ?></p>
										</div>
									</a>

								<?php }
								if ($row['stack_overflow']!=""){?>

									<a href="<?php echo $row['stack_overflow']; ?>" class="online_judge clear">
										<i class="fa fa-stack-overflow"></i><br><hr>
										<div>
											<p>StackOverflow</p>
											<p><?php echo $row['stack_overflow_id']; ?></p>
										</div>
									</a>

								<?php }
								if ($row['youtube']!=""){?>

									<a href="<?php echo $row['youtube']; ?>" class="online_judge clear">
										<i class="fa fa-youtube-square"></i><br><hr>
										<div>
											<p>YouTube</p>
											<p><?php echo $row['youtube_channel']; ?></p>
										</div>
									</a>

								<?php }
								if ($row['uva']!=""){?>

									<a href="<?php echo $row['uva']; ?>" class="online_judge clear">
										<img src="defaultImages/uva.jpg" style="width: 42px;height: 40px;"><br><hr>
										<div>
											<p>Uva</p>
											<p><?php echo $row['uva_id']; ?></p>
										</div>
									</a>

								<?php }
								if ($row['spoj']!=""){?>

									<a href="<?php echo $row['spoj']; ?>" class="online_judge clear">
										<img src="defaultImages/spoj.jpg" style="width: 42px;height: 40px;"><br><hr>
										<div>
											<p>SPOJ</p>
											<p><?php echo $row['spoj_id']; ?></p>
										</div>
									</a>

								<?php }
								if ($row['cf']!=""){?>

									<a href="<?php echo $row['cf']; ?>" class="online_judge clear">
										<img src="defaultImages/codeforces.jpg" style="width: 42px;height: 40px;"><br><hr>
										<div>
											<p>gitHub</p>
											<p><?php echo $row['cf_id']; ?></p>
										</div>
									</a>

								<?php }
								if ($row['hackerrank']!=""){?>

									<a href="<?php echo $row['hackerrank']; ?>" class="online_judge clear">
										<img src="defaultImages/hackerrank.jpg" style="width: 42px;height: 40px;"><br><hr>
										<div>
											<p>gitHub</p>
											<p><?php echo $row['hackerrank_id']; ?></p>
										</div>
									</a>

								<?php }
								if ($row['hackerearth']!=""){?>

									<a href="<?php echo $row['hackerearth']; ?>" class="online_judge clear">
										<img src="defaultImages/hackerearth.jpg" style="width: 42px;height: 40px;"><br><hr>
										<div>
											<p>gitHub</p>
											<p><?php echo $row['hackerearth_id']; ?></p>
										</div>
									</a>

								<?php }

							}
						?>
					</div>


					<div class="member_contribution clear">

						<?php
							$sql = "select * from contribution where roll=".$roll;
							$res = mysqli_query($connection,$sql);
							$row;

							if ($res){
								$row=mysqli_fetch_array($res);
							}
						?>
									
						<div class="cont clear">				
							<p style="font-size: 20px;font-weight: bold;background: cadetblue;padding: 10px;color: white;">Job Posts</p>
							<hr>
							<p style="font-size: 25px;font-weight: bold;background: darkcyan;padding: 15px;color: cornsilk;"><?php echo $row['job_posts']; ?></p>
						</div>

						<div class="cont clear">						
							<p style="font-size: 20px;font-weight: bold;background: cadetblue;padding: 10px;color: white;">Advices</p>
							<hr>
							<p style="font-size: 25px;font-weight: bold;background: darkcyan;padding: 15px;color: cornsilk;"><?php echo $row['advices']; ?></p>
						</div>

						<div class="cont clear">						
							<p style="font-size: 20px;font-weight: bold;background: cadetblue;padding: 10px;color: white;">Blog Posts</p>
							<hr>
							<p style="font-size: 25px;font-weight: bold;background: darkcyan;padding: 15px;color: cornsilk;"><?php echo $row['blog_posts']; ?></p>
						</div>

					</div>
				</div>
				
			</div>
			
		</div>

		<script>

			function save(x, y){
				///document.write(x);
		    	///document.write(y);
				$.cookies.set("nsize", x);
				$.cookies.set("psize", y);
			}

			function check(){
				<?php
					$pageWasRefreshed = (isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] == 'max-age=0');
					if ($pageWasRefreshed) echo "do1();";
					else echo "do2();";
				?>
			}

			/*function save(){
				{sessionStorage.setItem(nsize, $('.Menu').style.width;sessionStorage.setItem(psize, $('.member_contact').style.width;} return null;"
			}*/

		    function do1(){
		    	///var nsize = sessionStorage.getItem("nsize");
		    	///var psize = sessionStorage.getItem("psize");
		    	///document.write("yes");
		    	$.cookies.get(nsize);
		    	$.cookies.get(psize);

		    	if (nsize=="50px") closeNav();
		    	else openNav();

		    	if (psize=="460px") Activities();
		    	else initial();

		    	///sessionStorage.removeItem("nsize");
		    	///sessionStorage.removeItem("psize");
		    	///save(document.getElementsByClassName("menu")[0].style.height, document.getElementsByClassName("member_contact")[0].style.height);
		    	$.cookies.set("nsize",null);
				$.cookies.set("psize", null);
				save(document.getElementsByClassName("menu")[0].style.height, document.getElementsByClassName("member_contact")[0].style.height);
		    }

		    function do2(){
		    	nnext();
		    	initial();
		    	$.cookie("nsize",null);
				$.cookie("psize", null);
				save(document.getElementsById("menu")[0].style.height, document.getElementsByClassName("member_contact")[0].style.height);
		    }


			function initial(){
				document.getElementsByClassName("member_contact")[0].style.width = "100%";
				document.getElementsByClassName("know_member")[0].style.height = "560px";
				document.getElementsByClassName("member_contact")[0].style.height = "560px";
				document.getElementsByClassName("member_contact")[0].style.zIndex = 10;

				document.getElementsByClassName("member_activities")[0].style.width = "0px";
				document.getElementsByClassName("member_activities")[0].style.height = "0px";
				document.getElementsByClassName("member_activities")[0].style.zIndex = 0;

				document.getElementById("follow").style.background = "white";
				document.getElementById("activities").style.background = "cadetblue";
			}

			function Activities(){
				///document.write("yes");
				document.getElementsByClassName("member_contact")[0].style.width = "0px";
				document.getElementsByClassName("member_contact")[0].style.height = "0px";
				document.getElementsByClassName("member_contact")[0].style.zIndex = 0;

				document.getElementsByClassName("member_activities")[0].style.width = "100%";
				document.getElementsByClassName("know_member")[0].style.height = "460px";
				document.getElementsByClassName("member_activities")[0].style.height = "460px";
				document.getElementsByClassName("member_activities")[0].style.zIndex = 10;

				document.getElementById("follow").style.background = "cadetblue";
				document.getElementById("activities").style.background = "white";
			}


		    

		</script>
		
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