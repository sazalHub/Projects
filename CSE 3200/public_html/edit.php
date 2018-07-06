<?php

	$roll = $_GET['roll'];

	$connection = mysqli_connect('localhost', 'id6300094_alumni','alumni','id6300094_alumni') or die(mysqli_error());

	$sql = "select * from personal where roll=".$roll;
	$res = mysqli_query($connection,$sql);
	if ($res){
		$row=mysqli_fetch_array($res);
		$name = $row['name'];
		$series = $row['series'];
		$email = $row['email'];
		$bdate = $row['bdate'];
		$bmonth = $row['bmonth'];
		$byear = $row['byear'];
	}

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

	$sql = "select * from activities where roll=".$roll;
	$res = mysqli_query($connection,$sql);
	if ($res){
		$row=mysqli_fetch_array($res);
		$github = $row['github'];
		$guser = $row['github_id'];
		$quora = $row['quora'];
		$quser = $row['quora_id'];
		$stack0 = $row['stack_overflow'];
		$stuser = $row['stack_overflow_id'];
		$youtube = $row['youtube'];
		$yuser = $row['youtube_channel'];
		$uva = $row['uva'];
		$uuser = $row['uva_id'];
		$spoj = $row['spoj'];
		$spuser = $row['spoj_id'];
		$cf = $row['cf'];
		$cfuser = $row['cf_id'];
		$hr = $row['hackerrank'];
		$hruser = $row['hackerrank_id'];
		$he = $row['hackerearth'];
		$heuser = $row['hackerearth_id'];
	}

?>

<!doctype html>

<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>RUET Alumni</title>
		<link rel="stylesheet" href="input_page.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	</head>
	
	<body onload="begin();">

		<div class="selecter clear">
			<!--<a><i class="fa" style="font-size:36px;">&#xf0fe;</i>PERSONAL</a>
			<a><i class="fa" style="font-size:36px;">&#xf0fe;</i>ADRESS</a>
			<a><i class="fa" style="font-size:36px;">&#xf0fe;</i>PROFESSIONAL</a>
			<a><i class="fa" style="font-size:36px;">&#xf0fe;</i>CONTACT</a>
			<a><i class="fa" style="font-size:36px;">&#xf0fe;</i>ACTIVITIES</a>-->

			<a class="explore" onclick="set_personal();">PERSONAL</a>
			<a class="explore" onclick="set_address();">ADDRESS</a>
			<a class="explore" onclick="set_professional();">PROFESSIONAL</a>
			<a class="explore" onclick="set_contact();">CONTACT</a>
			<a class="explore" onclick="set_activities();">ACTIVITIES</a>

			
		</div>

		<div class="form_container clear" >
			
			<!-- personal form -->
			<div id="personal">
				<header>PERSONAL</header>
				<hr>
				<form id="form1" method="POST">

					<div class="row">
				      <div class="col-25">
				        <label for="f1_roll">Roll  :  </label>
				      </div>
				      <div class="col-25">
				        <p style="font-size: 20px;font-weight: bold;margin-top: 10px;"><?php echo $roll;?><p>
				      </div>

				      <div class="col-25">
				        <label for="f1_series">Series</label>
				      </div>
				      <div class="col-25">
				        <p style="font-size: 20px;font-weight: bold;margin-top: 10px;"><?php echo $series;?><p>
				      </div>
				    </div>

					<div class="row">
				      <div class="col-25">
				        <label for="f1_name">Name</label>
				      </div>
				   
				      <div class="col-50">
				        <input type="text" id="f1_name" name="Name" value="<?php echo $name;?>">
				      </div>
				    </div>

				    <div class="row">
				      <div class="col-25">
				        <label for="f1_image">Image</label>
				      </div>

				      <div class="col-75">
				      	<br>
				        <input type="file" id="f1_image" name="Image">
				      </div>
				    </div>

				    <div class="row">
				      <div class="col-25">
				        <label for="f1_email">Email</label>
				      </div>
				      <div class="col-75">
				        <input type="text" id="f1_email" name="Email" value="<?php echo $email;?>">
				      </div>
				    </div>

				    <div class="row">
				      <div class="col-25">
				        <label for="f1_birth_date">Birthday</label>
				      </div>
				      <div class="col-25">
				        <input type="text" id="f1_bdate" name="Bdate" value="<?php echo $bdate;?>">
				      </div>
				      <div class="col-25">
				        <input type="text" id="f1_bmonth" name="Bmonth" value="<?php echo $bmonth;?>">
				      </div>
				      <div class="col-25">
				        <input type="text" id="f1_byear" name="Byear" value="<?php echo $byear;?>">
				      </div>
				    </div>

				    <div class="row">
				      <input type="submit" id="f1_submit" name="submit1" value="Submit">
				    </div>
				</form>

				<?php

					if (isset($_POST['submit1'])){
						$name = $_POST['Name'];
						$email = $_POST['Email'];
						$bdate = $_POST['Bdate'];
						$bmonth = $_POST['Bmonth'];
						$byear = $_POST['Byear'];

						$query = "update personal set name='".$name."',email='".$email."',bdate='".$bdate."',bmonth='".$bmonth."',byear='".$byear."' where roll=".$roll;
						$res = mysqli_query($connection,$query);

						///header("Location:edit.php?roll=$roll");
					}

				?>

			</div>
			<!---->

			<!-- address form -->
			<div id="address">
				<header>PRESENT ADDRESS</header>
				<hr>
				<form id="form2" method="POST">
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

				<?php

					if (isset($_POST['submit2'])){

						$pstreet = $_POST['Pstreet'];
						$pcity = $_POST['Pcity'];
						$pstate = $_POST['Pstate'];
						$pzip = $_POST['Pzip'];
						$pcountry = $_POST['Pcountry'];

						$prstreet = $_POST['PRstreet'];
						$prcity = $_POST['PRcity'];
						$prstate = $_POST['PRstate'];
						$przip = $_POST['PRzip'];;
						$prcountry = $_POST['PRcountry'];

						$query = "update address set present_street='".$pstreet."',present_city='".$pcity."',present_state='".$pstate."',
						present_zip='".$pzip."',present_country='".$pcountry."' where roll=".$roll;
						$res = mysqli_query($connection,$query);
						
						$query = "update address set permanent_street='".$prstreet."',permanent_city='".$prcity."',permanent_state='".$prstate."',permanent_zip='".$przip."',permanent_country='".$prcountry."' where roll=".$roll;
						$res = mysqli_query($connection,$query);
						
					}

				?>
			</div>
			<!---->

			<!-- professional form -->
			<div id="professional">
				<header>PROFESSION</header>
				<hr>
				<form id="form3" method="POST">
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

				<?php

					if (isset($_POST['submit3'])){

						$branch = $_POST['branch'];
						$city = $_POST['city'];
						$state = $_POST['state'];
						$zip = $_POST['zip'];
						$country = $_POST['country'];
						$podobi = $_POST['Podobi'];
						$company = $_POST['Company'];

						$query = "update professional set designation='".$podobi."',company_or_organization='".$company."',branch='".$branch."',city='".$city."',state='".$state."',zip='".$zip."',country='".$country."' where roll=".$roll;
						$res = mysqli_query($connection,$query);
						
						echo $query;
						if (!$res) die("OOPPS! query failed".mysqli_error($connection));
					}

				?>

			</div>
			<!---->

			<!-- contact form -->
			<div id="contact">
				
				<header>CONTACT</header>
				<hr>
				<form class="form4" method="POST">
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

				<?php

					if (isset($_POST['submit4'])){

						$email = $_POST['CEmail'];
						$phone = $_POST['Phone'];
						$fb = $_POST['Fb'];
						$ins = $_POST['Ins'];
						$skype = $_POST['Skype'];
						$twitter = $_POST['Twitter'];

						$query = "update contact set email='".$email."',phone_number='".$phone."',facebook_id='".$fb."',instagram_id='".$ins."',skype_id='".$skype."',twitter_id='".$twitter."' where roll=".$roll;
						$res = mysqli_query($connection,$query);
						if (!$res) die("OOPPS! query failed".mysqli_error($connection));
					}

				?>

			</div>
			<!---->

			<!-- activities form -->
			<div id="activities">
				<header>ACTIVITIES</header>
				<hr>
				<form class="form5" method="POST">
					
					<div class="row">
					      <div class="col-25">
				        <label for="f5_roll">Roll  :  </label>
				      </div>
				      <div class="col-25">
				        <p style="font-size: 20px;font-weight: bold;margin-top: 10px;"><?php echo $roll;?><p>
				      </div>
					  </div>

					<div class="row">
				      <div class="col-25">
				        <label for="github">GITHUB</label>
				      </div>
				      <div class="col-25">
				        <input type="text" id="github" name="Github" value="<?php echo $github; ?>">
				      </div>
				   
				      <div class="col-25">
				        <label for="guser">Username</label>
				      </div>
				      <div class="col-25">
				        <input type="text" id="guser" name="Guser" value="<?php echo $guser; ?>">
				      </div>
					</div>

					<div class="row">
					      <div class="col-25">
					        <label for="quora">QUORA</label>
					      </div>
					      <div class="col-25">
					        <input type="text" id="quora" name="Quora" value="<?php echo $quora; ?>">
					      </div>
					   
					      <div class="col-25">
					        <label for="quser">Username</label>
					      </div>
					      <div class="col-25">
					        <input type="text" id="quser" name="Quser" value="<?php echo $quser; ?>">
					      </div>
					</div>

					<div class="row">
					      <div class="col-25">
					        <label for="stackO">STACK-OVERFLOW</label>
					      </div>
					      <div class="col-25">
					        <input type="text" id="stackO" name="StackO" value="<?php echo $stack0; ?>">
					      </div>
					   
					      <div class="col-25">
					        <label for="stuser">Username</label>
					      </div>
					      <div class="col-25">
					        <input type="text" id="stuser" name="STuser" value="<?php echo $stuser; ?>">
					      </div>
					</div>

					<div class="row">
					      <div class="col-25">
					        <label for="youtube">YOUTUBE</label>
					      </div>
					      <div class="col-25">
					        <input type="text" id="youtube" name="Youtube" value="<?php echo $youtube; ?>">
					      </div>
					   
					      <div class="col-25">
					        <label for="yuser">Username</label>
					      </div>
					      <div class="col-25">
					        <input type="text" id="yuser" name="Yuser" value="<?php echo $yuser; ?>">
					      </div>
					</div>

					<div class="row">
					      <div class="col-25">
					        <label for="uva">UVA</label>
					      </div>
					      <div class="col-25">
					        <input type="text" id="uva" name="Uva" value="<?php echo $uva; ?>">
					      </div>
					   
					      <div class="col-25">
					        <label for="uuser">Username</label>
					      </div>
					      <div class="col-25">
					        <input type="text" id="uuser" name="Uuser" value="<?php echo $uuser; ?>">
					      </div>
					</div>

					<div class="row">
					      <div class="col-25">
					        <label for="spoj">SPOJ</label>
					      </div>
					      <div class="col-25">
					        <input type="text" id="spoj" name="Spoj" value="<?php echo $spoj; ?>">
					      </div>
					   
					      <div class="col-25">
					        <label for="spuser">Username</label>
					      </div>
					      <div class="col-25">
					        <input type="text" id="spuser" name="SPuser" value="<?php echo $spuser; ?>">
					      </div>
					</div>

					<div class="row">
					      <div class="col-25">
					        <label for="cf">CODEFORCES</label>
					      </div>
					      <div class="col-25">
					        <input type="text" id="cf" name="CF" value="<?php echo $cf; ?>">
					      </div>
					   
					      <div class="col-25">
					        <label for="cfuser">Username</label>
					      </div>
					      <div class="col-25">
					        <input type="text" id="cfuser" name="CFuser" value="<?php echo $cfuser; ?>">
					      </div>
					</div>

					<div class="row">
					      <div class="col-25">
					        <label for="hr">HACKERRANK</label>
					      </div>
					      <div class="col-25">
					        <input type="text" id="hr" name="HR" value="<?php echo $hr; ?>">
					      </div>
					   
					      <div class="col-25">
					        <label for="hruser">Username</label>
					      </div>
					      <div class="col-25">
					        <input type="text" id="hruser" name="HRuser" value="<?php echo $hruser; ?>">
					      </div>
					</div>

					<div class="row">
					      <div class="col-25">
					        <label for="he">HACKEREARTH</label>
					      </div>
					      <div class="col-25">
					        <input type="text" id="he" name="HE" value="<?php echo $he; ?>">
					      </div>
					   
					      <div class="col-25">
					        <label for="heuser">Username</label>
					      </div>
					      <div class="col-25">
					        <input type="text" id="heuser" name="HEuser" value="<?php echo $heuser; ?>">
					      </div>
					</div>

					<div class="row">
						      <input type="submit" id="f5_submit" name="submit5" value="Submit">
						    </div>
				</form>

				<?php

					if (isset($_POST['submit5'])){

						$github = $_POST['Github'];
						$guser = $_POST['Guser'];
						$quora = $_POST['Quora'];
						$quser = $_POST['Quser'];
						$stack0 = $_POST['StackO'];
						$stuser = $_POST['STuser'];
						$youtube = $_POST['Youtube'];
						$yuser = $_POST['Yuser'];
						$uva = $_POST['Uva'];
						$uuser = $_POST['Uuser'];
						$spoj = $_POST['Spoj'];
						$spuser = $_POST['SPuser'];
						$cf = $_POST['CF'];
						$cfuser = $_POST['CFuser'];
						$hr = $_POST['HR'];
						$hruser = $_POST['HRuser'];
						$he = $_POST['HE'];
						$heuser = $_POST['HEuser'];

						$query = "update activities set github='".$github."',github_id='".$guser."' where roll=".$roll;
						$res = mysqli_query($connection,$query);
						if (!$res) die("OOPPS! query failed".mysqli_error($connection));

						$query = "update activities set quora='".$quora."',quora_id='".$quser."' where roll=".$roll;
						$res = mysqli_query($connection,$query);
						if (!$res) die("OOPPS! query failed".mysqli_error($connection));

						$query = "update activities set stack_overflow='".$stack0."',stack_overflow_id='".$stuser."' where roll=".$roll;
						$res = mysqli_query($connection,$query);
						if (!$res) die("OOPPS! query failed".mysqli_error($connection));

						$query = "update activities set youtube='".$youtube."',youtube_channel='".$yuser."' where roll=".$roll;
						$res = mysqli_query($connection,$query);
						if (!$res) die("OOPPS! query failed".mysqli_error($connection));

						$query = "update activities set uva='".$uva."',uva_id='".$uuser."' where roll=".$roll;
						$res = mysqli_query($connection,$query);
						if (!$res) die("OOPPS! query failed".mysqli_error($connection));

						$query = "update activities set spoj='".$spoj."',spoj_id='".$spuser."' where roll=".$roll;
						$res = mysqli_query($connection,$query);
						if (!$res) die("OOPPS! query failed".mysqli_error($connection));

						$query = "update activities set cf='".$cf."',cf_id='".$cfuser."' where roll=".$roll;
						$res = mysqli_query($connection,$query);
						if (!$res) die("OOPPS! query failed".mysqli_error($connection));

						$query = "update activities set hackerrank='".$hr."',hackerrank_id='".$hruser."' where roll=".$roll;
						$res = mysqli_query($connection,$query);
						if (!$res) die("OOPPS! query failed".mysqli_error($connection));

						$query = "update activities set hackerearth='".$he."',hackerearth_id='".$heuser."' where roll=".$roll;
						$res = mysqli_query($connection,$query);
						if (!$res) die("OOPPS! query failed".mysqli_error($connection));


					}

				?>

			</div>
			<!---->

			<script type="text/javascript">
				
				///begin();
				function begin(){
					document.getElementsByClassName("explore")[0].style.background = "white";
					document.getElementsByClassName("explore")[0].style.color = "black";

					document.getElementById("personal").style.display = 'block';
					document.getElementById("address").style.display = 'none';
					document.getElementById("professional").style.display = 'none';
					document.getElementById("contact").style.display = 'none';
					document.getElementById("activities").style.display = 'none';

					///document.getElementsByClassName("personal")[0].style.height = "auto";
				}

				function set_personal(){

					var cls = document.getElementsByClassName("explore");
					for (var i=0;i<cls.length;i++){
						cls[i].style.background = "brown";
						cls[i].style.color = "white";
						///cls[i].style.height = "0px";
					}
					cls[0].style.background = "white";
					cls[0].style.color = "black";

					///document.write("1");
					document.getElementById("personal").style.display = 'block';
					document.getElementById("address").style.display = 'none';
					document.getElementById("professional").style.display = 'none';
					document.getElementById("contact").style.display = 'none';
					document.getElementById("activities").style.display = 'none';
					
					///cls[0].style.height = "auto";
				}

				function set_address(){

					var cls = document.getElementsByClassName("explore");
					for (var i=0;i<5;i++){
						cls[i].style.background = "brown";
						cls[i].style.color = "white";
						///cls[i].style.height = "0px";
					}
					cls[1].style.background = "white";
					cls[1].style.color = "black";

					document.getElementById("personal").style.display = 'none';
					document.getElementById("address").style.display = 'block';
					document.getElementById("professional").style.display = 'none';
					document.getElementById("contact").style.display = 'none';
					document.getElementById("activities").style.display = 'none';

					///document.write("1");
					///cls[1].style.height = "auto";
				}


				function set_professional(){
					var cls = document.getElementsByClassName("explore");
					for (var i=0;i<5;i++){
						cls[i].style.background = "brown";
						cls[i].style.color = "white";
						///cls[i].style.height = "0px";
					}
					cls[2].style.background = "white";
					cls[2].style.color = "black";

					document.getElementById("personal").style.display = 'none';
					document.getElementById("address").style.display = 'none';
					document.getElementById("professional").style.display = 'block';
					document.getElementById("contact").style.display = 'none';
					document.getElementById("activities").style.display = 'none';

					
					///cls[2].style.height = "auto";
				}

				function set_contact(){
					var cls = document.getElementsByClassName("explore");
					for (var i=0;i<5;i++){
						cls[i].style.background = "brown";
						cls[i].style.color = "white";
						///cls[i].style.height = "0px";
					}
					cls[3].style.background = "white";
					cls[3].style.color = "black";

					document.getElementById("personal").style.display = 'none';
					document.getElementById("address").style.display = 'none';
					document.getElementById("professional").style.display = 'none';
					document.getElementById("contact").style.display = 'block';
					document.getElementById("activities").style.display = 'none';

					
					///document.getElementsByClassName("contact")[0].style.height = "auto";
					///cls[3].style.height = "auto";
				}

				function set_activities(){
					var cls = document.getElementsByClassName("explore");
					for (var i=0;i<5;i++){
						cls[i].style.background = "brown";
						cls[i].style.color = "white";
						///cls[i].style.height = "0px";
					}
					cls[4].style.background = "white";
					cls[4].style.color = "black";

					document.getElementById("personal").style.display = 'none';
					document.getElementById("address").style.display = 'none';
					document.getElementById("professional").style.display = 'none';
					document.getElementById("contact").style.display = 'none';
					document.getElementById("activities").style.display = 'block';

					
					///cls[4].style.height = "auto";
				}



			</script>

		</div>
	
	</body>

</html>