<?php

	if (isset($_POST['add_album'])){

		$connection = mysqli_connect('localhost', 'id6300094_alumni','alumni','id6300094_alumni') or die(mysqli_error());
		
		$added_by = $_GET['added_by'];
		$album_name = $_POST['album_Name'];
		$album_desc = $_POST['album_Desc'];

		
		///Error Handling///
		///Checking if empty
		if (empty($added_by) || empty($album_name)){
			header("Location:addAlbum.php?result=fill_the_inputs");
			exit();
		}
		
		$query = "select * from albums where album_name='$album_name'";
		$res = mysqli_query($connection, $query);

		if (mysqli_num_rows($res)==0){
			$tm = date("m/d/y h:i:s a");

			$query = "insert into albums(album_name,created_by,album_desc,time) values('$album_name','$added_by','$album_desc','$tm +GMT')";

			$res = mysqli_query($connection, $query);

			if ($res){
				header("Location:albums.php");
				exit();
			}
			else{
				header("Location:addAlbum.php?result=error1");
				exit();
			}

		}
		else{
			header("Location:addAlbum.php?result=there_exists_a_album");
			exit();
		}
	}
	else{
		header("Location:addAlbum.php?result=error2");
		exit();
	}

 ?>