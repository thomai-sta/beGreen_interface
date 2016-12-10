<?php
   include "db.php";
    $name = $_POST[ 'name' ];
	$surname = $_POST[ 'surname' ];
	$myid = $_POST[ 'myid' ];
	$logger = $_POST[ 'logger' ];
	
				echo $name;
	echo $surname;
	echo $myid;
	echo $logger;

	if ($logger=="person")
	{
		if ($name == "thomai") {
	
			$sql="SELECT Recycler.cardID cardid
					FROM Recycler, Person
					WHERE Person.ID=$myid
					AND Person.ID=Recycler.ID";
			$result = mysql_query($sql);
			if (!$result) {mysql_error();}
			$row = mysql_fetch_assoc($result);
			$_SESSION['cardid'] = $row['cardid'];
			$_SESSION['name'] = $name;
			header("Location: recycler/index.php");
			
		}
		else if ($name == "katerina")
		{			
	
			$sql="SELECT workerID
					FROM Worker, Person
					WHERE Person.ID=$myid
					AND Person.ID=Worker.ID";
			$result = mysql_query($sql);
			$row = mysql_fetch_array($result);
			$_SESSION['workerid'] = $row['workerID'];
			$_SESSION['name'] = $name;
			$_SESSION['myid'] = $myid;
			header("Location: worker/index.php");
		}
	} 
	else if ($logger=="company")
	{
		if ($name == "giwrgos") {
			
			$company_manager="edw tha balw to onoma tou company manager";
			$sql="SELECT companyID
					FROM Company
					WHERE company_manager='giwrgos stefanou'";
			$result = mysql_query($sql);
			$row = mysql_fetch_array($result);
			
			$_SESSION['companyid'] = $row['companyID'];
			$_SESSION['name'] = $name;
			header("Location: company/index.php");
		}
		
	}
?>