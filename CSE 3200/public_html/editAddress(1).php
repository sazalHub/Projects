<?php

	$roll = $_GET['roll'];

	$connection = mysqli_connect('localhost', 'id6300094_alumni','alumni','id6300094_alumni') or die(mysqli_error());
	
	$sql = "select * from address where roll=".$roll;
	$res = mysqli_query($connection,$sql);
	if ($res){
		$row=mysqli_fetch_array($res);
		$pstreet = $row['present_street'];
		$pcity = $row['present_city'];
		$pstate = $row['present_state'];
		$pzip = $row['present_zip'];
		$pcountry = $row['present_country'];

		$prstreet = $row['permanent_street'];
		$prcity = $row['permanent_city'];
		$prstate = $row['permanent_state'];
		$przip = $row['permanent_zip'];
		$prcountry = $row['permanent_country'];
	}

?>

<!doctype html>

<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>RUET Alumni</title>
		<link rel="stylesheet" href="home.css">
		<link rel="stylesheet" href="input_page.css">
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

			<a class="explore" onclick="set_address();">ADDRESS</a>

			
		</div>

		<div class="form_container clear" >
			
			<!-- address form -->
			<div id="address" >
				<header>PRESENT ADDRESS</header>
				<hr>
				<form id="form2" method="POST" action="EditAddress.php?roll=<?php echo $roll; ?>">
					<div class="row">
				      	<div class="col-25">
				        <label for="f2_roll">Roll  :  </label>
				      </div>
				      <div class="col-25">
				        <p style="font-size: 20px;font-weight: bold;margin-top: 10px;"><?php echo $roll;?><p>
				      </div>
				    </div>

					<div class="row">
				    	<div class="col-25">
				        	<label for="f2_pstreet">STREET</label>
				      	</div>
				      	<div class="col-25">
				        	<input type="text" id="f2_pstreet" name="Pstreet" value="<?php echo $pstreet; ?>">
				        </div>

					    <div class="col-25">
					      	<label for="f2_pcity">CITY</label>
					    </div>
					    <div class="col-25">
					       	<input type="text" id="f2_pcity" name="Pcity" value="<?php echo $pcity; ?>">
					    </div>
					</div>

					<div class="row">
					    <div class="col-25">
					        <label for="f2_pstate">STATE</label>
					    </div>
					    <div class="col-25">
					        <input type="text" id="f2_pstate" name="Pstate" value="<?php echo $pstate; ?>">
					    </div>

					    <div class="col-25">
					        <label for="f2_pzip">ZIP/POSTAL CODE</label>
					    </div>
					    <div class="col-25">
					       	<input type="text" id="f2_pzip" name="Pzip" value="<?php echo $pzip ?>">
					    </div>
					</div>

					<div class="row">
					    <div class="col-25">
					        <label for="f2_pcountry">COUNTRY</label>
					    </div>
					    <div class="col-25">
					        <select id="f2_pcountry" name="Pcountry">
					          	<option value="australia" <?php if ($pcountry=='australia') echo 'selected'; ?> >Australia</option>
					          	<option value="Bangladesh" <?php if ($pcountry=='Bangladesh') echo 'selected'; ?> >Bangladesh</option>
					          	<option value="usa" <?php if ($pcountry=='usa') echo 'selected'; ?> >USA</option>
					        </select>
					    </div>
					</div>

					<header>PERMANENT ADDRESS</header>
					<hr>
					<div class="row">
				      	<div class="col-25">
				        	<label for="f2_prstreet">STREET</label>
				      	</div>
					    <div class="col-25">
					        <input type="text" id="f2_prstreet" name="PRstreet" value="<?php echo $prstreet; ?>">
					    </div>
					    <div class="col-25">
					      	<label for="f2_prcity">CITY</label>
					    </div>
					    <div class="col-25">
					       	<input type="text" id="f2_prcity" name="PRcity" value="<?php echo $prcity; ?>">
					    </div>
					</div>

					<div class="row">
					    <div class="col-25">
					       	<label for="f2_prstate">STATE</label>
					   	</div>
					    <div class="col-25">
					       	<input type="text" id="f2_prstate" name="PRstate" value="<?php echo $prstate; ?>">
					   	</div>
					    <div class="col-25">
					        <label for="f2_przip">ZIP/POSTAL CODE</label>
					    </div>
					    <div class="col-25">
					       	<input type="text" id="f2_przip" name="PRzip" value="<?php echo $przip; ?>">
					    </div>
					</div>

					<div class="row drop">
				    	<div class="col-25">
				        	<label for="f2_prcountry">COUNTRY</label>
				      	</div>
				      	<div class="col-25">
					       	<select id="prcountry" name="PRcountry">
					       		<option value="australia" <?php if ($prcountry=='australia') echo 'selected'; ?> >Australia</option>
					       		<option value="Bangladesh" <?php if ($prcountry=='Bangladesh') echo 'selected'; ?> >Bangladesh</option>
				        		<option value="usa" <?php if ($prcountry=='usa') echo 'selected'; ?> >USA</option>
				        	</select>
				      	</div>
				    </div>

					<div class="row">
				      	<input type="submit" id="f2_submit" name="submit2" value="Submit">
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