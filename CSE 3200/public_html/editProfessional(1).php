<?php

	$roll = $_GET['roll'];

	$connection = mysqli_connect('localhost', 'userName','Password','databaseName') or die(mysqli_error());

	$sql = "select * from professional where roll=".$roll;
	$res = mysqli_query($connection,$sql);
	if ($res){
		$row=mysqli_fetch_array($res);
		$designation = $row['designation'];
		$company = $row['company_or_organization'];
		$branch = $row['branch'];
		$city = $row['city'];
		$state = $row['state'];
		$zip = $row['zip'];
		$country = $row['country'];
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

			<a class="explore" onclick="set_professional();">PROFESSIONAL</a>

			
		</div>

		<div class="form_container clear" >

			<!-- professional form -->
			<div id="professional">
				<header>PROFESSION</header>
				<hr>
				<form id="form3" method="POST" action="EditProfessional.php?roll=<?php echo $roll; ?>">
					<div class="row">
				    	<div class="col-25">
				        <label for="f3_roll">Roll  :  </label>
				      </div>
				      <div class="col-25">
				        <p style="font-size: 20px;font-weight: bold;margin-top: 10px;"><?php echo $roll;?><p>
				      </div>

				      	<div class="col-25">
				        	<label for="f3_podobi">DESIGNATION</label>
				      	</div>
				      	<div class="col-25">
				        	<input type="text" id="f3_podobi" name="Podobi" value="<?php echo $designation; ?>">
				      	</div>
					</div>

					<div class="row">
				      	<div class="col-25">
				        	<label for="f3_company">Company/<br>Organization</label>
				      	</div>
				      	<div class="col-25">
				        	<input type="text" id="f3_company" name="Company" value="<?php echo $company; ?>">
				      	</div>
				      	<div class="col-25">
						    <label for="f3_city">CITY</label>
						</div>
					   	<div class="col-25">
					        <input type="text" id="f3_city" name="city" value="<?php echo $city; ?>">
				      	</div>
					</div>

					<div class="row">
						<div class="col-25">
						    <label for="f3_branch">BRANCH</label>
						</div>
					   	<div class="col-25">
					        <input type="text" id="f3_branch" name="branch" value="<?php echo $branch; ?>">
				      	</div>
						<div class="col-25">
					        <label for="f3_state">STATE</label>
				        </div>
						<div class="col-25">
						    <input type="text" id="f3_state" name="state" value="<?php echo $state; ?>">
					    </div>
					</div>

				  	<div class="row">
					    <div class="col-25">
					        <label for="f3_zip">ZIP/POSTAL CODE</label>
					    </div>
					    <div class="col-25">
					        <input type="text" id="f3_zip" name="zip" value="<?php echo $zip; ?>">
					    </div>
					    <div class="col-25">
					        <label for="f3_country">COUNTRY</label>
					    </div>
					    <div class="col-25">
					        <select id="f3_country" name="country">
					       		<option value="australia" <?php if ($country=='australia') echo 'selected'; ?> >Australia</option>
					       		<option value="Bangladesh" <?php if ($country=='Bangladesh') echo 'selected'; ?> >Bangladesh</option>
				        		<option value="usa" <?php if ($country=='usa') echo 'selected'; ?> >USA</option>
					        </select>
					    </div>

					</div>

					<div class="row">
						<input type="submit" id="f3_submit" name="submit3" value="Submit">
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
