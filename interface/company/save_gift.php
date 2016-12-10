<?php
    include "db.php";
	if ($_POST['name']=='' || $_POST['description']=='' || $_POST['points']=='' || $_POST['price']=='' || $_POST['suitability']=='') {
		header( "Location: insert_user.php?error=yes" );
	}
	else
	{
		$name = $_POST['name'];
		$description = $_POST['description'];
		$points = $_POST['points'];
		$price = $_POST['price'];
		$suitability = $_POST['suitability'];		
		$sql=("INSERT INTO Gift (description, price, suitability, points, name, company)
				VALUES ('$description', '$price', '$suitability', '$points', '$name', 1 )");
		$result=mysql_query($sql);
		header( "Location: gifts.php" );
	}	
	
?>
    