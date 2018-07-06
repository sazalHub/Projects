<?php

	if (isset($_POST['logout'])){
		session_start();
		session_unset();
		session_destroy();
		header("Location:index.php?result=logged_out");
		exit();
	}
	else{
		header("Location:index.php?result=error_in_log_out");
		exit();
	}

?>