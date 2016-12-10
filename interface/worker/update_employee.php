<?php
    include "db.php";		
		$checkout_date=$_POST['checkout_date'];
		$occupation=$_POST['occupation'];
		$contract=$_POST['contract'];
		$comment=$_POST['comment'];
		$salary=$_POST['salary'];
		$workerid=$_SESSION['workerid'];

		
		$cat1=mysql_query("UPDATE Worker 
							SET	contract=\"$contract\",
							comment=\"$comment\",
							salary=$salary,
							occupation=\"$occupation\",
							checkout_date=\"$checkout_date\"
							WHERE workerID=$workerid");
		header( "Location: my_employees.php" );
?>