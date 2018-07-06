<?php

    session_start();
    $roll = $_SESSION['user'];
    $added_by = $_GET['added_by'];

	$connection = mysqli_connect('localhost', 'userName','Password','databaseName') or die(mysqli_error());

	if (isset($_POST['add_advice'])){
        
        $title = $_POST['advice_Title'];
        $advice = $_POST['Advice'];
        
        if (!empty($title) && !empty($advice)){
            
            $mydate=getdate(date("U"));
            $day = $mydate['weekday'];
            $date = $mydate['mday'];
            $month = $mydate['month'];
            $year = $mydate['year'];
            $hour = $mydate['hours'];
            $min = $mydate['minutes'];
            
            $query = "insert into advices(written_by,title,advice,day,date,month,year,hour,min) values('$roll','$title','$advice','$day','$date','$month','$year','$hour','$min')";
            $res = mysqli_query($connection,$query);
            
            if ($res){
                $query = "select * from contribution where roll='$roll'";
                $res = mysqli_query($connection, $query);
                $row = mysqli_fetch_array($res);
                $cnt = $row['advices'];
                $cnt++;
                
                $query = "update contribution set advices='$cnt' where roll='$roll'";
                $res = mysqli_query($connection, $query);
                
            }
        }
        
	}
	header("Location:careers.php?");

?>
