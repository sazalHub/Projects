<?php

    session_start();
    $roll = $_SESSION['user'];
    $album_name = $_GET['album_name'];

	$connection = mysqli_connect('localhost', 'id6300094_alumni','alumni','id6300094_alumni') or die(mysqli_error());

	if (isset($_POST['add_these_images'])){
                        ///$res = 0;
		for ($i = 0;$i<count($_FILES['img']['name']);$i++){

			$filename = $_FILES['img']['name'][$i];
			$tmpname = $_FILES['img']['tmp_name'][$i];
			$filetype = strtolower($_FILES['img']['type'][$i]);
			$filesize = $_FILES['img']['size'][$i];
			$filepath = "gallery/".$album_name.$filename;
							
			$OK1 = 1;
							
			if ($filetype!="image/jpg" && $filetype!="image/jpeg" && $filetype!="image/png")
			    $OK1 = 0;
							
				$OK2 = 1;
			if ($filesize>2097152)
				$OK2 = 0;
							
			$OK3 = 1;
			if (file_exists($filepath))
			    $OK3 = 0;
                            
                            ///echo $OK1.$OK2.$OK3;
			if ($OK1==1 && $OK2==1 && $OK3==1){
				if (move_uploaded_file($tmpname, $filepath)){
					$tm = date("m/d/y h:i:s a")." +GMT";
					$query = "insert into gallery(source,added_by,album_name,date_and_time) values('$filepath','$roll','$album_name','$tm')";
					$res = mysqli_query($connection,$query);
							        ///echo $query;
				}
							    ///$res++;
			}
	    }
	}
	header("Location:exploreAlbum.php?album_name=$album_name");

?>