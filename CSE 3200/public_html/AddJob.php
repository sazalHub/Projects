<?php

    session_start();
    $roll = $_SESSION['user'];
    $added_by = $_GET['added_by'];

	if (isset($_POST['add_job']) && $roll==$added_by){

		$connection = mysqli_connect('localhost', 'id6300094_alumni','alumni','id6300094_alumni') or die(mysqli_error());
		
		$title = $_POST['Title'];
		$company = $_POST['Company'];
		$salary = $_POST['Salary'];
		$post = $_POST['Post'];
		$vacancy = $_POST['Vacancy'];
		$requirements = $_POST['Require'];
		$place = $_POST['Place'];
		$contact = $_POST['Contact'];
		$date = $_POST['Date'];
		$month = $_POST['Month'];
		$year = $_POST['Year'];

		
		///Error Handling///
		///Checking if empty
		if (empty($title)||empty($company)||empty($salary)||empty($post)||empty($vacancy)||empty($requirements)||empty($place)||empty($contact)||empty($date)||empty($month)||empty($year)){
		    header("Location:jobs.php?result=empty");
			exit();
		}
		
		$query = "INSERT INTO jobs(title,company,salary,post,vacancy,requirements,place,contact,added_by,date, month, year) VALUES('$title', '$company', '$salary', '$post', '$vacancy', '$requirements', '$place', '$contact', '$added_by', '$date', '$month', '$year')";
		$res = mysqli_query($connection,$query);
		
		if ($res){
            $query = "select * from contribution where roll='$roll'";
            $res = mysqli_query($connection, $query);
            $row = mysqli_fetch_array($res);
            $cnt = $row['job_posts'];
            $cnt++;
                
            $query = "update contribution set job_posts='$cnt' where roll='$roll'";
            $res = mysqli_query($connection, $query);
                
        }
		
		header("Location:jobs.php?result=success");
		exit();
		
	}
	else{
		header("Location:jobs.php?result=error");
		exit();
	}

 ?>