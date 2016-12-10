<?php
    include "db.php";
	if ($_POST['year']>1994  && $_POST['parent']=='') {
		header( "Location: insert_user.php?error=yes" );
	}		
	else if ($_POST['name']=='' || $_POST['surname']=='' || $_POST['phone_number']=='' || $_POST['day']=='' || $_POST['month']==''|| $_POST['gender']=='' || $_POST['year']=='' || $_POST['municipality']=='' ) {
		header( "Location: insert_user.php?error=yes" );
	}
	else
	{
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$phone_number = $_POST['phone_number'];
		$identity_card = $_POST['identity_card'];
		$municipality = $_POST['municipality'];		
		$date = $_POST['day']."/".$_POST['month']."/".$_POST['year'];
		$gender=$_POST['gender'];
		$parent=$_POST['parent'];
		$sql=("INSERT INTO Person (name, surname, phone_number, municipality, date_of_birth, gender, identity_number, parent)
				VALUES ('$name', '$surname', '$phone_number', '$municipality', '$date', '$gender', '$identity_card', '$parent' )");
		$result=mysql_query($sql);
		$id=mysql_insert_id();
		$date=$_POST['date'];
		
		echo $id;
		$sql2=("INSERT INTO Recycler (ID, points, number_of_received_gifts, last_recycled, active_since)
				VALUES ('$id', '0', '0', null, $date)");	
		$result2=mysql_query($sql2);
		header( "Location: recyclers.php" );
	}	
	
?>
    