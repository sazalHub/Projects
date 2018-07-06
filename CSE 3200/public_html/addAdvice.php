<?php
	
	session_start();
	$roll = $_SESSION['user'];
	$connection = mysqli_connect('localhost', 'id6300094_alumni','alumni','id6300094_alumni') or die(mysqli_error());

?>

<!doctype html>

<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>RUET Alumni</title>
		<link rel="stylesheet" href="home.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	</head>
	
	<body>
		<div class="big clear">
			
			<div  class="login clear" style="height: auto;">
				<p style="height: 35px;font-size: 26px;font-weight: bolder;color: white;background: brown;">Add an Advice</p>
				<hr>
				<form method="POST" action="Add_Advice.php?added_by=<?php echo $roll; ?>" style="height: auto;">
					
					<div class="row" style="width: 100%;display:ruby;">
				        <label for="added_by">Added By : </label>
				   
				        <p style="font-size: 20px;font-weight: bold;margin-top: 10px;"><?php echo $roll;?><p>
				    </div>

				    <div class="row" style="width: 100%;display: ruby;">

				        <label for="advice_title">Advice Title : </label>


				        <input type="text" id="advice_title" name="advice_Title" placeholder="Advice Title...">

				    </div>

				    <div class="row" style="width: 100%;display: block;">

				        <label for="advice">Advice : </label><br>


				        <textarea id="advice" name="Advice" rows="40" cols="50"></textarea>

				    </div>

				    <br>

					<button type="submit" name="add_advice">SUBMIT</button>
                    
				</form>
				<br>
			</div>
			<br>

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